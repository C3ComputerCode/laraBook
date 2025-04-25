<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => $this->faker->sentence,
            'name' =>$this->faker->name,
            'description' =>$this->faker->sentence,
            'author' =>$this->faker->name,
            'total_copies' =>rand(1,5),
            'available_copies'=>0,            
            'book_category_id'=>rand(1,5),
            'publication_date'=>$this->faker->date('Y_m_d'),            
            
        ];
    }
}
