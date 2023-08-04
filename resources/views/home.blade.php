@extends('layouts.app')

@section('content')
    
    <div class= "row mt-5">
        @foreach($comics as $comic)
            <div class=" col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="{{ $comic->thumb }}" />
                    </div>
                        <div class="card-body">

                        </div>
                     <h4> {{ $comic->title}}</h4>
                </div>
            </div>
            @endforeach
    </div>

@endsection