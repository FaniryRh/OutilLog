@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.region.title')</h3>
    
    {!! Form::model($region, ['method' => 'PUT', 'route' => ['admin.regions.update', $region->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('province_id', trans('quickadmin.region.fields.province').'', ['class' => 'control-label']) !!}
                    {!! Form::select('province_id', $provinces, old('province_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('province_id'))
                        <p class="help-block">
                            {{ $errors->first('province_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.region.fields.name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Contacts Région
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>@lang('quickadmin.contacts-region.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.contacts-region.fields.fonction')</th>
                        <th>@lang('quickadmin.contacts-region.fields.tel')</th>
                        <th>@lang('quickadmin.contacts-region.fields.email')</th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="contacts-region">
                    @forelse(old('contacts_regions', []) as $index => $data)
                        @include('admin.regions.contacts_regions_row', [
                            'index' => $index
                        ])
                    @empty
                        @foreach($region->contactsRegion as $item)
                            @include('admin.regions.contacts_regions_row', [
                                'index' => 'id-' . $item->id,
                                'field' => $item
                            ])
                        @endforeach
                    @endforelse
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('quickadmin.qa_add_new')</a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            District
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>@lang('quickadmin.district.fields.name')</th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="district">
                    @forelse(old('districts', []) as $index => $data)
                        @include('admin.regions.districts_row', [
                            'index' => $index
                        ])
                    @empty
                        @foreach($region->district as $item)
                            @include('admin.regions.districts_row', [
                                'index' => 'id-' . $item->id,
                                'field' => $item
                            ])
                        @endforeach
                    @endforelse
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('quickadmin.qa_add_new')</a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            prefecture
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>@lang('quickadmin.prefecture.fields.name')</th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="prefecture">
                    @forelse(old('prefectures', []) as $index => $data)
                        @include('admin.regions.prefectures_row', [
                            'index' => $index
                        ])
                    @empty
                        @foreach($region->prefecture as $item)
                            @include('admin.regions.prefectures_row', [
                                'index' => 'id-' . $item->id,
                                'field' => $item
                            ])
                        @endforeach
                    @endforelse
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('quickadmin.qa_add_new')</a>
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script type="text/html" id="contacts-region-template">
        @include('admin.regions.contacts_regions_row', [
            'index' => '_INDEX_'
        ])
    </script>

    <script type="text/html" id="district-template">
        @include('admin.regions.districts_row', [
            'index' => '_INDEX_'
        ])
    </script>

    <script type="text/html" id="prefecture-template">
        @include('admin.regions.prefectures_row', [
            'index' => '_INDEX_'
        ])
    </script>

            <script>
        $('.add-new').click(function () {
            var tableBody = $(this).parent().find('tbody');
            var template = $('#' + tableBody.attr('id') + '-template').html();
            var lastIndex = parseInt(tableBody.find('tr').last().data('index'));
            if (isNaN(lastIndex)) {
                lastIndex = 0;
            }
            tableBody.append(template.replace(/_INDEX_/g, lastIndex + 1));
            return false;
        });
        $(document).on('click', '.remove', function () {
            var row = $(this).parentsUntil('tr').parent();
            row.remove();
            return false;
        });
        </script>
@stop