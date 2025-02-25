
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<hi, initial-scale=1.0">
    <title></title>
</head>
<body>
 
    <div class="container">
        
        <ul>
          <li><a href="/">All Tasks</a></li>
          <li><a href="tasksdone">Done Tasks</a></li>
          <li><a href="tasksonprogress">On Progress Tasks</a></li>
          <li><a href="todo">Todo Tasks</a></li>
          <li><a href="/users">users</a></li>
          <li><a href="due">tasks</a></li>
          <li><a href="task/create">create task</a></li>
         
        

        </ul>
      </div>
       
   <h1>{{$title}} </h1>

   @foreach ($tasks as $task)
 
   <div>
    <h3><a {{$task->id}}>{{ $task->title }} >{{$task->status}}>{{$task->assigned_to}}>{{$task->due_date}}</a></h3>
     <h3><a href="/delete/{{$task->id}}">delete</a></h3>
     @if ($task->status === 'todo')
     <h3> <li><a href="/'task/{id}/onprogress" >onprogress</a></li></h3>
     @elseif ($task->status === 'onprogress')
     <h3> <li><a href="/'task/{id}/done" >done</a></li></h3>


      @endif
    </div>
    @endforeach
  
      

</body>
</html>