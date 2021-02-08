<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view ('exercises.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Exercise $exercises
     * @return Response
     */
    public function show(Exercise $exercises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Exercise $exercises
     * @return Response
     */
    public function edit(Exercise $exercises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Exercise $exercises
     * @return Response
     */
    public function update(Request $request, Exercise $exercises)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Exercise $exercises
     * @return Response
     */
    public function destroy(Exercise $exercises)
    {
        //
    }
}
