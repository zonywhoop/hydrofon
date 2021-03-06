@extends('layouts.app')

@section('content')
    <main class="main-content">
        <section class="container">
            <h1>Create user</h1>

            <section>
                {!! Form::open(['route' => 'users.store']) !!}
                    @include('users._form', ['submitButtonText' => 'Create'])
                {!! Form::close() !!}
            </section>
        </section>
    </main>
@endsection
