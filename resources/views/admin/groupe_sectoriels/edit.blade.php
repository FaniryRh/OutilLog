@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.groupe-sectoriel.title')</h3>
    
    {!! Form::model($groupe_sectoriel, ['method' => 'PUT', 'route' => ['admin.groupe_sectoriels.update', $groupe_sectoriel->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.groupe-sectoriel.fields.name').'*', ['class' => 'control-label']) !!}
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
                    @forelse(old('liste_groupe_sectoriels', []) as $index => $data)
                        @include('admin.groupe_sectoriels.liste_groupe_sectoriels_row', [
                            'index' => $index
                        ])
                    @empty
                        @foreach($groupe_sectoriel->listeGroupeSectoriel as $item)
                            @include('admin.groupe_sectoriels.liste_groupe_sectoriels_row', [
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

    <script type="text/html" id="groupe-sectoriel-template">
        @include('admin.groupe_sectoriels.liste_groupe_sectoriels_row', [
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