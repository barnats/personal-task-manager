<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>
</head>
<body>

    <h1>Personal Task Manager</h1>

    <a href="/tasks/create">Add New Task</a>

    <h2>My Tasks</h2>

    @if ($tasks->count() > 0)

        @foreach ($tasks as $task)

            <div>
                <h3>{{ $task->task_name }}</h3>

                <p>{{ $task->description }}</p>

                <p>Status: {{ $task->status }}</p>

                <p>Due Date: {{ $task->due_date }}</p>

                <a href="/tasks/{{ $task->id }}/edit">Edit</a>

                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>
            </div>

            <hr>

        @endforeach

    @else

        <p>No tasks yet.</p>

    @endif

</body>
</html>