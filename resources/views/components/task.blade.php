@props(['task'])
<div class="card text-dark w-50" style="width: 18rem;">
    <div class="card-body">
        <h3 class="card-title fw-bold fs-1">{{ $task->title }}</h3>
        <span class="fw-normal font-monospace">from {{ $task->user->name}}</span>
        <p class="card-text my-3">{{ $task->description }}</p>
        <p class="card-text text-muted">Due Date : {{ $task->dueDate }}  </p>
    </div>
    <div class="card-body">
        <a href="/tasks" class="btn btn-primary" class="card-link">Go Back</a>
        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn btn-secondary" class="card-link">Edit Task</a>
    </div>
</div>
