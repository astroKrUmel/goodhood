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
        DB::table('artist_event')->delete();
        DB::table('events')->delete();
        DB::table('artists')->delete();

        $this->call('ArtistTableSeeder');
        $this->call('EventsTableSeeder');
        $this->call('ArtistEventTableSeeder');
        $this->call('MixCloudTracksSeeder');
    }
}


class ArtistTableSeeder extends Seeder {
    public function run() {

        DB::table('artists')->insert(array(
            array(
                'id'   => 1,
                'name' => 'Gvcci Ming',
                'urlName' => 'gvcci-ming',
                'biography' => 'Wenn Gvcci Ming an den Decks steht, verbreitet er direkt gute Laune. Seine Sets sind gefüllt mit Soon-to-be-Classics. Nach mehr als zwei Jahren DJing zählt Gucci Ming längst nicht mehr zu den Rookies im Game. Immer wieder hat er im Täubchenthal, im Conne Island in Leipzig und im Weltecho in Chemnitz bewiesen, wie sich Hip Hop und Trap Eins a verbinden lassen. Songs von Curren$y, Freddie Gibbs und A$AP Rocky sind für Gvcci Ming dabei ein Muss. ',
                'facebookLink' => 'https://www.facebook.com/Mingi187',
                'mixcloudLink' => '',
                'link' => '',
                'enabled' => true
            ),
            array(
                'id'   => 2,
                'name' => 'Phax',
                'urlName' => 'phax',
                'biography' => 'Phax ist ein Allroundtalent: Scratch-Experte, Beatmaker, früher auch Tour-DJ für 724 Goodfellas. Seine ausgefeilten Scratches bereichern schon 2009 den deutsch-französischen Sampler „La Connexion“ mit Größen wie Akhenaton, Haftbefehl, Azad und Kool Savas. Er schraubte in der Vergangenheit Beats für Freeman und Tone, die damals auf Juice-CDs releast wurden.
Während seiner langjährigen DJ-Vita unterstützte er amerikanische und deutsche Künstler, darunter Group Home, Defari, Jeru The Damaja, Lords Of The Underground, Kev Brown, DJ Babu, K.I.Z., Plusmacher, Schaufel & Spaten, T9 (Torky Tork & Doz9), Morlockk Dilemma, Hiob und Omik K.
Seine Sets variieren von klassischem Boombap gemixt mit Soul & Funk über aktuellere 2.0 Sounds á la araabMUZIK bis zu hartem Gangstertrap.
',
                'facebookLink' => 'https://www.facebook.com/phaxinstrumentals/',
                'mixcloudLink' => 'https://www.mixcloud.com/phax/',
                'link' => 'https://soundcloud.com/phax',
                'enabled' => true
            ),
            array(
                'id'   => 3,
                'name' => 'Jenny Sharp',
                'urlName' => 'jenny-sharp',
                'biography' => 'Mit ihrem Podcast Sharp Radio hat im Jahr 2014 alles angefangen. Seitdem konnte Jenny Sharp mit Hilfe einer Menge Support innerhalb der urbanen Clublandschaft Leipzigs, in Dresden, Chemnitz, Erfurt, Magdeburg und beim TH!NK? Festival auch live ein sicheres Händchen für erstklassige Selection beweisen. Als ehemaliges B-Girl weiß sie instinktiv, wie sich Tanzbarkeit anfühlt und kann auch selber hinterm DJ-Pult nicht still halten. Dabei bewegen sich ihre vielseitigen Sets ohne Genregrenzen von aktuellem Hip Hop über futuristische Beats zu Bass Musik, Footwork und Grime, aber auch in die elektronischere Richtung hin zu House. ',
                'facebookLink' => 'https://www.facebook.com/sharpradi0',
                'mixcloudLink' => 'https://www.mixcloud.com/SharpRadio/',
                'link' => 'https://soundcloud.com/sharpradio',
                'enabled' => true
            ),
            array(
                'id'   => 4,
                'name' => 'KitKut',
                'urlName' => 'kitkut',
                'biography' => 'Deutschlandweit und international hat sich KITKUT in seiner 12jährigen DJ-Karriere mit ausgelassenen Shows zum Vollblutentertainer entwickelt. So stand er bereits unter anderem mit Kid Fresh, DJ Rafik, Eskei83, den Round Table Knights und den Cyperpunkers auf der Bühne. Außerdem spielte er Support für Deutsch-Rap-Größen, wie KIZ, SXTN, MC Bomber, Prinz Pi und und und...
Der Nachtschwärmer ist nicht nur DJ, sondern auch Partyveranstalter, der vor allem in seinem Element ist, wenn er an den Wheels Of Steel steht. Ursprünglich im Rap der 90er Jahre und UK Grime verwurzelt spezialisiert er sich seit einigen Jahren auch auf Trap. Egal wo, das Publikum liebt ihn, weil er zusammen mit den Leuten ausrastet und selbst aus der letzten Kellersause eine krasse Party macht.
',
                'facebookLink' => 'https://www.facebook.com/kitkutsbassroom/',
                'mixcloudLink' => 'https://www.mixcloud.com/kitkut/',
                'link' => 'http://www.beyond07.com/',
                'enabled' => true
            ),
            array(
                'id'   => 5,
                'name' => 'Alex The Kit',
                'urlName' => 'alex-the-kit',
                'biography' => 'Alex The Kit bringt die Menge in Nullkommanix in Stimmung, was ihm bisher wiederholte Gigs in größeren Locations, wie dem Täubchenthal und Conne Island sicherte. In seiner Auswahl mag er´s düster und rough, deshalb konzentriert er sich auf Drill und bassige Halftime Beats mit New School Rap. Alex The Kit ist ein Geheimtipp mit voller Partygarantie. ',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => '',
                'enabled' => false
            ),
            array(
                'id'   => 6,
                'name' => 'DJ Dørbystarr',
                'urlName' => 'dj-dorbystarr',
                'biography' => 'Es gibt so gut wie nichts, was DJ dørbystarr nicht kann oder noch nicht gemacht hat: DJ-Contest gewinnen, den Skillz Award verleihen, seinen Online-Blog namens Raputation veröffentlichen, Photographie- und DJ-Workshops geben, eine eigene Radiosendung in Erfurt senden, verschiedene Partyreihen (die WORD! CYPHER / EOW LEIPZIG, BROOKLYN ZOOOO und CITIZEN OF HIPHOP) veranstalten.
Auch als Band-DJ von den Obskuriosen und critical.Entertainment hat er sich einen Namen gemacht. Ein Multitalent, das seine Passion schon immer der Hip-Hop-Kultur und seit mehr als 15 Jahren vor allem dem Turntableism widmet. Tunes aus deiner aktuellen Playlist laufen bei dørbys Live-Set garantiert. Boombap, Deutschrap, Ragga, Funk, Ba$$-Music und Electronica werden mit frischen Scratches gepaart in die Crowd geschossen. Dabei schafft er immer den schmalen Grat zwischen dopem Underground, originalen Crates, experimentell-urbanen Tunes und clubigen Alltime-Party-Rockern.
',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => '',
                'enabled' => false
            ),
            array(
                'id'   => 7,
                'name' => 'Passerie',
                'urlName' => 'passerie',
                'biography' => 'Was hat Passeri mit Rap zu tun? Eine ganze Menge! Sie ist nicht nur die Kennerin der Good Hood Klik im Bereich Deutschrap und Future Beats, sondern supportet auch als Konzert-Photographin und Redakteurin des eigenen Onlinemagazins Wasrap.de seit Jahren diesen Hip Hop. Gleichzeitig entwickelte sie einen ausgefeilten, tanzbaren Stil in ihren Setlists, der zwischen pumpenden Neo-Boombap und trappy Sound problemlos wechselt.  Davon haben wir uns persönlich in der Distillery, im Conne Island und in der Alten Damenhandschufabrik überzeugen lassen.  ',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => 'http://wasrap.de/',
                'enabled' => true
            ),
            array(
                'id'   => 8,
                'name' => 'Goodkat',
                'urlName' => 'goodkat',
                'biography' => 'Als Cuki ist er einer der meist unterschätzten Produzenten des deutschen Beat-Untergrunds. Dass er sich für dieses Alias selbst Klavier- und Gitarrespielen beigebracht hat, zeigt wie unfassbar musikalisch er ist. Auch weiß er nach 10 Sekunden die BPM und Tonart eines jeden Tracks. Er remixt und produziert Songs, die einfach Hits sind und auf jeder Party funktionieren. In seinem DJ-Life ist er als Gimmix für das Label Audiolith (Hamburg) erfolgreich durchs Land getourt und hat Clubs wie das ??? beehrt /  hat dabei unter anderem Krink, Rampue und ???  unterstützt.
Als Goodkat spezialisiert er sich auf Bass, Footwork, Juke und Drum´n´Bass.
Während eher als Cuki im instrumentalen Hip Hop zu verorten ist, legt es Electronica, Bass, Future Beats, Footwork und House sind sein Faible/seine Spezialität, die er easy miteinander mixt.
',
                'facebookLink' => '',
                'mixcloudLink' => '',
                'link' => '',
                'enabled' => true
            ),
//            array(
//                'id'   => 9,
//                'name' => 'DJ Buzz',
//                'urlName' => 'dj-buzz',
//                'biography' => '',
//                'facebookLink' => '',
//                'mixcloudLink' => '',
//                'link' => '',
//                'enabled' => true
//            ),

        ));
    }
}

class EventsTableSeeder extends Seeder {
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