<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$student = new Student;

        //mgmg
        $student->name='Mg Mg';
        $student->email='mgmg@gmail.com';
        $student->address='Bahan';
        $student->save();

        //susu
        $student1 = new Student;

        $student1->name='Su Su';
        $student1->email='susu@gmail.com';
        $student1->address='Hlaing';
        $student1->save();*/
        factory(App\Student::class,10)->create();
    }
}
