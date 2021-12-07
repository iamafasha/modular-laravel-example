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

                    {{ __('You are logged in!') }}
                    <br><br>

                    <a href="{{ route('showtime') }}" class="btn btn-info btn-round">view Shows In Our Cinemas</a href="#">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
