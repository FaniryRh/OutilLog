@extends('layouts.app')

@section('content')
    <h3 class="page-title"><!-- @lang('quickadmin.entree.title') -->Modification</h3>
    
    {!! Form::model($entree, ['method' => 'PUT', 'route' => ['admin.entrees.update', $entree->id]]) !!}

    <div class="panel panel-primary">
        <div class="panel-heading" style="text-transform: uppercase;">
            {!! $entree->stock->designation !!}
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date', trans('quickadmin.entree.fields.date').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('date', old('date'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date'))
                        <p class="help-block">
                            {{ $errors->first('date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('stock_id', trans('quickadmin.entree.fields.stock').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('stock_id', $stocks, old('stock_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('stock_id'))
                        <p class="help-block">
                            {{ $errors->first('stock_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('quantite', trans('quickadmin.entree.fields.quantite').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('quantite', old('quantite'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('quantite'))
                        <p class="help-block">
                            {{ $errors->first('quantite') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('unite', trans('quickadmin.entree.fields.unite').'', ['class' => 'control-label']) !!}
                    {!! Form::text('unite', old('unite'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('unite'))
                        <p class="help-block">
                            {{ $errors->first('unite') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('motif', trans('quickadmin.entree.fields.motif').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('motif', old('motif'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('motif'))
                        <p class="help-block">
                            {{ $errors->first('motif') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    <a href="{{ route('admin.entrees.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "HH:mm:ss"
        });
    </script>

@stop