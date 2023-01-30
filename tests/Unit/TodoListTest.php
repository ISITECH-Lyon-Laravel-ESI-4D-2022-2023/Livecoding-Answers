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
    public function test_example()
    {
        $todoList = new TodoList();

        $dueDate = now()->addDays(3);

        $todoList->name = 'mon nom';
        $todoList->description = 'ma description';
        $todoList->due_date = $dueDate;
        $todoList->priority = 1;

        $todoList->save();

        $todoList->refresh();

        Assert::assertEquals('mon nom', $todoList->name);
        Assert::assertEquals('ma description', $todoList->description);
        Assert::assertTrue($dueDate->is($todoList->due_date));
        Assert::assertEquals(1, $todoList->priority);
    }

    public function test_todo_list_has_many_tasks()
    {
        /** @var TodoList $todoList */
        $todoList = TodoList::factory()->create();

        $task1 = Task::factory()->makeOne();

        $todoList->tasks()->save($task1);

        $task2 = Task::factory()->makeOne();

        $todoList->tasks()->save($task2);

        Assert::assertEquals(
            2,
            $todoList->tasks()->count()
        );
    }

    public function test_todo_list_has_many_tasks_using_factories()
    {
        /** @var TodoList $todoList */
        $todoList = TodoList::factory()
            ->has(
                Task::factory()
                    ->count(2)
            )
            ->create();

        Assert::assertEquals(
            2,
            $todoList->tasks()->count()
        );

        $this->assertDatabaseCount(Task::class, 2);
    }
}
