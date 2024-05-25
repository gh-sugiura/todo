<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view("index",["todos"=>$todos]);
        // return view("index", compact("todos"));
    }

    public function store(TodoRequest $request)
    {
        $todo = $request->only(["content"]);
        Todo::create($todo);
        return redirect("/")->with("message","Todoを作成しました");
    }

    public function update(TodoRequest $request)
    {
        $todo = $request->only(["content"]);
        Todo::find($request->id)->update($todo);
        return redirect("/categorise")->with("message", "Todoを変更しました");
    }

    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect("/categorise")->with("message", "Todoを削除しました");
    }
}

?>