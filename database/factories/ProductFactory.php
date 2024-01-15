<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        # for persian name 
        #$persianFaker = \Faker\Factory::create('fa_IR') ; 
        $random = rand(1,27) ;
        return [
            'image_url' => $this->faker->numerify("pro_$random.jpg") ,
            'name' => $this->faker->name() ,
            'price' => $this->faker->numerify('###') ,
            'slug' => $this->faker->slug() ,
            'number_of_price' => 1 ,
            'category_id' => 1

            # For persian record
            // 'image-url' => $persianFaker->imageUrl() ,
            // 'name' => $persianFaker->name() ,
            // 'price' => $persianFaker->numerify('###') ,
            // 'slug' => $persianFaker->slug() ,
            // 'number-of-price' => 1 ,
            // 'category-id' => 1  
        ];
    }
}
