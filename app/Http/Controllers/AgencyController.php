<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

/**
 * Class AgencyController
 * @package App\Http\Controllers
 */
class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Agency::paginate();

        return view('agency.index', compact('agencies'))
            ->with('i', (request()->input('page', 1) - 1) * $agencies->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agency = new Agency();
        return view('agency.create', compact('agency'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Agency::$rules);

        $agency = Agency::create($request->all());

        return redirect()->route('agencies.index')
            ->with('success', 'Agency created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agency = Agency::find($id);

        return view('agency.show', compact('agency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agency = Agency::find($id);

        return view('agency.edit', compact('agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Agency $agency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agency $agency)
    {
        request()->validate(Agency::$rules);

        $agency->update($request->all());

        return redirect()->route('agencies.index')
            ->with('success', 'Agency updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $agency = Agency::find($id)->delete();

        return redirect()->route('agencies.index')
            ->with('success', 'Agency deleted successfully');
    }
}
