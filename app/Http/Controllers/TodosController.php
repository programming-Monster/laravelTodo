<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodosController extends Controller
{
    public function welcome(){
        return view("todos.welcome");
    }

    public function index(){
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $todo){
        // dd($todoId);
        return view("todos.show")->with("todo", $todo);
    }

    public function create(){
        return view("todos.create");
    }

    public function store() {
        $this->validate(request(),[
        "name" =>'required|min:4|max:20',
        "description" => 'required'
        ]);

        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data["name"];
        $todo->description = $data["description"];
        $todo->completed = false;
        $todo->save();
        session()->flash('success',"Todos created succesfully");
        return redirect("/todos");
    }

    public function edit(Todo $todo) {
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo){
        $this->validate(request(), [
            "name" => "required|min:4|max:26",
            "description" => "required"
        ]);

        $data = request()->all();
        $todo->name =  $data['name'];
        $todo->description = $data["description"];
        $todo->save();
        session()->flash('success',"Todo updated succesfully");
        return redirect("/todos");
    }

    public function delete(Todo $todo){
        $todo->forceDelete();
        session()->flash('success',"Todo deleted succesfully");
        return redirect("/todos");
    }

    public function complete(Todo $todo){
        $todo->completed = true;
        $todo->save();
        session()->flash('success',"Todo succesfully completed you can now delete");
        return redirect('/todos');
    }
}