<?php

use App\Models\EducationLevel;
use Illuminate\Database\Seeder;


class EducationLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->educationLevels() as $educationLevel) {
            EducationLevel::create($educationLevel);
        }
    }

    private function educationLevels()
    {
        return [
            [
                'name' => 'higher',
                'scoring' => 15,
            ],
            [
                'name' => 'specialized secondary',
                'scoring' => 10,
            ],
            [
                'name' => 'secondary',
                'scoring' => 5,
            ]
        ];
    }
}
