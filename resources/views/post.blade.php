@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>

                    <!-- POST TEXT Y BUTTON -->
                    <p class="card-text">
                        <!-- //En ves del extracto es el texto completo -->
                        {{$post->body}}
                    </p>

                    <!-- # USER NAME Y DATE -->
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{$post->user->name}}
                        </em>
                        {{$post->created_at->format("d M Y")}}
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
