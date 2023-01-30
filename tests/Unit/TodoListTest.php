<?php

namespace Tests\Unit;

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
}
