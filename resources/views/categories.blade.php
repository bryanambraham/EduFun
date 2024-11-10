@extends('layout.navbar')
@section('content')
<h1 style="margin-left: 5%;">{{$category->name}}</h1>

    <!-- Article -->
    @foreach($articles as $article)
    <div class="article_container" style="margin: 2.5%;">
        <img class="img-fluid img-thumbnail" src="{{$article->image}}" alt="article_cover">
        <div class="article_content">
            <h6>{{$article->title}}</h6>
            <p class="article_published">{{$article->published_date}} by {{$article->writer->name}}</p>
            <p>{{$article->description}}</p>
            <a href="#" class="mt-auto ms-auto"><button type="button" class="btn btn-primary">read more..</button></a>
        </div>
    </div>
    @endforeach

    <!-- Footer -->
    <footer class="bg-primary" style="padding: 1rem; text-align:center; color:white; width:100%;">
        <h5>@EduFun 2024|Web Programming|Bryan Abraham Sunaryo|2602127721</h5>
    </footer>
@endsection