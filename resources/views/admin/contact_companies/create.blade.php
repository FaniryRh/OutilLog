@extends('layouts.app')

@section('content')
    <!-- <h3 class="page-title">@lang('quickadmin.contact-companies.title')</h3> -->
    {!! Form::open(['method' => 'POST', 'route' => ['admin.contact_companies.store'], 'files' => true,]) !!}

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_create') -->Nouvelle organisme
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('logo', trans('quickadmin.contact-companies.fields.logo').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('logo', old('logo')) !!}
                    {!! Form::file('logo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('logo_max_size', 5) !!}
                    {!! Form::hidden('logo_max_width', 4096) !!}
                    {!! Form::hidden('logo_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('logo'))
                        <p class="help-block">
                            {{ $errors->first('logo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.contact-companies.fields.name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('address', trans('quickadmin.contact-companies.fields.address').'', ['class' => 'control-label']) !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('website', trans('quickadmin.contact-companies.fields.website').'', ['class' => 'control-label']) !!}
                    {!! Form::text('website', old('website'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('website'))
                        <p class="help-block">
                            {{ $errors->first('website') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.contact-companies.fields.email').'', ['class' => 'control-label']) !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tel', trans('quickadmin.contact-companies.fields.tel').'', ['class' => 'control-label']) !!}
                    {!! Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tel'))
                        <p class="help-block">
                            {{ $errors->first('tel') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>
    <!-- <div class="panel panel-primary">
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
                    @foreach(old('contacts_regions', []) as $index => $data)
                        @include('admin.contact_companies.contacts_regions_row', [
                            'index' => $index
                        ])
                    @endforeach
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('quickadmin.qa_add_new')</a>
        </div>
    </div> -->
    <!-- <div class="panel panel-primary">
        <div class="panel-heading">
            Groupe sectoriel
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>@lang('quickadmin.liste-groupe-sectoriel.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.fonction')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.tel')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.email')</th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="groupe-sectoriel">
                    @foreach(old('liste_groupe_sectoriels', []) as $index => $data)
                        @include('admin.contact_companies.liste_groupe_sectoriels_row', [
                            'index' => $index
                        ])
                    @endforeach
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('quickadmin.qa_add_new')</a>
        </div>
    </div> -->

    <a href="{{ route('admin.contact_companies.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script type="text/html" id="contacts-region-template">
        @include('admin.contact_companies.contacts_regions_row', [
            'index' => '_INDEX_'
        ])
    </script>

    <script type="text/html" id="groupe-sectoriel-template">
        @include('admin.contact_companies.liste_groupe_sectoriels_row', [
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