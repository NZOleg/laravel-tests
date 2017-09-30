@extends('app')


@section('content')


    <h1>Write a New Article</h1>
    <hr />
    {!! Form::open(['url'=>'articles']) !!}

    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}

    <br>
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

    <br>

    {!! Form::label('published_at', 'Publish on:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}

    <br>

    {!! Form::submit() !!}

    @if ($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li> {{$error}}</li>

            @endforeach
        </ul>
    @endif


    {!!  Form::close() !!}
@stop