<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name = 'Hồ Lữ';
        $admin->username = 'admin@gmail.com';
        $admin->password = 'admin123';
        $admin->save();
    }
}
