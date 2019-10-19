<?php

use Illuminate\Database\Seeder;
use App\Models\Subjects;
use App\Models\Teacher;
use App\Models\TeacherSubjects;

class TeacherSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = Subjects::get('id')->toArray();
        $teacher = Teacher::get('id')->toArray();
        foreach ($teacher as $data) {
            TeacherSubjects::create([
                'teacher_id' => array_random($subjects)['id'],
                'subject_id' => array_random($teacher)['id'],
            ]);
        }
    }
}
