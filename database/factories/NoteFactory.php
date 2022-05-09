<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Note;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NoteFactory extends Factory
{
    protected $model = Note::class;

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

  
    public function definition()
    {
        return [
            'title' => Str::random(10),
            'name' => $this->random_array(),
            'content' => Str::random(10),
            'due_date' => Carbon::now(),
            'is_done' => 'no'
        ];
    }
}
