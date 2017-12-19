@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
        @foreach ($Allincomes as $incomes)
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> 收入合计： {{ $incomes->sum('amount') }}
                    <a class="btn btn-success pull-right" href="{{ route('incomes.create').'?flyer='.preg_match("/\d+/", url()->full()).'&date='.$incomes->first()->date }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                    
                        
                @if($Allincomes->count())
                    <table class="table table-condensed table-striped">
                        <thead>

                            <tr>
                                <th class="text-center">#</th>
                                <th>姓名</th><th>日期</th> <th>摘要</th> <th>类型</th> <th>金额</th>
                                <th class="text-right">操作</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($incomes as $income)
                                <tr>
                                    <td class="text-center"><strong>{{$income->id}}</strong></td>
                                    <td>{{$income->date}}</td>
                                    <td>{{$income->flyer->name}}</td> <td>{{$income->zy}}</td> <td>{{$income->type}}</td> <td>{{$income->amount}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('incomes.show', $income->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('incomes.edit', $income->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('incomes.destroy', $income->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
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
                

            @endforeach      

            </div>
        </div>
    </div>
</div>

@endsection