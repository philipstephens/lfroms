@extends('layout')

@section('head')
<title>Home Page</Title>

@section('bodytext')
<ul>
    @foreach($people as $person)
        <li>{{$person}}</li>
    @endforeach
</ul>
@stop