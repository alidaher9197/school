<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "first_name"=>fake()->firstName(),
            "last_name"=>fake()->lastName(),
            "father_name"=>fake()->firstNameMale(),
            "mother_name"=>fake()->firstNameFemale(),
            "mother_last_name"=>fake()->lastName(), 
            "phone" => fake()->unique()->numerify(
                            fake()->randomElement([
                                "03######",
                                "70######",
                                "71######",
                                "76######",
                                "78######"
                            ])
                        ),
            "address"=>fake()->address(),
            "birthdate"=>fake()->date("y-m-d","2000-1-1"),
            "password"=>bcrypt("password123"),
            "email"=>fake()->unique()->safeEmail(),
            "gender_id"=>fake()->numberBetween(1,2),
            "nationality_id"=>fake()->numberBetween(1,1)

        ];
    }
}
