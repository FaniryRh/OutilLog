@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.capacite.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.capacites.store'], 'files' => true,]) !!}

    <div class="panel panel-primary">
        <div class="panel-heading">
            Nouvelle
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('titre', trans('quickadmin.capacite.fields.titre').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('titre', old('titre'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('titre'))
                        <p class="help-block">
                            {{ $errors->first('titre') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', trans('quickadmin.capacite.fields.description').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('piece_jointe', trans('quickadmin.capacite.fields.piece-jointe').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('piece_jointe', old('piece_jointe')) !!}
                    {!! Form::file('piece_jointe', ['class' => 'form-control']) !!}
                    {!! Form::hidden('piece_jointe_max_size', 5) !!}
                    <p class="help-block"></p>
                    @if($errors->has('piece_jointe'))
                        <p class="help-block">
                            {{ $errors->first('piece_jointe') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>

@stop