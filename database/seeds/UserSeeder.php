<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Eduardo Ramírez',
            'area' => 'Sistemas',
            'employee_code' => '000000',
            'email' => 'cuentas@eduardoramirez.dev',
            'password' => bcrypt('000000')
        ])->assignRole('admin');

        User::create([
            'name' => 'Álvaro Montoya',
            'area' => 'E-commerce',
            'employee_code' => '315824',
            'email' => 'amontoya@example.com',
            'password' => bcrypt('315824')
        ])->assignRole('employee');
    }
}
