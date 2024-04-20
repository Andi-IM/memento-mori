<?php

use App\Models\Task;

use function Pest\Laravel\getJson;

it('can list tasks', function () {
    // Prepare
    $task = Task::factory()->create(['name' => 'Helllo']);

    // Act
    $response = $this->get(route('tasks.index'));

    // Assert
    $response->assertOk('Hello', $task->name);
});
