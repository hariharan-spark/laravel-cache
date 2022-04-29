<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            ['title' => 'First blog',
            'sub_header' => 'This is the first sub header',
            'content' => 'BLOG_CONTENT'],
            ['title' => 'Second blog',
            'sub_header' => 'This is the second sub header',    
            'content' => 'BLOG_CONTENT'],
            ['title' => 'Third blog',
            'sub_header' => 'This is the third sub header',
            'content' => 'BLOG_CONTENT'],
            ['title' => 'Fourth blog',
            'sub_header' => 'This is the fourth sub header',
            'content' => 'BLOG_CONTENT'],
            ['title' => 'Fifth blog',   
            'sub_header' => 'This is the fifth sub header', 
            'content' => 'BLOG_CONTENT'],
        ]);
    }
}
