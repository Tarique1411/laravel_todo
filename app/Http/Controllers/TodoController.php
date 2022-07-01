<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
  public function index()
  {
     $todos= Todo::all();
    // echo '<pre>'; print_r($todos); exit;

      return view('todo.index')->with(['todos' => $todos]);


  }
  public function create()
  {

    return view('todo.create');

  }
  public function edit($id)
  {
    $todo =Todo::find($id);
    // echo '<pre>'; print_r($todo); exit;
    return view('todo.edit')->with(['todo' => $todo]);

  }
  public function upload(Request $request)
  {
    $request->validate([
        'title' => 'required|max:220'
    ]);
    $todo = $request->title;
    Todo::create(['title' => $todo ]);
    return redirect()->back()->with('success','ToDO Created Successfully');


  }
  public function update(Request $request, $id)
  {
    $request->validate([
        'title' => 'required|max:220'
    ]);

    $updateTodo = Todo::find($id);
    $updateTodo->title = $request['title'];
    $updateTodo->save();

    return redirect('index')->with('success','ToDO Updated Successfully');


  }
  public function done(Request $request, $id)
  {
    $todo = Todo::find($id);
    if($todo->completed){
         $todo->update(['completed' => false]);
        return redirect()->back()->with('success','Task Not Completed !');

    }else{
        $todo->update(['completed' =>true]);
        return redirect()->back()->with('success','Task Marked as Completed !');

    }

  }
  public function delete($id)
    {

        $todo = Todo::find($id);

        if(!is_null($todo)){
            $todo->delete();
        }
        return redirect()->back()->with('success','Task Delete Successfully !');

    }
}
