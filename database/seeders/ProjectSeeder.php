<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $newProject = new Project();

            $newProject->title = $faker->sentence(3);
            $newProject->status = $faker->word();
            $newProject->type = $faker->word();
            $newProject->starting_date = $faker->date();
            $newProject->overview = $faker->paragraph();
            $newProject->objectives = $faker->sentence(10);
            $newProject->roadmap = $faker->paragraph();
            $newProject->priority = $faker->word();
            $newProject->contributors = $this->generateContributors($faker, $faker->numberBetween(0, 6));
            $newProject->is_finished = $faker->numberBetween(0, 1);
            if ($newProject->is_finished) {                                             //Se il progetto è finito
                do {
                    $newProject->finish_date = $faker->date();                          //Genera una data di fine progetto
                } while ($newProject->starting_date > $newProject->finish_date);        //Finchè non è maggiore della data di inizio progetto
            }

            $newProject->save();
        }
    }

    // Genera una stringa di contributori
    private function generateContributors(Faker $faker, int $n_persons): string{

        $result = [];

        for($i = 0; $i < $n_persons; $i++){

            $person = "{$faker->firstName()} {$faker->lastName()}";

            array_push($result, $person);

        }

        return Arr::join($result, ', ');
    }
}