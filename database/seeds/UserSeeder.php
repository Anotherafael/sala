<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\People;

class UserSeeder extends Seeder
{

    public function run()
    {
        $people = People::create([
            'name' => 'Admin',
            'phone' => '(00) 00000-0000',
            'enrollment' => '2000010100000000'
        ]);

        $user = User::create([
            'email' => 'admin@admin.com.br',
            'cpf' => '000.000.000-00',
            'password' => bcrypt('111'),
            'people_id' => $people->id,
        ]);

        $user->assignRole('admin');
    }
}
