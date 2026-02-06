<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = [
            ['id' => 1, 'title' => 'Tarea 1', 'content' => 'Contenido de la tarea 1'],
            ['id' => 2, 'title' => 'Tarea 2', 'content' => 'Contenido de la tarea 2'],
            ['id' => 3, 'title' => 'Tarea 3', 'content' => 'Contenido de la tarea 3'],
        ];
        return view('tasks.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function completeAll($anho)
    {
        return $anho;
    }

    public function dashboard() {
        $usuario = [
            'name' => 'Juan Perez',
            'email' => 'usuario@example.com',
            'rol' => 'Administrador',
            'notificaciones'=> [
                ['id' => 1, 'mensaje' => 'Tienes una nueva tarea asignada.'],
                ['id' => 2, 'mensaje' => 'La tarea "Revisar reportes" ha sido completada.'],
                ['id' => 3, 'mensaje' => 'Se ha actualizado la fecha de vencimiento de la tarea "Preparar presentación".']
            ],
            'tareas'=> [
                ['title' => 'Tarea 1', 'content' => 'Tienes una nueva tarea asignada.'],
                ['title' => 'Tarea 2', 'content' => 'La tarea "Revisar reportes" ha sido completada.'],
                ['title' => 'Tarea 3', 'content' => 'Se ha actualizado la fecha de vencimiento de la tarea "Preparar presentación".']
            ]
        ];

        //dd('Entró al dashboard');


        return view('tasks.dashboard', compact('usuario'));
    }
}
