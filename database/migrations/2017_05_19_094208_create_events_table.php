<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('status', 50);
            $table->string('title', 255);
            $table->string('slug', 255)->nullable();
            $table->string('organizer', 255);
            $table->longText('description');
            $table->string('geoposition', 42);
            $table->string('location', 1000);
            $table->string('country_iso', 2);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('event_url', 200)->nullable();
            $table->string('contact_person', 75);
            $table->string('picture', 255);
            $table->dateTime('pub_date');
            $table->dateTime('created');
            $table->dateTime('updated');
            $table->integer('creator_id');
            $table->dateTime('last_report_notification_sent_at')->nullable();
            $table->integer('report_notifications_count')->default(0);
            $table->string('name_for_certificate', 255)->nullable();
            $table->integer('participants_count')->nullable();
            $table->double('average_participant_age')->nullable();
            $table->double('percentage_of_females')->nullable();
            $table->string('codeweek_for_all_participation_code', 100)->nullable();
            $table->dateTime('reported_at')->nullable();
            $table->dateTime('certificate_generated_at')->nullable();
            $table->string('organizer_type', 50);
        });
    }


//`creator_id` INT(11) NOT NULL,


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
