<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10; $i++)
        {
            student::create([
                'name' => fake()->name(),//fakerphp.github.io website e ace aro onkgula
                'email' => fake()->unique()->email()
            ]);
        }
        

    //     $students = collect([
    //         ['name'=>'Monjila','email'=>'monjila@gmail.com'],
    //         ['name'=>'Moni','email'=>'moni@gmail.com'],
    //         ['name'=>'Mon','email'=>'mon@gmail.com']]
    //     );
    //     $students->each(function($student){
    //     student::insert($student);//1st student holo class and 2nd ta holo variable
    // });

        // student::create([
        //     'name'=>'Monjila',
        //     'email'=>'monjila@gmail.com'
        // ]);
        //
    }
}
