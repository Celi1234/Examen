<?php

namespace App\Http\Controllers;

use App\Models\Transportagency;
use Illuminate\Http\Request;

/**
 * Class TransportagencyController
 * @package App\Http\Controllers
 */
class TransportagencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportagencies = Transportagency::paginate();

        return view('transportagency.index', compact('transportagencys'))
            ->with('i', (request()->input('page', 1) - 1) * $transportagencys->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transportagency = new Transportagency();
        return view('transportagency.create', compact('transportagency'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Transportagency::$rules);

        $transportagency = Transportagency::create($request->all());

        return redirect()->route('transportagencys.index')
            ->with('success', 'Transportagency created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transportagency = Transportagency::find($id);

        return view('transportagency.show', compact('transportagency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transportagency = Transportagency::find($id);

        return view('transportagency.edit', compact('transportagency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Transportagency $transportagency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transportagency $transportagency)
    {
        request()->validate(Transportagency::$rules);

        $transportagency->update($request->all());

        return redirect()->route('transportagencys.index')
            ->with('success', 'Transportagency updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $transportagency = Transportagency::find($id)->delete();

        return redirect()->route('transportagencys.index')
            ->with('success', 'Transportagency deleted successfully');
    }
}
