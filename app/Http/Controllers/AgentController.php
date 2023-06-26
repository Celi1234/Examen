<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

/**
 * Class AgentController
 * @package App\Http\Controllers
 */
class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::paginate();

        return view('agent.index', compact('agents'))
            ->with('i', (request()->input('page', 1) - 1) * $agents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agent = new Agent();
        return view('agent.create', compact('agent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Agent::$rules);

        $agent = Agent::create($request->all());

        return redirect()->route('agents.index')
            ->with('success', 'Agent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = Agent::find($id);

        return view('agent.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = Agent::find($id);

        return view('agent.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Agent $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        request()->validate(Agent::$rules);

        $agent->update($request->all());

        return redirect()->route('agents.index')
            ->with('success', 'Agent updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $agent = Agent::find($id)->delete();

        return redirect()->route('agents.index')
            ->with('success', 'Agent deleted successfully');
    }
}
