<?php

use App\Models\PhoneOperator;
use Illuminate\Database\Seeder;


class PhoneOperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->phoneOperators() as $phoneOperator) {
            PhoneOperator::create($phoneOperator);
        }
    }

    private function phoneOperators()
    {
        return [
            [
                'name' => 'megafon',
                'scoring' => 10,
            ],
            [
                'name' => 'beeline',
                'scoring' => 5,
            ],
            [
                'name' => 'mts',
                'scoring' => 3,
            ]
        ];
    }
}
