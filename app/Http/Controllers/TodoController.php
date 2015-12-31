<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

use App\Todo;

class TodoController extends Controller
{
    public function getIndex()
    {
      $todo=Todo::all();
      return View::make('todo.index', ['todos'=>$todo]);
    }
    public function getNew()
    {
      $todo=Todo::all();
      return View::make('todo.new', ['todos'=>$todo]);
    }

    public function postNew(Request $r)
    {
      $todo=new Todo;

      $todo->task=$r->input('task');
      $todo->details=$r->input('details');
      $todo->execute_time=$r->input('date');

      if($todo->save()) {
        return redirect()->back()->with('msg', 'Successfully Created');
      }
    }

    public function getView($id)
    {
      $todo=Todo::find($id);
      return View::make('todo.showtask', ['todo'=>$todo]);
    }

    public function getTaskDone($id)
    {
      $todo=Todo::find($id);
      $todo->status=1;
      if($todo->save()) {
        return redirect()->back()->with('msg', 'oka');
      }
    }

    public function getTaskUndone($id)
    {
      $todo=Todo::find($id);
      $todo->status=0;
      if($todo->save()) {
        return redirect()->back()->with('msg', 'notoka');
      }
    }
}
