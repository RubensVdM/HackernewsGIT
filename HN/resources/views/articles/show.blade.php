@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ $article->url }}">{{ $article->title }}</a></div>
                <div class="panel-body">

                    {{ $article->url }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
