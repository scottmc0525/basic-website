@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut id laborum nam nobis obcaecati, odio odit sint temporibus totam. Aliquam dolore laboriosam libero minus modi ratione reiciendis repellat saepe.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the Sidebar</p>
@endsection
