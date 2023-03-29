<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Banyuwangi',
            'nomor_tlp' => '082217260584',
            'ttl' => '2002=09=25',
            'foto' => 'picture.png'
        ]);
    }
}
?>

