<?php

namespace Database\Seeders;


use App\Models\GolDarah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GolDarahsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gol_darah')->delete();

        $bgs = ['O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];
        foreach($bgs as  $bg){
            GolDarah::create(['name' => $bg]);
        }
    }

}
