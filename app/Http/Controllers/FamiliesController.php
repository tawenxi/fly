<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FamilyRequest;

class FamiliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index($flyer_id)
	{
		$families = Family::where('flyer_id',$flyer_id)->with('flyer')->get();
		return view('families.index', compact('families'));
	}

    public function show(Family $family)
    {
    	
        return view('families.show', compact('family'));
    }

	public function create(Family $family, Request $request)
	{
		return view('families.create_and_edit', compact('family','request'));
	}

	public function store(FamilyRequest $request)
	{
		$family = Family::create($request->all());
		return redirect()->route('families.show', $family->id)->with('message', 'Created successfully.');
	}

	public function edit(Family $family)
	{
        $this->authorize('update', $family);
		return view('families.create_and_edit', compact('family'));
	}

	public function update(FamilyRequest $request, Family $family)
	{
		$this->authorize('update', $family);
		$family->update($request->all());

		return redirect()->route('families.show', $family->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Family $family)
	{
		$this->authorize('destroy', $family);
		$family->delete();
		flash()->success('Woohoo', '删除成功!');
		return redirect()->back()->with('message', 'Deleted successfully.');
	}
}