<?php

namespace App\Http\Controllers;

use App\Http\Requests\tareaRequest;
use App\Models\tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = tarea::orderByDesc('id')->get();
        $params = [
            'tareas' => $tareas
        ];
        return view('tarea.idex', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarea.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tareaRequest $request)
    {
        $datos = $request->validated();
        // dd($datos);
        $tarea = tarea::create($datos);
        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(tarea $tarea)
    {
        // return view('tarea.show', ['tarea' => $tarea]);
        return view('tarea.show',['tarea'=>$tarea]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(tarea $tarea)
    {
        return view('tarea.edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(tareaRequest $request, tarea $tarea)
    {
        $datos = $request->validated();
        $tarea->update($datos);
        return redirect()->route('tarea.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tarea.index');
    }
}
