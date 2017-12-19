<!-- Fixed navbar -->
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('flyers.index') }}">枚江扶贫信息网</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('flyers.index') }}">首页</a></li>
                <li><a href="{{ route('flyers.create') }}">新增贫困户</a></li>
            </ul>

       {{--      @if ( $signedIn )
                <p class="navbar-text navbar-right">
                    Hello, {{ $user->name }}
                </p>
            @endif --}}
        </div><!--/.nav-collapse -->
    </div>
</nav>