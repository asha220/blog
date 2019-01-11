<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    //
    public function update(Task $task){
        $task->update([
            'complited' => \request()->has('complited')
        ]);

        return back();
    }
}
