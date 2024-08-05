<?php

namespace Database\Seeders;

use App\Models\ClassModel;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['name' => 'IPS'],
            ['name' => 'TIK'],
            ['name' => 'Bahasa']

        ];
        foreach ($data as $value) {
            ClassModel::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}