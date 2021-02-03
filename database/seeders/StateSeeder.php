<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert(array (
            0 =>
            array (
                'initials' => 'AC',
            ),
            1 =>
            array (
                'initials' => 'AL',
            ),
            2 =>
            array (
                'initials' => 'AM',
            ),
            3 =>
            array (
                'initials' => 'AP',
            ),
            4 =>
            array (
                'initials' => 'BA',
            ),
            5 =>
            array (
                'initials' => 'CE',
            ),
            6 =>
            array (
                'initials' => 'DF',
            ),
            7 =>
            array (
                'initials' => 'ES',
            ),
            8 =>
            array (
                'initials' => 'GO',
            ),
            9 =>
            array (
                'initials' => 'MA',
            ),
            10 =>
            array (
                'initials' => 'MG',
            ),
            11 =>
            array (
                'initials' => 'MS',
            ),
            12 =>
            array (
                'initials' => 'MT',
            ),
            13 =>
            array (
                'initials' => 'PA',
            ),
            14 =>
            array (
                'initials' => 'PB',
            ),
            15 =>
            array (
                'initials' => 'PE',
            ),
            16 =>
            array (
                'initials' => 'PI',
            ),
            17 =>
            array (
                'initials' => 'PR',
            ),
            18 =>
            array (
                'initials' => 'RJ',
            ),
            19 =>
            array (
                'initials' => 'RN',
            ),
            20 =>
            array (
                'initials' => 'RO',
            ),
            21 =>
            array (
                'initials' => 'RR',
            ),
            22 =>
            array (
                'initials' => 'RS',
            ),
            23 =>
            array (
                'initials' => 'SC',
            ),
            24 =>
            array (
                'initials' => 'SE',
            ),
            25 =>
            array (
                'initials' => 'SP',
            ),
            26 =>
            array (
                'initials' => 'TO',
            ),
        ));
    }
}
