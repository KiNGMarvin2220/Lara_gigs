<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define possible values for tags and logos
        $tags = ['laravel', 'vue', 'backend'];

        // Randomly select a number of tags between 1 and 3
        $numberOfTags = $this->faker->numberBetween(1, 3);
        
        // Shuffle the tags array and select the first $numberOfTags elements
        $selectedTags = $this->faker->randomElements($tags, $numberOfTags);

        return [
            'title' =>  $this->faker->sentence(),
            'logo' => 'logos/no-image.png',
            'tags' => implode(', ', $selectedTags),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'loacation' => $this->faker->city(),
            'description' => $this->faker->paragraph(2),
        ];
    }
}