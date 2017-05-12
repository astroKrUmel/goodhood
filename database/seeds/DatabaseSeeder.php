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
                'name' => 'Gucci Ming',
                'route' => 'gucci-ming',
                'biography' => '',
                'facebookLink' => 'https://www.facebook.com/Mingi187',
                'mixcloudLink' => '',
                'link' => ''
            ),
            array(
                'id'   => 2,
                'name' => 'Phax',
                'route' => 'phax',
                'biography' => '',
                'facebookLink' => 'https://www.facebook.com/phaxinstrumentals/',
                'mixcloudLink' => 'https://www.mixcloud.com/phax/',
                'link' => 'https://soundcloud.com/phax'
            ),
            array(
                'id'   => 3,
                'name' => 'Jenny Sharp',
                'route' => 'jenny-sharp',
                'biography' => '',
                'facebookLink' => 'https://www.facebook.com/sharpradi0',
                'mixcloudLink' => 'https://www.mixcloud.com/SharpRadio/',
                'link' => 'https://soundcloud.com/sharpradio'
            ),
            array(
                'id'   => 4,
                'name' => 'KitKut',
                'route' => 'kitkut',
                'biography' => '',
                'facebookLink' => 'https://www.facebook.com/kitkutsbassroom/',
                'mixcloudLink' => 'https://www.mixcloud.com/kitkut/',
                'link' => 'http://www.beyond07.com/'
            ),
            array(
                'id'   => 5,
                'name' => 'Alex The Kit',
                'route' => 'alex-the-kit',
                'biography' => '',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => ''
            ),
            array(
                'id'   => 6,
                'name' => 'DJ Buzz',
                'route' => 'dj-buzz',
                'biography' => '',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => ''
            ),
            array(
                'id'   => 7,
                'name' => 'Passerie',
                'route' => 'passerie',
                'biography' => '',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => 'http://wasrap.de/'
            ),
            array(
                'id'   => 8,
                'name' => 'Goodkat',
                'route' => 'goodkat',
                'biography' => '',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => ''
            ),

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
//            [
//                'artist_id'     => 1,
//                'code'          => 'https%3A%2F%2Fwww.mixcloud.com%2Fkitkut%2Fjenny-sharp-x-kitkut-kmco-teaser-mix'
//            ],
//            [
//                'artist_id'     => 1,
//                'code'          => 'https%3A%2F%2Fwww.mixcloud.com%2Fkitkut%2Fkitkut-beyond-mix-tape-part-iii'
//            ],
        // Jenny Sharp
            [
                'artist_id'     => 3,
                'code'          => 'https://soundcloud.com/itspaperplanes/jenny-sharp-paper-planes-mix'
            ]
        ]);
    }
}
