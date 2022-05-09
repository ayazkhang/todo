<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TodoSeeder extends Seeder
{

    private function random_array(){

        $array = array(

            array("xyz","abc","tyz"),
            array("tch","fff","tuv"),
            array("fcg","cge","cge"),
            array("fuc","vhe","cwr"),
            array("xyz"),
            array("tyz"),
            array("abc"),
            array("zvr","ter","vde"),
            array("cfe","dvdf","eref")
        
        );

        shuffle($array);
        return $decoded_array = json_encode($array[0]);
    
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('notes')->insert([
            'title' => Str::random(10),
            'name' => $this->random_array(),
            'content' => Str::random(10),
            'due_date' => Carbon::now(),
            'is_done' => 'no'
            
        ]);
    }
}
