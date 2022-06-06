<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama'          => 'Erlan Herlangga',
        //         'alamat'        => 'Kampung warung',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ],
        //     [
        //         'nama'          => 'Haland bakery',
        //         'alamat'        => 'Jln . city',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ],
        //     [
        //         'nama'          => 'Mbappuk',
        //         'alamat'        => 'p$g',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ]
        // ];
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 97; $i++) {
            $data = [
                'nama'          => $faker->name(),
                'alamat'        => $faker->text(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];
            $this->db->table('orang')->insert($data); //untuk insert 1 data
        }

        // Simple Queries
        //  $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        //untuk insert banyak data
        // $this->db->table('orang')->insertBatch($data);
    }
}
