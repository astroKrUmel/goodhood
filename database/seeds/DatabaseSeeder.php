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
//        DB::table('pictures')->delete();
//        DB::table('artists_pictures')->delete();
        DB::table('mixcloudtracks')->delete();
        DB::table('events')->delete();
        DB::table('artists')->delete();

        $this->call('ArtistTableSeeder');
        $this->call('EventsSeeder');
        $this->call('MixCloudTracksSeeder');
//        $this->call('PicturesTableSeeder');
//        $this->call('ArtistsPicturesTableSeeder');
    }
}


class ArtistTableSeeder extends Seeder {
    public function run() {

        DB::table('artists')->insert(array(
            array(
                'id'   => 1,
                'name' => 'Gucci Ming',
                'urlName' => 'gucci-ming',
                'biography' => '',
                'facebookLink' => 'https://www.facebook.com/Mingi187',
                'mixcloudLink' => '',
                'link' => ''
            ),
            array(
                'id'   => 2,
                'name' => 'Phax',
                'urlName' => 'phax',
                'biography' => '',
                'facebookLink' => 'https://www.facebook.com/phaxinstrumentals/',
                'mixcloudLink' => 'https://www.mixcloud.com/phax/',
                'link' => 'https://soundcloud.com/phax'
            ),
            array(
                'id'   => 3,
                'name' => 'Jenny Sharp',
                'urlName' => 'jenny-sharp',
                'biography' => '',
                'facebookLink' => 'https://www.facebook.com/sharpradi0',
                'mixcloudLink' => 'https://www.mixcloud.com/SharpRadio/',
                'link' => 'https://soundcloud.com/sharpradio'
            ),
            array(
                'id'   => 4,
                'name' => 'KitKut',
                'urlName' => 'kitkut',
                'biography' => '',
                'facebookLink' => 'https://www.facebook.com/kitkutsbassroom/',
                'mixcloudLink' => 'https://www.mixcloud.com/kitkut/',
                'link' => 'http://www.beyond07.com/'
            ),
            array(
                'id'   => 5,
                'name' => 'Alex The Kit',
                'urlName' => 'alex-the-kit',
                'biography' => '',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => ''
            ),
            array(
                'id'   => 6,
                'name' => 'DJ Buzz',
                'urlName' => 'dj-buzz',
                'biography' => '',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => ''
            ),
            array(
                'id'   => 7,
                'name' => 'Passerie',
                'urlName' => 'passerie',
                'biography' => '',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => 'http://wasrap.de/'
            ),
            array(
                'id'   => 8,
                'name' => 'Goodkat',
                'urlName' => 'goodkat',
                'biography' => '',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => ''
            ),

        ));
    }
}

class EventsSeeder extends Seeder {
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


class MixCloudTracksSeeder extends Seeder {
    public function run() {
        DB::table('mixcloudtracks')->insert([
            // Jenny Sharp
            [
                'artist_id'     => 3,
                'code'          => 'https://soundcloud.com/itspaperplanes/jenny-sharp-paper-planes-mix'
            ]
        ]);
    }
}

class PicturesTableSeeder extends Seeder {
    public function run() {
        DB::table('pictures')->insert([
            [
                'id' => 1,
                'modus' => 'main',
                'picture' => file_get_contents('public/images/artists/gucci-ming.svg')
            ]
        ]);
    }
}

class ArtistsPicturesTableSeeder extends Seeder {
    public function run() {
        DB::table('artists_pictures')->insert([
            [
                'id' => 1,
                'artist_id' => 1,
                'picture_id' => 1
            ]
        ]);
    }
}
