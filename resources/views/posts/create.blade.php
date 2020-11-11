@extends('layouts.app')

@section('title', 'Create the post')

@section('content')
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include('posts.partials.form')
    <div><input type="submit" value="Create" class="btn btn-primary btn-block"></div>
</form>
@endsection