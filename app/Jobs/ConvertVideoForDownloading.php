<?php

namespace App\Jobs;

use Carbon\Carbon;
use App\Models\Post;
use FFMpeg\Format\Video\X264;
use Illuminate\Bus\Queueable;
use FFMpeg\Coordinate\TimeCode;
use FFMpeg\Coordinate\Dimension;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Validation\Rules\Dimensions;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class ConvertVideoForDownloading implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function handle()
    {
        // create a video format...
        // $lowBitrateFormat = (new X264)->setKiloBitrate(500);
        $midBitrateFormat  = (new X264)->setKiloBitrate(1500);
        // $highBitrateFormat = (new X264)->setKiloBitrate(3000);

        // open the uploaded video from the right disk...
        FFMpeg::fromDisk($this->post->disk)
            ->open($this->post->path)

            /* ->addFilters(function ($filters) {
                $filters->addFilter('scale=1080:1920');
            }) */

            ->addFilter(function ($filters) {
                $filters->clip(TimeCode::fromSeconds(1), TimeCode::fromSeconds(30));
            })

            /* ->addFilter(function ($filters) {
                $filters->resize(new Dimension(1080, 1920));
            }) */

            // call the 'export' method...
            ->export()

            // tell the MediaExporter to which disk and in which format we want to export...
            ->toDisk('public')
            ->inFormat($midBitrateFormat)

            // call the 'save' method with a filename...
            ->save('uploads/' . $this->post->user->id . '/' . 'videos/' . $this->post->id . '.mp4');

        // update the database so we know the convertion is done!
        $this->post->update([
            'converted_for_downloading_at' => Carbon::now(),
        ]);
    }
}
