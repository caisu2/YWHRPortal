<?php

use App\Models\Admin\MaritalStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            [
                'status_desc' => 'Married'
            ],
            [
                'status_desc' => 'Widowed'
            ],
            [
                'status_desc' => 'Separated'
            ],
            [
                'status_desc' => 'Divorced'
            ],
            [
                'status_desc' => 'Single'
            ]
        ];

        DB::table('marital_status')->insert($status);
    }
}
