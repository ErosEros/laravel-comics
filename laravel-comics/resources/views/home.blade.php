@extends('layouts._main')

@section('title')
    DC COMICS
@endsection

@section('main')

<div class="bg-black">
    <h2>
        Current Series
    </h2>

    <div class="container">
        <div class="card-container">
            @foreach ($comics as $item)
               <div>
                    @include('partials._comic-card')
                </div>
            @endforeach
        </div>
    </div>

</div>

<div class="bg-blue">

</div>


@endsection
