<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        $data = [
            ['id' => 1, 'name' => 'К выполнению', 'created_at' => $date, 'updated_at' => $date],
            ['id' => 2, 'name' => 'В работе', 'created_at' => $date, 'updated_at' => $date],
            ['id' => 3, 'name' => 'На тестировании', 'created_at' => $date, 'updated_at' => $date],
            ['id' => 4, 'name' => 'Готово', 'created_at' => $date, 'updated_at' => $date],
        ];

        DB::table('statuses')->insert($data);
    }
}
