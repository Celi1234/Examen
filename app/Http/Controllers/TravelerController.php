<?php

namespace App\Http\Controllers;

use App\Models\Traveler;
use Illuminate\Http\Request;

/**
 * Class TravelerController
 * @package App\Http\Controllers
 */
class TravelerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travelers = Traveler::paginate();

        return view('traveler.index', compact('travelers'))
            ->with('i', (request()->input('page', 1) - 1) * $travelers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $traveler = new Traveler();
        return view('traveler.create', compact('traveler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Traveler::$rules);

        $traveler = Traveler::create($request->all());

        return redirect()->route('travelers.index')
            ->with('success', 'Traveler created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $traveler = Traveler::find($id);

        return view('traveler.show', compact('traveler'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $traveler = Traveler::find($id);

        return view('traveler.edit', compact('traveler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Traveler $traveler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traveler $traveler)
    {
        request()->validate(Traveler::$rules);

        $traveler->update($request->all());

        return redirect()->route('travelers.index')
            ->with('success', 'Traveler updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $traveler = Traveler::find($id)->delete();

        return redirect()->route('travelers.index')
            ->with('success', 'Traveler deleted successfully');
    }
}
