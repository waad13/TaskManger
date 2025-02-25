<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Task::create([
            'title' => 'A todo task',
            'status' => 'todo',
            'due_date' => '2023-09-10',
            'assigned_to' => 1
        ]);

        Task::create([
            'title' => 'A pending task',
            'status' => 'onprogress',
            'due_date' => '2023-08-04',
            'assigned_to' => 1
        ]);

        Task::create([
            'title' => 'A done task',
            'status' => 'done',
            'due_date' => '2023-07-01',
            'assigned_to' => 2
        ]);

        \App\Models\Task::create([
            'title' => 'Another todo task',
            'status' => 'todo',
            'due_date' => '2023-07-10',
            'assigned_to' => 3
        ]);

        \App\Models\Task::create([
            'title' => 'Another pending task',
            'status' => 'onprogress',
            'due_date' => '2023-08-15',
            'assigned_to' => 3
        ]);

        \App\Models\Task::create([
            'title' => 'Another done task',
            'status' => 'done',
            'due_date' => '2023-10-03',
            'assigned_to' => 4
        ]);
    }
}
