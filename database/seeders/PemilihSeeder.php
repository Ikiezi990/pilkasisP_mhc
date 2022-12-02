<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;
class PemilihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('pemilihs')->insert([
    			'nama' => $faker->name,
    			'nis' => $faker->numberBetween(25,40),
    			'kelas_id' => $faker->numberBetween(25,40),
    		]);
        }
    }
}
