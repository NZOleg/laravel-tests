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

    {!! Form::submit() !!}


    {!!  Form::close() !!}
@stop