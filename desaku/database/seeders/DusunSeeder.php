<?php

namespace Database\Seeders;

use App\Models\Dusun;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DusunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'nama' => 'Dusun I Lumban Dolok',
            ],
            [
                'nama' => 'Dusun II Huta Nagodang',
            ],
            [
                'nama' => 'Dusun III Lumban Baringin',
            ],
            [
                'nama' => 'Dusun IV Nadeak',
            ],
        );

        foreach ($data as $key => $value) {
            Dusun::create($value);
        }
    }
}
