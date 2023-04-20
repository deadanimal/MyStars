<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('status');
            $table->integer('budget');
            $table->string('platform');
            $table->string('platform_content_type');
            $table->text('creative_direction');
            $table->text('brand_description');
            $table->string('geography');
            $table->string('audience');
            $table->unsignedBigInteger('brand_id');
            $table->timestamps();
        });

        Schema::create('challenge_activities', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('challenge_id')->nullable();
            $table->timestamps();
        });   
        
        Schema::create('challenge_references', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('url');
            $table->string('type');
            $table->unsignedBigInteger('challenge_id')->nullable();
            $table->timestamps();
        });           

        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('url')->unique();
            $table->string('status');
            $table->unsignedBigInteger('challenge_id')->nullable();
            $table->unsignedBigInteger('creator_id')->nullable();
            $table->timestamps();
        });  
        
        Schema::create('submission_performances', function (Blueprint $table) {
            $table->id();
    
            $table->integer('views');
            $table->integer('clicks');
            $table->integer('comments');
            $table->integer('likes');
            $table->integer('shares');

            $table->unsignedBigInteger('challenge_id')->nullable();
            $table->unsignedBigInteger('creator_id')->nullable();
            $table->unsignedBigInteger('submission_id')->nullable();
            $table->timestamps();
        });    
        
        Schema::create('submission_rewards', function (Blueprint $table) {
            $table->id();
    
            $table->integer('payout');
            $table->string('status');

            $table->unsignedBigInteger('challenge_id')->nullable();
            $table->unsignedBigInteger('creator_id')->nullable();
            $table->unsignedBigInteger('submission_id')->nullable();
            $table->timestamps();
        });    

        Schema::create('systems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('type');
            $table->string('reference');
            $table->string('key');
            $table->string('value');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
