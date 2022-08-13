<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //bcrypt precisa criptografar para conseguir autenciar dps
        User::create([
            'nome' => 'Victor',
            'email' => 'victor@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
