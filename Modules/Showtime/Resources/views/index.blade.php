@extends('showtime::layouts.master')
@section('title')
    Showtimes
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Movie Showtimes In VAS Cinemas') }}</div>
                @foreach($shows as $show)
                <div class="card-body">
                    <h3 class="lead">{{ $show->movie->title }} </h3>
                    
                    <img src="{{ $show->movie->image }}" class="img-thumbnail float-left">
                    <p>{{ $show->movie->description }}</p>
                    <hr>
                    <h4>Showing @ {{ $show->cinema->name }}</h4>
                    <h4>{{ Carbon\Carbon::createFromTimestamp(strtotime($show->date))->isoFormat('MMM Do YYYY')}} </h4>
                    <button class="btn btn-small btn-danger">{{ Carbon\Carbon::createFromTimestamp(strtotime($show->first_show))->format('g:i A')}}</button>
                    @if($show->second_show) <button class="btn btn-small btn-danger">{{   Carbon\Carbon::createFromTimestamp(strtotime($show->second_show))->format('g:i A')}}</button> @endif
                    <hr style="width:50%">

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
