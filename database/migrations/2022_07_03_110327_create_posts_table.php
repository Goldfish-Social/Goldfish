<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('media')->nullable();
            $table->string('caption')->nullable();
            $table->bigInteger('profile_id')->unsigned()->nullable();
            $table->bigInteger('in_reply_to_id')->unsigned()->nullable();
            $table->bigInteger('reblog_of_id')->unsigned()->nullable();
            $table->string('url')->nullable();
            $table->boolean('is_nsfw')->default(false);
            $table->enum('visibility', ['public', 'unlisted', 'private', 'direct'])->default('public');
            $table->boolean('reply')->default(false);
            $table->bigInteger('likes_count')->unsigned()->default(0);
            $table->bigInteger('reblogs_count')->unsigned()->default(0);
            $table->string('language')->nullable();
            $table->bigInteger('conversation_id')->unsigned()->nullable();
            $table->boolean('local')->default(true);
            $table->bigInteger('application_id')->unsigned()->nullable();
            $table->bigInteger('in_reply_to_profile_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
