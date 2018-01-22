@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>

            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>

                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <th>Titel</th>
                            <th>URL</th>
                        </tr>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ link_to_route('article.show', $article->title, [$article->id]) }}</td>
                                <td>
                                {!! Form::open(array('route'=>['article.destroy', $article->id], 'method'=>'DELETE')) !!}
                                    {{ link_to_route('article.edit', 'Edit', [$article->id], ['class'=>'btn btn-primary']) }}
                                    {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach  
                    </table>
                </div>
            </div>
            {{ link_to_route('article.create', 'Add new article', null, ['class'=>'btn btn-success']) }}
        </div>
    </div>
</div>
@endsection
