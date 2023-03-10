@extends('layout')

@section('title', 'Home page title')
@section('heading', 'Home page')

@section('main_content')
    <p>This is home content This is home content This is home content</p>
@endsection
{{-- <h1>Home Page</h1>
<ul></ul> --}}
    {{-- <li><a href="{{route('front_home')}}">Home</a></li>
    <li><a href="{{route('front_about')}}">About</a></li> --}}
{{-- </ul> --}}

{{-- @forelse ($student_info as $value)
    {{ $value }} <br>
@empty
      this is not found
@endforelse --}}

{{--
@for($i=0; $i < 10; $i++)
    {{ $i.'  '}}
@endfor --}}

{{-- @php
    $i = 10;
@endphp

@if ($i == 10)
    {{'this is fine'}}
@else
    {{'this is not fine'}}
@endif --}}

