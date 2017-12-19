@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> Family
                    <a class="btn btn-success pull-right" href="{{ route('families.create').'?flyer='.preg_match("/\d+/", url()->full()) }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($families->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th> <th>Sex</th> <th>Ralationship</th> <th>Birthday</th> <th>Schoolage</th> <th>Work</th> <th>Healthy</th> <th>Salary</th> <th>Workmonth</th> <th>Description</th>
                                <th class="text-right ">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($families as $family)
                                <tr>
                                    <td class="text-center"><strong>{{$family->id}}</strong></td>

                                    <td>{{$family->name}}</td> <td>{{$family->sex}}</td> <td>{{$family->ralationship}}</td> <td>{{$family->birthday}}</td> <td>{{$family->schoolage}}</td> <td>{{$family->work}}</td> <td>{{$family->healthy}}</td> <td>{{$family->salary}}</td> <td>{{$family->workmonth}}</td> <td>{{$family->description}}</td>
                                    
                                    <td class="text-right col-md-1" >
                                        <a class="btn btn-xs btn-primary" href="{{ route('families.show', $family->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('families.edit', $family->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('families.destroy', $family->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection