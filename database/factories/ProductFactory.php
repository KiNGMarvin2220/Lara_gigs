<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define possible values for tags and logos
        $tags = ['new', 'variant', 'classic', 'modern', 'group'];

        // Randomly select a number of tags between 1 and 3
        $numberOfTags = $this->faker->numberBetween(1, 3);

        // Shuffle the tags array and select the first $numberOfTags elements
        $selectedTags = $this->faker->randomElements($tags, $numberOfTags);

        return [
            'name' => $this->faker->name(),
            'image_in' => 'logos/no-image.png',
            'image_out' => 'logos/no-image.png',
            'tags' => implode(', ', $selectedTags),
            'type' => implode(', ', $selectedTags),
            'price' => $this->faker->numberBetween(900, 10000),
            'count' => $this->faker->numberBetween(1, 100),
            'star' => $this->faker->randomElement([1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5]),
            'description' => $this->faker->paragraph(2),
        ];
    }
}
