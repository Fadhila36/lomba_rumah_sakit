<?php

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
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'nama' => 'Admin',
            'status' => 'admin',
            'email' => 'admin@admin.com',
            'alamat' => 'Karawang',
            'jenis_kelamin' => 'Laki-laki',
            'nik' => '16523177'
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            'password' => bcrypt('user'),
            'nama' => 'User',
            'status' => 'user',
            'email' => 'user@user.com',
            'alamat' => 'Karawang',
            'jenis_kelamin' => 'Laki-laki',
            'nik' => '16523177'
        ]);

        DB::table('users')->insert([
            'username' => 'fadhila',
            'password' => bcrypt('fadhila'),
            'nama' => 'Muhammad Fadhila Abiyyu Faris',
            'status' => 'user',
            'email' => 'yuffa36@gmail.com',
            'alamat' => 'karawang',
            'jenis_kelamin' => 'Laki-laki',
            'nik' => '16523177'
        ]);
    }
}
