<?php

namespace Database\Seeders;

use App\Models\Qubit2;
use App\Models\Qubit3;
use App\Models\Qubit4;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QubitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        try {
            Qubit2::create([
                'data' => 1
            ]);

            for ($i = 0; $i < 2 ** 2 - 1; $i++) {
                Qubit2::create([
                    'data' => 2
                ]);
            }

            Qubit3::create([
                'data1' => 1,
                'data2' => 1,
                'data3' => 1,
                'data4' => 1
            ]);

            Qubit3::create([
                'data1' => 2,
                'data2' => 1,
                'data3' => 1,
                'data4' => 1
            ]);

            Qubit3::create([
                'data1' => 2,
                'data2' => 2,
                'data3' => 1,
                'data4' => 1
            ]);

            Qubit3::create([
                'data1' => 2,
                'data2' => 2,
                'data3' => 2,
                'data4' => 1
            ]);

            for ($i = 0; $i < 2 ** 3 - 4; $i++) {
                Qubit3::create([
                    'data1' => 2,
                    'data2' => 2,
                    'data3' => 2,
                    'data4' => 2
                ]);
            }

            Qubit4::create([
                'data1' => 1,
                'data2' => 1,
                'data3' => 1,
                'data4' => 1
            ]);

            Qubit4::create([
                'data1' => 2,
                'data2' => 1,
                'data3' => 1,
                'data4' => 1
            ]);

            Qubit4::create([
                'data1' => 2,
                'data2' => 2,
                'data3' => 1,
                'data4' => 1
            ]);

            Qubit4::create([
                'data1' => 2,
                'data2' => 2,
                'data3' => 2,
                'data4' => 1
            ]);

            for ($i = 0; $i < 2 ** 4 - 4; $i++) {
                Qubit4::create([
                    'data1' => 2,
                    'data2' => 2,
                    'data3' => 2,
                    'data4' => 2
                ]);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack($e);
        }
    }
}
