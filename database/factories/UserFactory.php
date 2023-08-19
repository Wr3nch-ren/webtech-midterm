<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_title' => fake()->title(),
            'name' => fake()->FirstName(),
            'surname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'date_of_birth' => fake()->date(),
            'student_code' => 'B' . fake()->numberBetween(1000000, 9999999),
            'faculty' => fake()->randomElement(['คณะเกษตร',
                'คณะบริหารธุรกิจ',
                'คณะประมง',
                'คณะมนุษยศาสตร์',
                'คณะวนศาสตร์',
                'คณะวิทยาศาสตร์',
                'คณะวิศวกรรมศาสตร์',
                'คณะศึกษาศาสตร์',
                'คณะเศรษฐศาสตร์',
                'คณะสถาปัตยกรรมศาสตร์',
                'คณะสังคมศาสตร์',
                'คณะสัตวแพทยศาสตร์',
                'คณะอุตสาหกรรมเกษตร',
                'คณะเทคนิคการสัตวแพทย์',
                'คณะสิ่งแวดล้อม',]),
            'department' => fake()->randomElement(['department_test1','department_test2','department_test3']),
            'nickname' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'line_id' => fake()->userName(),
            'facebook' => fake()->userName(),
            'allergy' => fake()->randomElement(['ไม่มี','มี']),
            'role' => fake()->randomElement(['NORMAL','ORGANIZER','STAFF']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
