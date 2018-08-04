<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        
        DB::table('orders')->truncate();
        
        DB::table('orders')->insert([
            'user_id' => '2',
            'payment_method_id' => 1,
            'amount' => 120000,
            'phone' => '0968739166',
            'name' => 'Le Thi Ngan',
            'zipcode' => '100000',
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '2',
            'payment_method_id' => 2,
            'amount' => 100000,
            'phone' => '01656106140',
            'name' => 'Tuan Linh',
            'zipcode' => '100000',
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '3',
            'payment_method_id' => 3,
            'amount' => 50000,
            'phone' => '0903218230',
            'name' => 'Tuan Dung',
            'zipcode' => '65000',
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
