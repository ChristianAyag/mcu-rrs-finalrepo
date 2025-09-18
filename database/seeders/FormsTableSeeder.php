<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_forms')->insert([
            [
                'form_code' => 'Form 2A',
                'form_name' => 'Form 2A',
                'form_view' => 'student.forms.form2a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'form_code' => 'Form 2B',
                'form_name' => 'Form 2B',
                'form_view' => 'student.forms.form2b',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'form_code' => 'Form 2C',
                'form_name' => 'Form 2C',
                'form_view' => 'student.forms.form2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'form_code' => 'Form 2D',
                'form_name' => 'Form 2D',
                'form_view' => 'student.forms.form2d',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Form 5E',
                'form_name' => 'Form 5E',
                'form_view' => 'student.forms.form5e',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
