<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $data[0] = [
            'name' => 'Drama',
        ];
        $data[1] = [
            'name' => 'Kids',
        ];
        $data[2] = [
            'name' => 'TV Show',
        ];
        
        DB::table('genres')->insert($data);
    }
}
