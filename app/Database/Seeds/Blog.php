<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Blog extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');
        for ($i=0; $i < 10; $i++) {
            $data = [
                'blog_title' => $faker->Name,
                'blog_description' => $faker->email,
            ];
            $this->db->table('blogs')->insert($data);
        }
    }
}
