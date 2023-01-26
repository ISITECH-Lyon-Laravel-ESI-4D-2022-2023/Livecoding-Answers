<?php

namespace Tests\Unit;

use App\Models\Task;
use App\Models\TodoList;
use Illuminate\Testing\Assert;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_model()
    {
        $todoList = new TodoList();

        $due_date = now()->addDay();

        $todoList->name = 'le nom';
        $todoList->description = 'la description';
        $todoList->due_date = $due_date;
        $todoList->priority = 1;

        $todoList->save();

        $todoList = TodoList::query()->firstOrFail();

        Assert::assertEquals(1, $todoList->id);
        Assert::assertEquals('le nom', $todoList->name);
        Assert::assertEquals('la description', $todoList->description);
        Assert::assertEquals($due_date, $todoList->due_date);
        Assert::assertEquals(1, $todoList->priority);
    }

    public function test_can_have_no_task()
    {
        $todoList = TodoList::factory()->create();
        Assert::assertEquals(0, $todoList->tasks()->count());
    }

    public function test_has_tasks()
    {
        $todoList = TodoList::factory()
            ->has(
                Task::factory()->count(2)
            )
            ->create();
        Assert::assertGreaterThan(0, $todoList->tasks()->count());
        Assert::assertEquals(2, $todoList->tasks->count());
    }
}
