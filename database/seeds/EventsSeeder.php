<?php

use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(0, 200) as $a){
            \App\Models\Entities\Event::create([
                'title' => $faker->sentence(10),
                'content' => $faker->text(400),
                'location' => $faker->city(),
                'pdf' => null,
                'image' => $faker->imageUrl(),
                'is_active' => 1,
            ]);
        }
    }
}
