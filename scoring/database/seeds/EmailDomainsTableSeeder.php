<?php

use App\Models\EmailDomain;
use Illuminate\Database\Seeder;


class EmailDomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->emailDomains() as $emailDomain) {
            EmailDomain::create($emailDomain);
        }
    }

    private function emailDomains()
    {
        return [
            [
                'name' => 'gmail.com',
                'scoring' => 10,
            ],
            [
                'name' => 'yandex.ru',
                'scoring' => 8,
            ],
            [
                'name' => 'mail.ru',
                'scoring' => 6,
            ],
            [
                'name' => 'other',
                'scoring' => 3,
            ],
        ];
    }

}
