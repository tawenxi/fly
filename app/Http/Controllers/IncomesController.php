<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\IncomeRequest;
use Auth;
use App\Models\Flyer;

class IncomesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index($flyer_id)
	{
		$Allincomes = Income::where('flyer_id',$flyer_id)->with('flyer')->get()->groupBy(function ($item, $key) {
			    return substr($item['date'], 0,4);
				});;
		
		//dd($Allincomes->toarray());
		return view('incomes.index', compact('Allincomes'));
	}

    public function show(Income $income)
    {
        return view('incomes.show', compact('income'));
    }

	public function create(Income $income,Request $request)
	{
		return view('incomes.create_and_edit', compact('income','request'));
	}

	public function store(IncomeRequest $request)
	{
		$income = Income::create($request->all());
		return redirect()->route('incomes.show', $income->id)->with('message', 'Created successfully.');
	}

	public function edit(Income $income)
	{
        $this->authorize('update', $income);
		return view('incomes.create_and_edit', compact('income'));
	}

	public function update(IncomeRequest $request, Income $income)
	{
		$this->authorize('update', $income);
		$income->update($request->all());

		return redirect()->route('incomes.show', $income->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Income $income)
	{
		$this->authorize('destroy', $income);
		$income->delete();
		flash()->success('Woohoo', '删除成功!');
		return redirect()->back()->with('message', 'Deleted successfully.');
	}
}