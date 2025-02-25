
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<hi, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <form  action="/task/create" method="post">
        @csrf
        <input type="text" name="title" placeholder=" task name" style="width: 200px;">
        <br>
        <br>
        <input type="date" name="due_date" placeholder="due date" style="width: 200px;">
        <br>
        <br>

        <input type="time" name="due_time" placeholder="time" style="width: 200px;">
        <br>
        <br>
        
        <select name="status">
            <option value="todo">To Do</option>
            <option value="onprogress">On Progress</option>
            <option value="done">Done</option>
        </select>
        <br>
        <br>
        <select name="assigned_to">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <br>
        <br>
       <input type="submit" value="create">
        
      </form>
      

</body>
</html>
