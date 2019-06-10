@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                       <h3>{{ $article->title }}</h3>
                        <div class="container">
                            <img class="img-fluid" src="{{ '/storage/' . $article->img_path }}" alt="">
                            {!! $article->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
