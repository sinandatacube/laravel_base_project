<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\TodoModel;
class TodoController extends Controller
{
    //
    public function home(){
         $todos = TodoModel::all();
        
           //   $todos =TodoModel::all();
          //  echo $todos;
        //   return json_encode( $todos );
        return view('home',['todos'=> $todos]);
    }
    public function getdata($id){
         $todos = TodoModel::all();
        $result=TodoModel::where('id', $id)->get();
     
         return  $result;
            // view('home',['todos'=> $todos]);
       
    }


  



    public function insert(Request $request){

        //validate data
        $validateData =$request->validate([
            'title'=>'required|max:10'

         ]);

     //    TodoModel:create($validateData);

         $todo=new TodoModel();
         $todo-> title=$request->post(key:'title');
         $todo-> description=$request->post(key:'title');
         $todo->save();

        return redirect(route(name :'home'));
  
    }


    public function update($id){
        // print($id);
           $todo=TodoModel::find($id);   
           if(!$todo) return abort(code: 404); 
       return view('update',
         ['todo'=> $todo]
        );
    }

    public function updatetitle(Request $request, TodoModel $todo){
        //validate data
        $validateData =$request->validate([
            'title'=>'required|max:10'

         ]);
    //   $todo->title=$validateData['title'];
      $todo->update($validateData);
      return redirect(route(name :'home'));
    }

    public function deletetitle(TodoModel $todo){
       $todo->delete();
      return back();
    }






}