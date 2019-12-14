<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //public function show($id)
   // {
   // $article = Task::find($id);
   // return view('task',['post'=>$article]);
   // }
   public function index()
   {
    $article = Task::all();
       return view ('task',['articles'=>$article]);
   }
}
