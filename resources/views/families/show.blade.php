@extends('layouts.master')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Family / Show #{{ $family->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('families.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('families.edit', $family->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Name</label>
<p>
	{{ $family->name }}
</p> <label>Sex</label>
<p>
	{{ $family->sex }}
</p> <label>Ralationship</label>
<p>
	{{ $family->ralationship }}
</p> <label>Birthday</label>
<p>
	{{ $family->birthday }}
</p> <label>Schoolage</label>
<p>
	{{ $family->schoolage }}
</p> <label>Work</label>
<p>
	{{ $family->work }}
</p> <label>Healthy</label>
<p>
	{{ $family->healthy }}
</p> <label>Salary</label>
<p>
	{{ $family->salary }}
</p> <label>Workmonth</label>
<p>
	{{ $family->workmonth }}
</p> <label>Description</label>
<p>
	{{ $family->description }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
