<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Illuminate\Database\Eloquent\Model>
 */
class IconsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'icon_name' => fake()->randomElement([
                '<i class=" fas fa-file-contract text-darkBlue"></i>',
                '<i class=" fas fa-circle text-green-500"></i>',
                '<i class=" fas fa-fire text-blue-600"></i>',
                '<i class=" fas fa-folder text-yellow-500"></i>',
                '<i class=" fas fa-file-contract text-darkBlue"></i>',
                '<i class=" fas fa-circle text-green-500"></i>',
                '<i class=" fas fa-fire text-blue-600"></i>',
                '<i class=" fas fa-folder text-yellow-500"></i>',
                '<i class=" fas fa-file-contract text-darkBlue"></i>'
            ])
        ];
    }
}
