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
        DB::table('events')->insert(
           [
                [
                    'name' => 'php event 1',
                    'description' => 'Make php great again',
                    'location' => 'Paris',
                    'price' => 0.00,
                    'start' => new DateTime('+5 days')
                ],
                [
                    'name' => 'php event 2',
                    'description' => 'Laravel conference',
                    'location' => 'Paris',
                    'price' => 24.14,
                    'start_at' => '2019-04-17 10:20:00'
                ]
           ]
    );
    }
}
