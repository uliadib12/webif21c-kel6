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
                'jamAwalPendaftaran' => $faker->time(),
                'jamAkhirPendaftaran' => $faker->time(), 
                'penyisihan' => $faker->date(),
                'jamAwalPenyisihan' => $faker->time(),
                'jamAkhirPenyisihan' => $faker->time(), 
                'pengumuman' => $faker->date(), 
                'final' => $faker->date(),
            ];

            $model->insert($data);
        }
    }
}
