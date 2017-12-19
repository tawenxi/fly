@extends('layouts.master')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Income / Show #{{ $income->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="/{{ $income->flyer->id }}/incomes"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('incomes.edit', $income->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Flyer_id</label>
<p>
	{{ $income->flyer_id }}
</p> <label>Zy</label>
<p>
	{{ $income->zy }}
</p> <label>Type</label>
<p>
	{{ $income->type }}
</p> <label>Amount</label>
<p>
	{{ $income->amount }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
