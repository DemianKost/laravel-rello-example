<?php

namespace App\Http\Controllers;

use App\Http\Requests\Board\StoreBoardRequest;
use App\Http\Requests\Board\UpdateBoardRequest;
use App\Models\Board;
use Inertia\Inertia;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Board/Index', [
            'boards' => auth()->user()->boards()->get()
        ]);
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
    public function store(StoreBoardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Board $board)
    {
        return Inertia::render('Board/Show', [
            'board' => $board,
            'tasks' => [
                'to_do' => $board->tasks()->where('category', 1)->get(),
                'do_today' => $board->tasks()->where('category', 2)->get(),
                'in_progress' => $board->tasks()->where('category', 3)->get(),
                'done' => $board->tasks()->where('category', 4)->get()
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBoardRequest $request, Board $board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Board $board)
    {
        //
    }
}
