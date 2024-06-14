<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('buku')->insert([
                'judul' => $faker->words(3, true),
                'harga' => $faker->randomNumber(6, true),
                'penulis' => $faker->word(3),
                'gambar' => $faker->url()
            ]);
        }
    }
}
