@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit article</div>

                <div class="panel-body">

                    {!! Form::model($article, array('route'=>['article.update',$article->id], 'method' => 'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Title (max. 255 characters)') !!}
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('url', 'URL') !!}
                            {!! Form::text('url', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Edit', ['type'=>'submit', 'class'=>'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
        
                </div>
            </div>
            @if($errors->has())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
