@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
@foreach ($posts as $key => $post)
<div>{{ $key }}.{{ $post['title'] }}</div>
@endforeach
@endsection