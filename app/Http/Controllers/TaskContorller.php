<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskContorller extends Controller
{
    public function index(){
        $tasks = DB::table('tasks')->get();
        return view('tasks/index', compact('tasks'));
    }
    public function show($id){
        $task = DB::table('tasks')->find($id);
        return view('task', compact('task'));
    }
    public function store(Request $request){
        $task = DB::table('tasks')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->back();
    }
}
