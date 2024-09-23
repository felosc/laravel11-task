<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = new Task();
        $tasks->title = 'Task 1';
        $tasks->description = 'This is the first task';
        $tasks->user_id = User::find(1)->id;
        $tasks->save();
    }
}
