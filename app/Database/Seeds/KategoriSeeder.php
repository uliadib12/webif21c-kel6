<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $model = new \App\Models\CategoryModel();

        // add data to table using faker
        $faker = \Faker\Factory::create();

        // create 10 data
        for ($i = 0; $i < 50; $i++) {
            $data = [
                'kategori' => $faker->word(), 
                'pendaftaran' => $faker->date(),
                'jamAwalPendaftaran' => $faker->time($format = 'H:i'),
                'jamAkhirPendaftaran' => $faker->time($format = 'H:i'), 
                'penyisihan' => $faker->date(),
                'jamAwalPenyisihan' => $faker->time($format = 'H:i'),
                'jamAkhirPenyisihan' => $faker->time($format = 'H:i'), 
                'pengumuman' => $faker->date(), 
                'final' => $faker->date(),
            ];

            $model->insert($data);
        }
    }
}
