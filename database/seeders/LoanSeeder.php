<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
   
    public function run()
    {
        Loan::create([
                'id'=>1,
                'car_id' => 1,
                'user' => 'Bang Irul',
                'loan_date' => '2024:09:09',
                'return_date' => '2024:09:07',
                'total_cost' => 100000,
                'status' => 'approved',
        ]);

        Loan::create([
            'id'=>2,
            'car_id' => 2,
            'user' => 'Bang Fajri',
            'loan_date' => '2024:06:01',
            'return_date' => '2022:06:12',
            'total_cost' => 200000,
            'status' => 'pending',
    ]);

    Loan::create([
        'id'=>3,
        'car_id' => 3,
        'user' => 'Fayyad',
        'loan_date' => '2024:02:11',
        'return_date' => '2024:02:12',
        'total_cost' => 60000,
        'status' => 'rejected',
]);

Loan::create([
    'id'=>4,
    'car_id' => 4,
    'user' => 'Budi',
    'loan_date' => '2024:03:01',
    'return_date' => '2024:03:07',
    'total_cost' => 100000,
    'status' => 'approved',
]);

    }
}
