<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    private $array;
    private $shuffled_array;

    private function random_array(){

         $this->array = array(

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

        $this->shuffled_array = shuffle($this->array[0]);

        return json_encode($this->shuffled_array);
    
    }

    public function definition(){
        
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
