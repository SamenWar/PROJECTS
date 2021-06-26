<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\project;
use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = auth()->id();
        $id =$request['project'];
        if(!empty($user)) {
            $project = project::find($id);
            $tasks = $project->tasks()->paginate(6);
            return view('tasks.List', ['tasks'=>$tasks, 'id'=>$id]);
        }else
        {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id =$request['project'];
        return view('tasks.create',['id'=>$id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validated = $request->validated();
        $task = new task();
        $task->title=$request->title;
        $task->project_id=$request->project_id;
        $task->deskription=$request->deskription;
        $task->important=$request->important;
        $task->save();
        $project = $request->project_id;
        return redirect(route('task.index', ['project'=>$project]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(task $task)
    {
        return view('tasks.update',['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\task  $task
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(TaskRequest $request, task $task)
    {

        $project=$task->project_id;
        $task->title=$request->title;
        $task->deskription=$request->deskription;
        $task->important=$request->important;
        $task->save();
        return redirect(route('task.index', ['project'=>$project]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(task $task)
    {
        $project=$task->project_id;
        $task->delete();
        return redirect(route('task.index', ['project'=>$project]));
    }
}
