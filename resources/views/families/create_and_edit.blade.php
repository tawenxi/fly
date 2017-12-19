@extends('layouts.master')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Family /
                    @if($family->id)
                        Edit #{{$family->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($family->id)
                    <form action="{{ route('families.update', $family->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('families.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="name-field">flyerID</label>
                    <input class="form-control" type="text" name="flyer_id" id="name-field" value="{{ isset($request->flyer)?$request->flyer:old('flyer_id', $family->flyer_id) }}" />
                </div> 
                    
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $family->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="sex-field">Sex</label>
                	<input class="form-control" type="text" name="sex" id="sex-field" value="{{ old('sex', $family->sex ) }}" />
                </div> 
                <div class="form-group">
                	<label for="ralationship-field">Ralationship</label>
                	<input class="form-control" type="text" name="ralationship" id="ralationship-field" value="{{ old('ralationship', $family->ralationship ) }}" />
                </div> 
                <div class="form-group">
                    <label for="birthday-field">Birthday</label>
                    <input class="form-control" type="text" name="birthday" id="birthday-field" value="{{ old('birthday', $family->birthday ) }}" />
                </div> 
                <div class="form-group">
                	<label for="schoolage-field">Schoolage</label>
                	<input class="form-control" type="text" name="schoolage" id="schoolage-field" value="{{ old('schoolage', $family->schoolage ) }}" />
                </div> 
                <div class="form-group">
                	<label for="work-field">Work</label>
                	<input class="form-control" type="text" name="work" id="work-field" value="{{ old('work', $family->work ) }}" />
                </div> 
                <div class="form-group">
                	<label for="healthy-field">Healthy</label>
                	<input class="form-control" type="text" name="healthy" id="healthy-field" value="{{ old('healthy', $family->healthy ) }}" />
                </div> 
                <div class="form-group">
                	<label for="salary-field">Salary</label>
                	<input class="form-control" type="text" name="salary" id="salary-field" value="{{ old('salary', $family->salary ) }}" />
                </div> 
                <div class="form-group">
                	<label for="workmonth-field">Workmonth</label>
                	<input class="form-control" type="text" name="workmonth" id="workmonth-field" value="{{ old('workmonth', $family->workmonth ) }}" />
                </div> 
                <div class="form-group">
                	<label for="description-field">Description</label>
                	<input class="form-control" type="text" name="description" id="description-field" value="{{ old('description', $family->description ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('families.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection