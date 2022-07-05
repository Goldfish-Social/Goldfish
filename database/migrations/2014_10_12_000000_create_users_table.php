<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable()->unique()->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('is_admin')->default(false);
            $table->text('bio', 150)->nullable();
            $table->string('website')->nullable();
            $table->string('header_bg')->default('default-header.jpg');
            $table->string('avatar')->default('default.jpg');
            // ActivityPub
            $table->string('sharedInbox')->nullable()->index();
            $table->string('inbox_url')->nullable();
            $table->string('outbox_url')->nullable();
            $table->string('key_id')->nullable()->unique()->index();
            $table->string('follower_url')->nullable();
            $table->string('following_url')->nullable();
            // RSA Key Pair
            $table->text('private_key')->nullable();
            $table->text('public_key')->nullable();
            $table->boolean('2fa_enabled')->default(false);
            $table->string('2fa_secret')->nullable();
            $table->json('2fa_backup_codes')->nullable();
            $table->timestamp('2fa_setup_at')->nullable();
            $table->timestamp('deleted_after')->nullable();
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
        Schema::dropIfExists('users');
    }
}
