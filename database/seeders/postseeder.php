<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post')->insert([
            'title' => 'Post Sample',
            'description' => 'Sample Description',
            'photo' => 'test',
            'user_id' => 1,
            'created_at' => Carbon::now()
        ]);

    }
}
