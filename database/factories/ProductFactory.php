<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory ;

use Faker\Generator as Faker;
use App\Models\Product;

$factory->define(Product::class, function (Faker $faker){
    return [
        'name' => $faker->word,
        'description' => $faker->sentence(10),
        'long_description' => $faker->text,
        'price' => $faker->randomFloat(2,5,150)
    ];
});

//class ProductFactory extends Factory
//{
//    /**
//     * The name of the factory's corresponding model.
//     *
//     * @var string
//     */
//    protected $model = Product::class;
//
//    /**
//     * Define the model's default state.
//     *
//     * @return array
//     */
//    public function definition()
//    {
//        return [
//            'name'=>substr($this->faker->sentence(3),0, -1),
//            'description'=>$this->faker->sentence( 10),
//            'long_description'=>$this->faker->text,
//            'price'=>$this->faker->randomFloat(2,5,150),
//            'category_id' => Category::factory()
//        ];
//    }
//}
