@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>

            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Article overview</div>

                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <th>Titel</th>
                            @if(Auth::user())
                            <th>Bewerken</th>
                            @endif
                        </tr>
                        @foreach($articles as $article)
                            <tr>
                                <td><a href="{{ $article->url }}">{{ $article->title}}</a></td>
                                @if(Auth::user())
                                <td>
                                {!! Form::open(array('route'=>['article.destroy', $article->id], 'method'=>'DELETE')) !!}
                                    {{ link_to_route('article.edit', 'Edit', [$article->id], ['class'=>'btn btn-primary']) }}
                                    {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                {!! Form::close() !!}
                                </td>
                                @endif
                            </tr>
                        @endforeach  
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
