<?php

namespace Tests\Unit;

use App\Models\Task;
use App\Models\TodoList;
use Illuminate\Testing\Assert;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_model()
    {
        $task = new Task();

        $task->name = 'le nom';
        $task->is_done = true;

        $todoList = TodoList::factory()->create();

        $task->todoList()->associate($todoList);

        $task->save();

        $task = Task::query()->firstOrFail();

        Assert::assertEquals(1, $task->id);
        Assert::assertEquals('le nom', $task->name);
        Assert::assertTrue($task->is_done);
        Assert::assertEquals($todoList->id, $task->todoList->id);
    }
}
