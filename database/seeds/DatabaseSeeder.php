<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mixcloudtracks')->delete();
        DB::table('events')->delete();
        DB::table('artists')->delete();

        $this->call('ArtistTableSeeder');
        $this->call('EventsSeeder');
        $this->call('MixCloudTracksSeeder');
    }
}


class ArtistTableSeeder extends Seeder
{
    public function run() {

        DB::table('artists')->insert(array(
            array(
                'id'   => 1,
                'name' => 'kitkut',
                'description' => 'fdrgrtghrth',
                'facebookLink' => 'https://www.facebook.com/kitkutsbassroom/',
                'mixcloudLink' => 'https://www.mixcloud.com/kitkut/'
            ),
            array(
                'id'   => 2,
                'name' => 'kitkut2',
                'description' => 'fdrgrtghrt3rwrfweh',
                'facebookLink' => 'https://www.facebook.com/kitkutsbassroom2/',
                'mixcloudLink' => 'https://www.mixcloud.com/kitkut2/'
            )
        ));
    }
}

class EventsSeeder extends Seeder
{
    public function run() {
        DB::table('events')->insert([
            [
                'name'          => 'party1',
                'date'          => Carbon::now()->format('Y-m-d H:i:s'),
                'location'      => 'alte Damenhandschuhfabrik',
                'city'          => 'Leipzig',
                'country'       => 'Germany',
                'facebooklink'  => '#1'
            ],
            [
                'name'          => 'party2',
                'date'          => Carbon::now()->format('Y-m-d H:i:s'),
                'location'      => 'Absturz',
                'city'          => 'Leipzig',
                'country'       => 'Germany',
                'facebooklink'  => '#2'
            ],
            [
                'name'          => 'party3',
                'date'          => Carbon::now()->format('Y-m-d H:i:s'),
                'location'      => 'Werk 2',
                'city'          => 'Leipzig',
                'country'       => 'Germany',
                'facebooklink'  => '#3'
            ],
            [
                'name'          => 'party4',
                'date'          => Carbon::now()->format('Y-m-d H:i:s'),
                'location'      => 'alte Damenhandschuhfabrik',
                'city'          => 'Leipzig',
                'country'       => 'Germany',
                'facebooklink'  => '#4'
            ]
        ]);
    }
}


class MixCloudTracksSeeder extends Seeder
{
    public function run() {
        DB::table('mixcloudtracks')->insert([
            [
                'artist_id'     => 1,
                'code'          => 'https%3A%2F%2Fwww.mixcloud.com%2Fkitkut%2Fjenny-sharp-x-kitkut-kmco-teaser-mix'
            ],
            [
                'artist_id'     => 1,
                'code'          => 'https%3A%2F%2Fwww.mixcloud.com%2Fkitkut%2Fkitkut-beyond-mix-tape-part-iii'
            ]
        ]);
    }
}
