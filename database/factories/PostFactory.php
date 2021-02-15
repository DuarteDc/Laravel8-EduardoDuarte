<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->sentence,
            'slug'=>$this->faker->slug,
            'description'=>$this->faker->text(800),
            'image'=>$this->faker->imageUrl(1280,720),
            'metatag'=>$this->faker->text(7),
            'autor'=>$this->faker->sentence,
            'date'=>$this->faker->datetime,

            'user_id' =>random_int(1,100),
            'category_id'=>random_int(1,100),

        ];
    }
}
