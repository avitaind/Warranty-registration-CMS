<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Country;
use App\Models\State;

class CountrySateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        /*------------------------------------------

        --------------------------------------------

        India Country Data

        --------------------------------------------

        --------------------------------------------*/

        $country = Country::create(['name' => 'India']);
        $state = State::create(['country_id' => $country->id, 'name' => 'Gujarat']);
        City::create(['state_id' => $state->id, 'name' => 'Rajkot']);
        City::create(['state_id' => $state->id, 'name' => 'Surat']);
        $state = State::create(['country_id' => $country->id, 'name' => 'Himachal Pradesh']);
        City::create(['state_id' => $state->id, 'name' => 'Shimla']);
        City::create(['state_id' => $state->id, 'name' => 'Dharamsala']);
        $state = State::create(['country_id' => $country->id, 'name' => 'U.P']);
        City::create(['state_id' => $state->id, 'name' => 'Bulandshahr']);
        City::create(['state_id' => $state->id, 'name' => 'Agra']);
    }
}
