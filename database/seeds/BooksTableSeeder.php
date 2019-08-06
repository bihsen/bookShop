<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 11 ; $i++) {

            DB::table('books')->insert([
                'title'=> 'My Title ' . $i,
                'author' => 'Author ' . $i,

            ]);
        }
    }
}
