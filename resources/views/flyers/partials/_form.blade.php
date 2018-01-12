@inject('countries', 'App\Http\Utilities\Country')

<div class="row">
    <div class="col-sm-6">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">姓名:</label>
           
            <input type="text" name="name" id="name" class="
            form-control" value ="{{ strstr(url()->full(),'create')?'': $flyer->name }}" >
        </div>

        <div class="form-group">
            <label for="tuopinnianfen">脱贫年份:</label>
            <input type="text" name="tuopinnianfen" id="tuopinnianfen" class="form-control"
            value ="{{ strstr(url()->full(),'create')?'': $flyer->tuopinnianfen }}"
             >
        </div>


        <div class="form-group">
            <label for="cun">村别:</label>
            <input type="text" name="cun" id="cun" class="form-control" 
            value ="{{ strstr(url()->full(),'create')?'': $flyer->cun }}"
            >
        </div>

        <div class="form-group">
            <label for="yuanyin">致贫原因:</label>
            <input type="text" name="yuanyin" id="yuanyin" class="form-control" 
            value ="{{ strstr(url()->full(),'create')?'': $flyer->yuanyin }}"
            >
        </div>



{{--         <div class="form-group">
            <label for="country">Country:</label>
            <select name="country" id="country" class="form-control" >
                @foreach ( $countries::all() as $country => $code )
                    <option value="{{ $code }}">{{ $country }}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="form-group">
            <label for="dibaoshu">低保人数:</label>
            <input type="text" name="dibaoshu" id="dibaoshu" class="form-control" 
            value ="{{ strstr(url()->full(),'create')?'': $flyer->dibaoshu }}"
            >
        </div>
        <div class="form-group">
            <label for="gendi">耕地面积:</label>
            <input type="text" name="gendi" id="gendi" class="form-control"
            value ="{{ strstr(url()->full(),'create')?'': $flyer->gendi }}"
             >
        </div>

    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="ruhulu">入户路:</label>
            <input type="text" name="ruhulu" id="ruhulu" class="form-control" 
            value ="{{ strstr(url()->full(),'create')?'': $flyer->ruhulu }}"
            >
        </div>
        <div class="form-group">
            <label for="zhufangmianji">住房面积:</label>
            <input type="text" name="zhufangmianji" id="zhufangmianji" class="form-control" 
            value ="{{ strstr(url()->full(),'create')?'': $flyer->zhufangmianji }}"
            >
        </div>

        <div class="form-group">
            <label for="shifouweifang">是否危房:</label>
            <input type="text" name="shifouweifang" id="shifouweifang" class="form-control" 
            value ="{{ strstr(url()->full(),'create')?'': $flyer->shifouweifang }}"
            >
        </div>

        <div class="form-group">
            <label for="description">Home Description:</label>
            <textarea name="description" id="description" class="form-control" rows="20" 
           
            >{{ strstr(url()->full(),'create')?'': $flyer->description }}</textarea>
        </div>

    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-12">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </div>
</div>