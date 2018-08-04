<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        
        DB::table('users')->truncate();
        
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => md5('123456'),
            'role_id' => '1',
            'phone' => '0903218230',
            'sex' => 0,
            'birthday' => date('y-m-d'),
            'address' => 'Hoc Vien BCVT - km10 Nguyen Trai',
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'password' => md5('123456'),
            'role_id' => '2',
            'phone' => '01656106140',
            'sex' => 0,
            'birthday' => date('y-m-d'),
            'address' => 'Dai hoc thuy loi',
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'password' => md5('123456'),
            'role_id' => '1',
            'phone' => '0968739166',
            'sex' => 0,
            'birthday' => date('y-m-d'),
            'address' => 'PTIT',
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
