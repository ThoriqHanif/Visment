<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'AKL', 'class_type_id' => $ct[1]],
            ['name' => 'RPL', 'class_type_id' => $ct[1]],
            ['name' => 'PPLG', 'class_type_id' => $ct[1]],
            ['name' => 'DKV', 'class_type_id' => $ct[1]],
            ['name' => 'TKJ', 'class_type_id' => $ct[1]],
            ];

        DB::table('my_classes')->insert($data);

    }
}
