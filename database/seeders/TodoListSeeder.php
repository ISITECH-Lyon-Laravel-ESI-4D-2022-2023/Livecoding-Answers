<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\TodoList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TodoList::factory(3)
            ->has(
                Task::factory()
                    ->count(6)
            )
            ->create();
    }
}
