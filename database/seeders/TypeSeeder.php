<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'MEWAH1',
            'description' => 'Mobil mewah sering kali menawarkan kombinasi sempurna antara desain yang elegan dan teknologi canggih yang memukau.' ]);

            Type::create([
                'name' => 'MEWAH2',
                'description' => 'Keindahan mobil mewah sering terpancar dari detail-detail halus, mulai dari bahan interior yang mewah hingga desain eksterior yang menggoda'   
                ]);

                Type::create([
                    'name' => 'MEWAH3',
                    'description' => 'Kinerja mesin yang kuat dan fitur-fitur terkini menjadikan mobil mewah pilihan yang sangat diinginkan bagi para pecinta otomotif.'                
                    ]);

                Type::create([
                    'name' => 'MEWAH4',
                    'description' => 'Dengan kenyamanan yang luar biasa dan kemewahan yang tak tertandingi, mobil mewah bukan hanya sebuah kendaraan, tapi juga simbol dari status dan prestise.


'   
                    ]);


                      
                            
                                 
    }
}
