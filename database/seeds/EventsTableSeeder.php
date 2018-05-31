<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('events')->insert([
    		['id' => 1, 
            'title' => 'Homeberewed Pitch Fest', 
            'description' => 'The Homeberewed Pitch Fest is the call for ideas for the Incubation Program of HIFI, it is open to the Benildean Community. The guidelines are simple, the idea should be Inclusive and Innovative.', 
                'date' => 'July 30, 2018', 
                'venue' => 'SDA The Loop 12th Floor',
                ],

    		['id' => 2, 
            'title' => 'Thinkathon 4', 
            'description' => 'Now on it’s fourth season, the Thinkathon will focus on creating solutions to one of the most pressing needs in the world today -- FOOD SECURITY.  Together with the School of Hospitality, Restaurant and Institutional Management (SHRIM) and the School of Design & Arts (SDA) Industrial Design and Architecture Programs, Thinkathon IV will wrestle the problems of hunger, access, nutrition, obesity, waste, and resource management set in the urban jungle of Malate, Manila.', 
                'date' => 'July 20-21, 2018', 
                'venue' => 'Halles de Reims, AKIC',
                ],
    	]);
    }
}
