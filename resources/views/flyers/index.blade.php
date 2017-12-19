@extends('layouts.master')

@section('content')

    <h1>所有贫困户</h1>
    <table class="table table-bordered table-striped table-hover table-condensed">
    	<caption>所有贫困户信息</caption>
    	<thead>
    		<tr class='success'>
    			<th>姓名</th>
    			<th>村名</th>
    			<th>脱贫年份</th>
    			<th>致贫原因</th>
    			<th>耕地面积</th>
    			<th>入户路类型</th>
    			<th>住房面积</th>
    			<th>是否危房</th>
    			<th>是否有卫生厕</th>
    		
    			<th>基本信息</th>





    		</tr>
    	</thead>
    	<tbody class='alert-info'>
    		@foreach ($flyers as $fly)
    			<tr>

    				<td><a href="/flyers/{{ $fly->id }}">{{ $fly->name }}</a></td>
    				<td>{{ $fly->cun }}</td>
    				<td>{{ $fly->tuopinnianfen }}</td>
    				<td>{{ $fly->yuanyin }}</td>
    				<td>{{ $fly->gendi }}</td>
    				<td>{{ $fly->ruhulu }}</td>
    				<td>{{ $fly->zhufangmianji }}</td>
    				<td>{{ $fly->weishengce }}</td>
    				<td>{{ $fly->shifouweifang }}</td>
    				<td></td>
    			</tr>
    		@endforeach

    	</tbody>
    </table>

    <hr>



@endsection