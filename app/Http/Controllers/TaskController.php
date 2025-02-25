<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\users;
use Illuminate\Support\Facades\Auth;
class TaskController extends Controller
{
    
    public function index()
    {
        $tasks = Task::whereNotNull('due_date')->get();
        $title='welcome to the tasks page';
        
        return view('tasks', compact('tasks', 'title'));
    }

    
    public function done()
    {
         $tasks=Task::where('status', '=', 'done')->get();
         $title='done tasks page';

        return view('tasks',compact('tasks','title'));
    }

   
    public function store(Request $request)
    {
        
       $attributes= request()->validate([
           'title'=>'required',
            'due_date'=>'required',
            'due_time'=>'required',
          'status'=>'required',
          'assigned_to'=>'required'

        ]);

    
        Task::create($attributes);
        return redirect('/');
    }

   
    public function onprogress()
    {
        $tasks=Task::where('status', '=', 'onprogress')->get();
        $title='onprogress tasks page';

       return view('tasks',compact('tasks','title'));
        

    }

    
    public function todo()
    {
        $tasks=Task::where('status', '=', 'todo')->get();
        $title='todo tasks page';

        return view('tasks',compact('tasks','title'));

    }
   

 public function delete($id){
    $task=Task::findOrFail($id);
    $task->delete();
    return redirect ('/');


 }
 public function asonProgress(Task $task)
    {
       
        $task->status = 'onprogress';
        $task->save();
        return redirect('/');
    }
    public function asdone(Task $task)
    {
       
        $task->status = 'done';
        $task->save();
        return redirect('/');
    }


 public function due(){
    $tasks = Task::where('due_date', '<', now())->where('status', '!=', 'done')->get();
     $title=' incompelete tasks ';
        return view('tasks', compact('tasks' , 'title'));
 }

 public function create()
 {
    $users = User::all();
     return view('createtask', compact('users'));
 }


   
    
 
    public function update(Request $request, string $id)
    {
        
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

