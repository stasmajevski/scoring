<?php

use App\Models\PhoneOperatorCode;
use App\Models\PhoneOperator;
use Illuminate\Database\Seeder;


class PhoneOperatorCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->phoneOperatorCodes() as $phoneOperatorCode) {
            PhoneOperatorCode::create($phoneOperatorCode);
        }
    }

    private function phoneOperatorCodes()
    {
        $megafon = PhoneOperator::firstWhere('name', 'megafon')->id;
        $beeline = PhoneOperator::firstWhere('name', 'beeline')->id;
        $mts = PhoneOperator::firstWhere('name', 'mts')->id;

        return [
            [
                'phone_operator_id' => $megafon,
                'code' => 901,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 902,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 904,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 908,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 910,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 911,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 912,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 913,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 914,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 915,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 916,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 917,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 918,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 919,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 978,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 981,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 982,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 984,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 985,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 987,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 988,
            ],
            [
                'phone_operator_id' => $megafon,
                'code' => 989,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 920,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 921,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 922,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 923,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 924,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 925,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 926,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 927,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 928,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 929,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 930,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 931,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 932,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 933,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 934,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 936,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 937,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 938,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 939,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 950,
            ],
            [
                'phone_operator_id' => $beeline,
                'code' => 999,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 900,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 903,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 951,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 953,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 960,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 961,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 962,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 963,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 964,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 965,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 966,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 967,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 968,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 969,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 980,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 983,
            ],
            [
                'phone_operator_id' => $mts,
                'code' => 986,
            ],
        ];
    }

}
