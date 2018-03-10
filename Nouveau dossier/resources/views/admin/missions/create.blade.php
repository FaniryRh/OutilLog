@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.missions.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.missions.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('objet', trans('quickadmin.missions.fields.objet').'', ['class' => 'control-label']) !!}
                    {!! Form::text('objet', old('objet'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('objet'))
                        <p class="help-block">
                            {{ $errors->first('objet') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('location', trans('quickadmin.missions.fields.location').'', ['class' => 'control-label']) !!}
                    {!! Form::text('location', old('location'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('location'))
                        <p class="help-block">
                            {{ $errors->first('location') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date_deb', trans('quickadmin.missions.fields.date-deb').'', ['class' => 'control-label']) !!}
                    {!! Form::text('date_deb', old('date_deb'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_deb'))
                        <p class="help-block">
                            {{ $errors->first('date_deb') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date_fin', trans('quickadmin.missions.fields.date-fin').'', ['class' => 'control-label']) !!}
                    {!! Form::text('date_fin', old('date_fin'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_fin'))
                        <p class="help-block">
                            {{ $errors->first('date_fin') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('piece_jointe', trans('quickadmin.missions.fields.piece-jointe').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('piece_jointe', old('piece_jointe')) !!}
                    {!! Form::file('piece_jointe', ['class' => 'form-control']) !!}
                    {!! Form::hidden('piece_jointe_max_size', 10) !!}
                    <p class="help-block"></p>
                    @if($errors->has('piece_jointe'))
                        <p class="help-block">
                            {{ $errors->first('piece_jointe') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', trans('quickadmin.missions.fields.description').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('itineraire', trans('quickadmin.missions.fields.itineraire').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('itineraire', old('itineraire')) !!}
                    {!! Form::file('itineraire', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('itineraire_max_size', 10) !!}
                    {!! Form::hidden('itineraire_max_width', 4096) !!}
                    {!! Form::hidden('itineraire_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('itineraire'))
                        <p class="help-block">
                            {{ $errors->first('itineraire') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('multiple_piece_jointe', trans('quickadmin.missions.fields.multiple-piece-jointe').'', ['class' => 'control-label']) !!}
                    {!! Form::file('multiple_piece_jointe[]', [
                        'multiple',
                        'class' => 'form-control file-upload',
                        'data-url' => route('admin.media.upload'),
                        'data-bucket' => 'multiple_piece_jointe',
                        'data-filekey' => 'multiple_piece_jointe',
                        ]) !!}
                    <p class="help-block"></p>
                    <div class="photo-block">
                        <div class="progress-bar form-group">&nbsp;</div>
                        <div class="files-list"></div>
                    </div>
                    @if($errors->has('multiple_piece_jointe'))
                        <p class="help-block">
                            {{ $errors->first('multiple_piece_jointe') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('personnel_id', trans('quickadmin.missions.fields.personnel-id').'', ['class' => 'control-label']) !!}
                    {!! Form::select('personnel_id[]', $personnel_ids, old('personnel_id'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('personnel_id'))
                        <p class="help-block">
                            {{ $errors->first('personnel_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('materiel_id', trans('quickadmin.missions.fields.materiel-id').'', ['class' => 'control-label']) !!}
                    {!! Form::select('materiel_id[]', $materiel_ids, old('materiel_id'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('materiel_id'))
                        <p class="help-block">
                            {{ $errors->first('materiel_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('progression', trans('quickadmin.missions.fields.progression').'', ['class' => 'control-label']) !!}
                    {!! Form::text('progression', old('progression'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('progression'))
                        <p class="help-block">
                            {{ $errors->first('progression') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('stat_id', trans('quickadmin.missions.fields.stat').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('stat_id', $stats, old('stat_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('stat_id'))
                        <p class="help-block">
                            {{ $errors->first('stat_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('latitude', trans('quickadmin.missions.fields.latitude').'', ['class' => 'control-label']) !!}
                    {!! Form::text('latitude', old('latitude'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('latitude'))
                        <p class="help-block">
                            {{ $errors->first('latitude') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('longitude', trans('quickadmin.missions.fields.longitude').'', ['class' => 'control-label']) !!}
                    {!! Form::text('longitude', old('longitude'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('longitude'))
                        <p class="help-block">
                            {{ $errors->first('longitude') }}
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
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "HH:mm:ss"
        });
    </script>

    <script src="{{ asset('quickadmin/plugins/fileUpload/js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('quickadmin/plugins/fileUpload/js/jquery.fileupload.js') }}"></script>
    <script>
        $(function () {
            $('.file-upload').each(function () {
                var $this = $(this);
                var $parent = $(this).parent();

                $(this).fileupload({
                    dataType: 'json',
                    formData: {
                        model_name: 'Mission',
                        bucket: $this.data('bucket'),
                        file_key: $this.data('filekey'),
                        _token: '{{ csrf_token() }}'
                    },
                    add: function (e, data) {
                        data.submit();
                    },
                    done: function (e, data) {
                        $.each(data.result.files, function (index, file) {
                            var $line = $($('<p/>', {class: "form-group"}).html(file.name + ' (' + file.size + ' KB)').appendTo($parent.find('.files-list')));
                            $line.append('<a href="#" class="btn btn-xs btn-danger remove-file">Remove</a>');
                            $line.append('<input type="hidden" name="' + $this.data('bucket') + '_id[]" value="' + file.id + '"/>');
                            if ($parent.find('.' + $this.data('bucket') + '-ids').val() != '') {
                                $parent.find('.' + $this.data('bucket') + '-ids').val($parent.find('.' + $this.data('bucket') + '-ids').val() + ',');
                            }
                            $parent.find('.' + $this.data('bucket') + '-ids').val($parent.find('.' + $this.data('bucket') + '-ids').val() + file.id);
                        });
                        $parent.find('.progress-bar').hide().css(
                            'width',
                            '0%'
                        );
                    }
                }).on('fileuploadprogressall', function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $parent.find('.progress-bar').show().css(
                        'width',
                        progress + '%'
                    );
                });
            });
            $(document).on('click', '.remove-file', function () {
                var $parent = $(this).parent();
                $parent.remove();
                return false;
            });
        });
    </script>
@stop