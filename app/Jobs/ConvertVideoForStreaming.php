<?php

namespace App\Jobs;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use FFMpeg\Coordinate\TimeCode;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use FFMpeg\Format\Video\X264;

class ConvertVideoForStreaming implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function handle()
    {
        // create some video formats...
        $lowBitrateFormat  = (new X264)->setKiloBitrate(500);
        // $midBitrateFormat  = (new X264)->setKiloBitrate(1500);
        $highBitrateFormat = (new X264)->setKiloBitrate(3000);

        // open the uploaded video from the right disk...
        FFMpeg::fromDisk($this->post->disk)
            ->open($this->post->path)

            // call the 'exportForHLS' method and specify the disk to which we want to export...
            ->exportForHLS()

            ->toDisk('public')

            // we'll add different formats so the stream will play smoothly
            // with all kinds of internet connections...
            
            // ->addFormat($lowBitrateFormat, function ($post) {
            //     $post->addFilter('trim=start=0:end=1');
            // })

            // ->addFormat($midBitrateFormat, function ($post) {
            //     $post->addFilter('trim=start=0:end=1');
            // })


            // ->addFormat($lowBitrateFormat, function ($post) {
            //    $post->addFilter(function ($filters) {
            //        $filters->clip(TimeCode::fromSeconds(1), TimeCode::fromSeconds(30));
            //    });
            // })

            ->addFormat($lowBitrateFormat)
            // ->addFormat($midBitrateFormat)
            ->addFormat($highBitrateFormat)

            // call the 'save' method with a filename...
            ->save('uploads/' . $this->post->user->id . '/' . 'videos/' . $this->post->id . '.m3u8');
            

        // update the database so we know the convertion is done!
        $this->post->update([
            'converted_for_streaming_at' => Carbon::now(),
        ]);

    }
}
