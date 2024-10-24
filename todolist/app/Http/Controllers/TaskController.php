<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Creamos la variables y le pasamos un arreglo
        que consulta todas las tareas.
        all():  esto es un eloquen que es un ORM integrado a laravel
        que nos permite consultar todos los registros */
        $task['tasks']= Task::all();
        //vista para mostrar la informacion
        return view('task.index',$task);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Creamos la variable $task para crear un acceso el cual va trabajar
        con el modelo, $task va reseccionar los datos y vamos autilizar el modelo
        apartir de una intruccion 
         */
        $task = request()->all();
        Task::create($task);
         return redirect('/');
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
     * @return \Illuminate\Http\Response
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //buscamos el id mediante todos los registros
        $task=Task::findorFail($id);
        //usamos la misma tarea para el borrado, se busca el id y se le asig
        // a las variable task y lo borrara
        $task->delete();
        // que nos redireccione a la ruta inicial 
        return redirect("/");

    }
}
