<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 17.11.2016
 * Time: 23:39
 */

namespace ArtistTableSeeder;

use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{

    public function run() {

//        DB::table('artists')->delete();

        DB::table('artists')->insert(array(
//            array(
//                'id'   => 1,
//                'name' => 'kitkut',
//                'description' => 'fdrgrtghrth',
//                'facebookLink' => 'https://www.facebook.com/kitkutsbassroom/',
//                'mixcloudLink' => 'https://www.mixcloud.com/kitkut/'
//            ),
            array(
                'id'   => 2,
                'name' => 'kitkut2',
                'description' => 'fdrgrtghrt3rwrfweh',
                'facebookLink' => 'https://www.facebook.com/kitkutsbassroom2/',
                'mixcloudLink' => 'https://www.mixcloud.com/kitkut2/'
            )
        ));

        $this->command->info("Users table seeded :)");
    }
}