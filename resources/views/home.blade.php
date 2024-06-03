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

                        @if(Auth::user()->hasRole('manager'))
                        <h1>Welcome you are Manager</h1>
                       @endif
                       @if (Auth::user()->hasRole('support'))
                       <h1>Welcome you are Support</h1>
                       @elseif (Auth::user()->hasRole('customer'))
                       <h1>Welcome you are Customer</h1>
                       @endif

 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
