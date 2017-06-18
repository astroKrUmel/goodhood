<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_event', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->integer('artist_id')->unsigned();

            $table->foreign('event_id')
                ->references('id')
                ->on('events');

            $table->foreign('artist_id')
                ->references('id')
                ->on('artists');

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
        Schema::table('artist_event', function (Blueprint $table) {
//            $table->dropForeign('artist_event_event_id_foreign');
            $table->dropForeign(['event_id']);
            $table->dropColumn('event_id');
//            $table->dropForeign('artist_event_artist_id_foreign');
            $table->dropForeign(['artist_id']);
            $table->dropColumn('artist_id');
        });
        Schema::dropIfExists('events_artists');
    }
}
