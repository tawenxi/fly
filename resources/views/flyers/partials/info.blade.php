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