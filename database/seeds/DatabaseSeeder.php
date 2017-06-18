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
        DB::table('artist_event')->delete();

        $this->call('ArtistTableSeeder');
        $this->call('EventsSeeder');
        $this->call('MixCloudTracksSeeder');
        $this->call('ArtistEventTableSeeder');
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
                'name'          => 'BASS EN MASS',
                'date'          => Carbon::parse('16.04.2017'),
                'location'      => 'Insel der Jugend',
                'city'          => 'Magdeburg',
                'country'       => 'Germany',
                'facebooklink'  => 'https://www.facebook.com/events/276000336187964/',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Paper Planes',
                'date'          => Carbon::parse('29.04.2017'),
                'location'      => 'Weltecho',
                'city'          => 'Chemnitz',
                'country'       => 'Germany',
                'facebooklink'  => 'https://www.facebook.com/events/1835004783488339/permalink/1860032137652270/',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'All4Hiphop Jam',
                'date'          => Carbon::parse('03.06.2017'),
                'location'      => 'Conne Island',
                'city'          => 'Leipzig',
                'country'       => 'Germany',
                'facebooklink'  => 'https://www.facebook.com/events/240294323041422/',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Santas fünftes Fest - Täubchenthal x Elipamanoke - #5/7',
                'date'          => Carbon::parse('24.05.2017'),
                'location'      => 'Täubchenthal',
                'city'          => 'Leipzig',
                'country'       => 'Germany',
                'facebooklink'  => 'https://www.facebook.com/events/217515852054483/',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}


class MixCloudTracksSeeder extends Seeder {
    public function run() {
        DB::table('mixcloudtracks')->insert([
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


class ArtistEventTableSeeder extends Seeder {
    public function run() {
        $artistsFromConfig = config('goodHoodMusicConfig.artists');

        DB::table('artist_event')->insert([
            [
                'event_id' => 1,
                'artist_id' => $artistsFromConfig['kitkut']
            ],
            [
                'event_id' => 2,
                'artist_id' => $artistsFromConfig['jenny-sharp']
            ],
            [
                'event_id' => 3,
                'artist_id' => $artistsFromConfig['passerie']
            ],
            [
                'event_id' => 3,
                'artist_id' => $artistsFromConfig['jenny-sharp']
            ],
            [
                'event_id' => 4,
                'artist_id' => $artistsFromConfig['kitkut']
            ],

        ]);
    }
}