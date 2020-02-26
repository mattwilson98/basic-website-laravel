@extends('layouts.app')



@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum harum est numquam placeat, eius in quaerat voluptatibus! Incidunt inventore doloribus exercitationem cupiditate temporibus voluptates voluptatibus reiciendis ab! Doloremque, reiciendis voluptatum.</p>
@endsection


@section('sidebar')
    @parent
    <p>this is appended to the sidebar</p>
@endsection