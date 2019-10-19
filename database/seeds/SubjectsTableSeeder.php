<?php

use Illuminate\Database\Seeder;
use App\Models\Subjects;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            1 => "Toán",
            2 => "Ngữ Văn",
            3 => "Tiếng Anh",
            4 => "Vật Lý",
            5 => "Sinh Học",
            6 => "Hóa Học",
            7 => "Lịch Sử",
            8 => "Địa Lý",
        ];
        
        foreach ($datas as $data) {
            \App\Models\Subjects::create([
                'name' => $data,
            ]);
        }
    }
}
