<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<hi, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>User Tasks for {{ $user->name }}</h1>
    <ul>
        @foreach ($user->tasks as $task)
            <li>
                {{ $task->title }} (Due: {{ $task->due_date }}) - Status: {{ $task->status }}
            </li>
        @endforeach
    </ul>


</body>
</html>
