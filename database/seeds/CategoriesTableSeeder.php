<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [ 'user_id'=>'1',
                'name'=>'Laravel',
                'slug'=>'laravel',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [ 'user_id'=>'1',
            'name'=>'Wordpress',
            'slug'=>'wordpress',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],

            [ 'user_id'=>'1',
            'name'=>'Python',
            'slug'=>'python',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],

            [ 'user_id'=>'1',
            'name'=>'Javascript',
            'slug'=>'javascript',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],

            [ 'user_id'=>'1',
            'name'=>'Ajax',
            'slug'=>'ajax',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
        ]);
    }
}
