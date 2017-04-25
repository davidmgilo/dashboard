<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('dashboard',$data);
    }

    public function tasks()
    {
        //Cache
        return Task::all();
    }

    public function tasksNumber()
    {
        return Task::all()->count();
    }

    // pubf threadsNumber, etc

    public function createRandomTask()
    {
        factory(\App\Task::class)->states('user')->create();
    }

}
