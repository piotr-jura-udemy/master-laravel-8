@extends('layouts.app')

@section('title', $post['title'])

@section('content')
@if($post['is_new'])
<div>A new blog post! Using if</div>
@else
<div>Blog post is old! using elseif/else</div>
@endif
<h1>{{ $post['title'] }}</h1>
<p>{{ $post['content'] }}</p>
@endsection