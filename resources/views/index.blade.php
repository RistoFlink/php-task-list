<h1>
    Task list
</h1>

<div>
    <!-- @if (count($tasks) > 0) -->
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>No tasks exist!</div>
    @endforelse
    <!-- @endif -->
</div>