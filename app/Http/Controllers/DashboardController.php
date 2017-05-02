<?php

namespace App\Http\Controllers;

use App\Task;
use App\Thread;
use Cache;
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
        $data['labels1'] = "['Gener', 'Febrer','Març']";
        $data['values1'] = "[25,50,5]";
        return view('dashboard',$data);
    }

    public function tasks()
    {
        //Cache
        return Task::all();
    }

    public function tasksNumber()
    {
        $value = Cache::remember('tasksNumber', 5, function (){
            // IF cache MISS
            return Task::all()->count();
        });
        return $value;
    }

    public function threadsNumber()
    {
        return Thread::all()->count();
    }

    // pubf threadsNumber, etc

    public function createRandomTask()
    {
        factory(\App\Task::class)->states('user')->create();
    }

    public function createRandomThread()
    {
        factory(\App\Thread::class)->create();
    }

}
