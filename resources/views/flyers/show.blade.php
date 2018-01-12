@extends('layouts.master')

@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css">
@endsection

@section('content')
    <table class="table table-bordered table-striped table-hover table-condensed">
        <caption></caption>
        <thead>
            <tr class="alert-info " >
                <th>标签</th>
                <th>数量</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($photos as $key=>$photo)
                <tr class="success">
                <td>{{ $photo->first()->type }}</td>
                <td>{{ $photo->count() }}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <div class="row">
       @if ($flyer->id == 10000)
            <div class="col-md-12 gallery">

        @else 
            @include('flyers.partials.info')

            <div class="col-md-8 gallery">
        @endif 


        
            @foreach ($photos as $key=>$photo)
            <h2>{{ $photo->first()->type }}</h2>
                @foreach ($photo->chunk(4) as $set)
                    <div class="row">
                        @foreach ($set as $photo)
                            <div class="col-md-3 gallery__image">
                                <a href="/{{ $photo->path }}" "email me">
                                   <img src="/{{ $photo->thumbnail_path }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @endforeach

            
            <hr>
            <form
                action="{{ route('store_photo_path', [$flyer->id,$request->dir]) }}"
                method="post"
                class="dropzone"
                id="addPhotosForm"
                >
                {{ csrf_field() }}
                
            </form>
          

        </div>
    </div>

@stop

@section('footer')
    @include('flyers.partials.addphoto')
@endsection