@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'Blog')
@section('header', 'Header')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h1>О блоге</h1>
    <p>Эксперименты с Laravel на Хекслете</p>
@endsection
