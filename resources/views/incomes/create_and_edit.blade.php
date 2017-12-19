@extends('layouts.master')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Income /
                    @if($income->id)
                        Edit #{{$income->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($income->id)
                    <form action="{{ route('incomes.update', $income->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('incomes.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="flyer_id-field">Flyer_id</label>
                    <input class="form-control" type="text" name="flyer_id" id="flyer_id-field" value="{{ isset($request->flyer)?$request->flyer:old('flyer_id', $income->flyer_id) }}" />
                </div> 

                <div class="form-group">
                    <label for="date-field">日期</label>
                    <input class="form-control" type="text" name="date" id="date-field" value="{{ isset($request->date)?$request->date:old('date', $income->date) }}" }}" />
                </div> 

                <div class="form-group">
                	<label for="zy-field">Zy</label>
                	<input class="form-control" type="text" name="zy" id="zy-field" value="{{ old('zy', $income->zy ) }}" />
                </div> 
                <div class="form-group">
                	<label for="type-field">Type</label>
                	<input class="form-control" type="text" name="type" id="type-field" value="{{ old('type', $income->type ) }}" />
                </div> 
                <div class="form-group">
                	<label for="amount-field">Amount</label>
                	<input class="form-control" type="text" name="amount" id="amount-field" value="{{ old('amount', $income->amount ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('incomes.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection