@extends('layouts/main', [
    'title' => 'About us', 
    'current_page' => 'about-us'
])

@section('stylesheets')

@endsection
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="about-us.css">

@section('content')
    <h1>About us</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti eaque esse incidunt praesentium hic dolorum saepe, non aperiam aliquid sequi quaerat tenetur maxime soluta reprehenderit quo animi nihil. Minima, porro!</p>
@endsection