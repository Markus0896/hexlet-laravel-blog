@extends('layouts.app')

@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

        <h1>Список статей</h1>
    @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td><a class="text-decoration-none" href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></td>
            <td>
                <a class="text-decoration-none" href="{{route('articles.edit', $article->id)}}">@lang('edit')</a>
                <form action="{{url("/articles/$article->id")}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
