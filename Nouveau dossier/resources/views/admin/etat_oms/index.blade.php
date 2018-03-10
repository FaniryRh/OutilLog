@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.etat-om.title')</h3>
    @can('etat_om_create')
    <p>
        <a href="{{ route('admin.etat_oms.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($etat_oms) > 0 ? 'datatable' : '' }} @can('etat_om_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('etat_om_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.etat-om.fields.nom')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($etat_oms) > 0)
                        @foreach ($etat_oms as $etat_om)
                            <tr data-entry-id="{{ $etat_om->id }}">
                                @can('etat_om_delete')
                                    <td></td>
                                @endcan

                                <td field-key='nom'>{{ $etat_om->nom }}</td>
                                                                <td>
                                    @can('etat_om_view')
                                    <a href="{{ route('admin.etat_oms.show',[$etat_om->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('etat_om_edit')
                                    <a href="{{ route('admin.etat_oms.edit',[$etat_om->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('etat_om_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.etat_oms.destroy', $etat_om->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('etat_om_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.etat_oms.mass_destroy') }}';
        @endcan

    </script>
@endsection