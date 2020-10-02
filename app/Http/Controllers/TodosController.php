<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    //追加
        public function index() {
            // どういう処理なんだろう？
        
      $todos = Todo::all();
      return view('todos.index')->with('todos',$todos);
    }
    //追加

    public function store(Request $request) {
        $todo = new Todo();
        $todo->body = $request->body;
        $todo->save();
        return redirect('/');
    }

        public function destroy(todo $todo) {
            $todo->delete();
           return redirect('/');
         
      }
      // 　編集画面への遷移処理（コントローラー）
      public function edit(todo $todo) {
        return view('todos.edit')->with('todo',$todo);
      }

      public function update(Request $request,todo $todo) {
        $todo->body = $request->body;
        $todo->save();
        return redirect('/');
      }

}