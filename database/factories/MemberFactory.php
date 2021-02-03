<?php

namespace Database\Factories;

use App\Models\Member;
use Brick\Math\BigNumber;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use IntlChar;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name,
            'cpf'               => Str::random(11),
            'rg'                => Str::random(9),
            'birthday'          => now(),
            'baptism'           => now(),
            'address_id'        => 1,
            'congregation_id'   => 1,
        ];
    }
}
