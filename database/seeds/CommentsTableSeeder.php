<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
            [
                'description'=>'There are many variations of passages of Lorem Ipsum available,',
                'post_id'=>1
            ],
            [
                'description'=>'but the majority have suffered alteration in some form, ',
                'post_id'=>1
            ],
            [
                'description'=>'combined with a handful of model sentence structures, to generate Lorem ',
                'post_id'=>2
            ],
            [
                'description'=>'to generate Lorem Ipsum which looks reasonable.',
                'post_id'=>3
            ]
        ]);
    }
}
