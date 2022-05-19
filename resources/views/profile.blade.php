@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <h1>{{ $user->name }}</h1>
                        <h2>{{ $user->email }}</h2>
                    </div>

                    @for ($i = 0; $i < count($user->posts); $i++)
                        <div>
                            <h2>{{ $user->posts[$i]->title }}</h2>
                            <p>
                                {{ $user->posts[$i]->content }}
                            </p>
                            <span>{{ $user->posts[$i]->created_at }}</span>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
