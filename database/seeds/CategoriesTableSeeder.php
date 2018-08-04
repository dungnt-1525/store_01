<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        
        DB::table('categories')->truncate();
        
        DB::table('categories')->insert([
            'name' => 'Đồng hồ nam',
            'slug' => 'dong-ho-nam',
            'parent_id' => null,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Đồng hồ nữ',
            'slug' => 'dong-ho-nu',
            'parent_id' => null,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Đồng hồ thời trang',
            'slug' => 'dong-ho-thoi-trang',
            'parent_id' => null,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Đồng hồ cơ',
            'slug' => 'dong-ho-co',
            'parent_id' => null,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Đồng hồ casio',
            'slug' => 'dong-ho-casio',
            'parent_id' => null,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Đồng hồ Gshock',
            'slug' => 'dong-ho-gshock',
            'parent_id' => null,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Luxury',
            'slug' => 'luxury',
            'parent_id' => null,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Ogival',
            'slug' => 'ogival',
            'parent_id' => null,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Orient',
            'slug' => 'orient',
            'parent_id' => null,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Festina',
            'slug' => 'festina',
            'parent_id' => 1,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Bentley',
            'slug' => 'benley',
            'parent_id' => 1,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Olym Pianus',
            'slug' => 'olym-pianus',
            'parent_id' => 1,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Louis Erard',
            'slug' => 'louis-erard',
            'parent_id' => 1,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Jaguar',
            'slug' => 'jaguar',
            'parent_id' => 1,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Đồng hồ đôi',
            'slug' => 'dong-ho-doi',
            'parent_id' => 2,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Citizen',
            'slug' => 'citizen',
            'parent_id' => 2,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Seiko',
            'slug' => 'seiko',
            'parent_id' => 2,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Daniel Wellington',
            'slug' => 'daniel-wellington',
            'parent_id' => 2,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Tissot',
            'slug' => 'tissot',
            'parent_id' => 2,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
