<?php

namespace Tests\Unit;

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
}
