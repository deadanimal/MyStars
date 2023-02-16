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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('status');
            $table->string('platform');
            $table->string('reference_link');
            $table->string('caption');
            $table->text('brand_introduction');
            $table->text('campaign_direction');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();          
        });

        Schema::create('contents', function (Blueprint $table) {
            $table->id();

            $table->string('url');
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('campaign_id');

            $table->timestamps();          
        });      
        
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

            $table->string('status');
            $table->unsignedBigInteger('user_id');            

            $table->timestamps();        
        });   
        
        Schema::create('ticket_messages', function (Blueprint $table) {
            $table->id();

            $table->text('message');
            $table->unsignedBigInteger('user_id');            

            $table->timestamps();        
        });    
        
        Schema::create('images', function (Blueprint $table) {
            $table->id();

            $table->string('status');
            $table->string('path');
            $table->unsignedBigInteger('user_id')->nullable();

            $table->unsignedBigInteger('taggable_id')->nullable();   
            $table->string('taggable_type')->nullable();   

            $table->timestamps();        
        });             
    }

    /**
     * Reverse the migrations.
     *         'url',
     */
    public function down(): void
    {
        //
    }
};
