<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BbuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataL = [
            [0, 2.1, 2.5, 2.9, 3.3, 3.9, 4.4, 5.0],
            [1, 2.9, 3.4, 3.9, 4.5, 5.1, 5.8, 6.6],
            [2, 3.8, 4.3, 4.9, 5.6, 6.3, 7.1, 8.0],
            [3, 4.4, 5.0, 5.7, 6.4, 7.2, 8.0, 9.0],
            [4, 4.9, 5.6, 6.2, 7.0, 7.8, 8.7, 9.7],
            [5, 5.3, 6.0, 6.7, 7.5, 8.4, 9.3, 10.4],
            [6, 5.7, 6.4, 7.1, 7.9, 8.8, 9.8, 10.9],
            [7, 5.9, 6.7, 7.4, 8.3, 9.2, 10.3, 11.4],
            [8, 6.2, 6.9, 7.7, 8.6, 9.6, 10.7, 11.9],
            [9, 6.4, 7.1, 8.0, 8.9, 9.9, 11.0, 12.3],
            [10, 6.6, 7.4, 8.2, 9.2, 10.2, 11.4, 12.7],
            [11, 6.8, 7.6, 8.4, 9.4, 10.5, 11.7, 13.0],
            [12, 6.9, 7.7, 8.6, 9.6, 10.8, 12.0, 13.3],
            [13, 7.1, 7.9, 8.8, 9.9, 11.0, 12.3, 13.7],
            [14, 7.2, 8.1, 9.0, 10.1, 11.3, 12.6, 14.0],
            [15, 7.4, 8.3, 9.2, 10.3, 11.5, 12.8, 14.3],
            [16, 7.5, 8.4, 9.4, 10.5, 11.7, 13.1, 14.6],
            [17, 7.7, 8.6, 9.6, 10.7, 12.0, 13.4, 14.9],
            [18, 7.8, 8.8, 9.8, 10.9, 12.2, 13.7, 15.3],
            [19, 8.0, 8.9, 10.0, 11.1, 12.5, 13.9, 15.6],
            [20, 8.1, 9.1, 10.1, 11.3, 12.7, 14.2, 15.9],
            [21, 8.2, 9.2, 10.3, 11.5, 12.9, 14.5, 16.2],
            [22, 8.4, 9.4, 10.5, 11.8, 13.2, 14.7, 16.5],
            [23, 8.5, 9.5, 10.7, 12.0, 13.4, 15.0, 16.8],
            [24, 8.6, 9.7, 10.8, 12.2, 13.6, 15.3, 17.1],
            [25, 8.8, 9.8, 11.0, 12.4, 13.9, 15.5, 17.5],
            [26, 8.9, 10.0, 11.2, 12.5, 14.1, 15.8, 17.8],
            [27, 9.0, 10.1, 11.3, 12.7, 14.3, 16.1, 18.1],
            [28, 9.1, 10.2, 11.5, 12.9, 14.5, 16.3, 18.4],
            [29, 9.2, 10.4, 11.7, 13.1, 14.8, 16.6, 18.7],
            [30, 9.4, 10.5, 11.8, 13.3, 15.0, 16.9, 19.0],
            [31, 9.5, 10.7, 12.0, 13.5, 15.2, 17.1, 19.3],
            [32, 9.6, 10.8, 12.1, 13.7, 15.4, 17.4, 19.6],
            [33, 9.7, 10.9, 12.3, 13.8, 15.6, 17.6, 19.9],
            [34, 9.8, 11.0, 12.4, 14.0, 15.8, 17.8, 20.2],
            [35, 9.9, 11.2, 12.6, 14.2, 16.0, 18.1, 20.4],
            [36, 10.0, 11.3, 12.7, 14.3, 16.2, 18.3, 20.7],
            [37, 10.1, 11.4, 12.9, 14.5, 16.4, 18.6, 21.0],
            [38, 10.2, 11.5, 13.0, 14.7, 16.6, 18.8, 21.3],
            [39, 10.3, 11.6, 13.1, 14.8, 16.8, 19.0, 21.6],
            [40, 10.4, 11.8, 13.3, 15.0, 17.0, 19.3, 21.9],
            [41, 10.5, 11.9, 13.4, 15.2, 17.2, 19.5, 22.1],
            [42, 10.6, 12.0, 13.6, 15.3, 17.4, 19.7, 22.4],
            [43, 10.7, 12.1, 13.7, 15.5, 17.6, 20.0, 22.7],
            [44, 10.8, 12.2, 13.8, 15.7, 17.8, 20.2, 23.0],
            [45, 10.9, 12.4, 14.0, 15.8, 18.0, 20.5, 23.3],
            [46, 11.0, 12.5, 14.1, 16.0, 18.2, 20.7, 23.6],
            [47, 11.1, 12.6, 14.3, 16.2, 18.4, 20.9, 23.9],
            [48, 11.2, 12.7, 14.4, 16.3, 18.6, 21.2, 24.2],
            [49, 11.3, 12.8, 14.5, 16.5, 18.8, 21.4, 24.5],
            [50, 11.4, 12.9, 14.7, 16.7, 19.0, 21.7, 24.8],
            [51, 11.5, 13.1, 14.8, 16.8, 19.2, 21.9, 25.1],
            [52, 11.6, 13.2, 15.0, 17.0, 19.4, 22.2, 25.4],
            [53, 11.7, 13.3, 15.1, 17.2, 19.6, 22.4, 25.7],
            [54, 11.8, 13.4, 15.2, 17.3, 19.8, 22.7, 26.0],
            [55, 11.9, 13.5, 15.4, 17.5, 20.0, 22.9, 26.3],
            [56, 12.0, 13.6, 15.5, 17.7, 20.2, 23.2, 26.6],
            [57, 12.1, 13.7, 15.6, 17.8, 20.4, 23.4, 26.9],
            [58, 12.2, 13.8, 15.8, 18.0, 20.6, 23.7, 27.2],
            [59, 12.3, 14.0, 15.9, 18.2, 20.8, 23.9, 27.6],
            [60, 12.4, 14.1, 16.0, 18.3, 21.0, 24.2, 27.9],
        ];
        
        $seededDataL = [];
        
        foreach ($dataL as $row) {
            $seededDataL[] = [
                'umur' => $row[0],
                'min_3_sd' => $row[1],
                'min_2_sd' => $row[2],
                'min_1_sd' => $row[3],
                'median' => $row[4],
                'plus_1_sd' => $row[5],
                'plus_2_sd' => $row[6],
                'plus_3_sd' => $row[7],
                'plus_3_sd' => 'L',
                'created_at' => now(),
            ];
        }
        DB::table('bbus')->insert($seededDataL);
    }
}
