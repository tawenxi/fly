@extends('layouts.master')

@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>{{ $flyer->name }}</h1>

       
                    <div >
                    <a class="btn btn-lg btn-success btn-block" href="/{{ $flyer->id }}/incomes">收入状况</a>
                    </div>
                    <div >
                    <a class="btn btn-lg btn-primary btn-block" href="/{{ $flyer->id }}/families">家庭成员</a>
                    </div>
                    <form action="{{ route('flyers.update',$flyer->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PATCH">
         
                         @include('flyers.partials._form')

                    </form>
        </div>

        <div class="col-md-8 gallery">
            @foreach ($flyer->photos->chunk(4) as $set)
                <div class="row">
                    @foreach ($set as $photo)
                        <div class="col-md-3 gallery__image">
                            <img src="/{{ $photo->thumbnail_path }}" alt="">
                        </div>
                    @endforeach
                </div>
            @endforeach

            
            <hr>
            <form
                action="{{ route('store_photo_path', [$flyer->id]) }}"
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
    <script type="text/javascript">
        Dropzone.options.addPhotosForm = {
            paramName: 'photo',
            maxFileSize: 3,
            acceptedFiles: '.jpg, .jpeg, .png, .bmp',
        };
    </script>
@endsection