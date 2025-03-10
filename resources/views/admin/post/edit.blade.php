@extends('layouts.app')

@section('stylesheet')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Post - edit</div>

                    <div class="card-body">
                        
                        {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'put','enctype' => 'multipart/form-data']) !!}
                       

                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            {!! Form::label('Title') !!}
                            {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                            @if ($errors->has('title'))
                                <span class="help-block">{!! $errors->first('title') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('sub_title')) has-error @endif">
                            {!! Form::label('Sub Title') !!}
                            {!! Form::text('sub_title', $post->sub_title, ['class' => 'form-control', 'placeholder' => 'Sub Title']) !!}
                            @if ($errors->has('sub_title'))
                                <span class="help-block">{!! $errors->first('sub_title') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('content')) has-error @endif">
                            {!! Form::label('Content') !!}
                            {!! Form::textarea('content', $post->content, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
                            @if ($errors->has('content'))
                                <span class="help-block">{!! $errors->first('content') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('code')) has-error @endif">
                            {!! Form::label('Code') !!}
                            {!! Form::textarea('code', null, ['class' => 'form-control', 'placeholder' => 'Code']) !!}
                            @if ($errors->has('code'))
                                <span class="help-block">{!! $errors->first('code') !!}</span>@endif
                        </div>


                        <div class="form-group @if($errors->has('image_url')) has-error @endif">
                            {!! Form::label('Image url',null, ['style' => 'display: block;']) !!}
                            {!! Form::file('image_url', ['multiple' => 'multiple']) !!}
                            @if ($errors->has('image_url'))
                            <span class="help-block">{!! $errors->first('image_url') !!}</span>@endif
                        </div>



                        <div class="form-group @if($errors->has('category_id')) has-error @endif">
                            {!! Form::label('Category') !!}
                            {!! Form::select('category_id[]', $categories, null, ['class' => 'form-control', 'id' => 'category_id', 'multiple' => 'multiple']) !!}
                            @if ($errors->has('category_id'))
                                <span class="help-block">{!! $errors->first('category_id') !!}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('Publish') !!}
                            {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Update',['class' => 'btn btn-sm btn-warning']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function () {
            CKEDITOR.replace('content');
            CKEDITOR.replace('code');

            $('#category_id').select2({
                placeholder: "Select categories"
            }).val({!! json_encode($post->categories()->allRelatedIds()) !!}).trigger('change');
        });
    </script>
@endsection
