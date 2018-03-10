@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.statut-personnel.title')</h3>
    @can('statut_personnel_create')
    <p>
        <a href="{{ route('admin.statut_personnels.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($statut_personnels) > 0 ? 'datatable' : '' }} @can('statut_personnel_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('statut_personnel_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.statut-personnel.fields.nom')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($statut_personnels) > 0)
                        @foreach ($statut_personnels as $statut_personnel)
                            <tr data-entry-id="{{ $statut_personnel->id }}">
                                @can('statut_personnel_delete')
                                    <td></td>
                                @endcan

                                <td field-key='nom'>{{ $statut_personnel->nom }}</td>
                                                                <td>
                                    @can('statut_personnel_view')
                                    <a href="{{ route('admin.statut_personnels.show',[$statut_personnel->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('statut_personnel_edit')
                                    <a href="{{ route('admin.statut_personnels.edit',[$statut_personnel->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('statut_personnel_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.statut_personnels.destroy', $statut_personnel->id])) !!}
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
        @can('statut_personnel_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.statut_personnels.mass_destroy') }}';
        @endcan

    </script>
@endsection