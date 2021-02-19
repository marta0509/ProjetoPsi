@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                    Logado por:<br>
                    @if(auth()->check())
                    <b>ID:</b> {{Auth::user()->id}}<br>
                    <b>Email:</b> {{Auth::user()->email}}<br>
                    <b>Nome:</b> {{Auth::user()->name}}<br>
                    <b>Tipo:</b> {{Auth::user()->tipo_user}}<br>
                    @endif
                    <br>
                    <a class="btn btn-info" style="background-color: #FA5858" href="{{route('entrada')}}">Home</a>
                    <!--{{ __('You are logged in!') }}-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
