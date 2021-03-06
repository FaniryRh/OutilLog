@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.status-sortie.title')</h3>
    @can('status_sortie_create')
    <p>
        <a href="{{ route('admin.status_sorties.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($status_sorties) > 0 ? 'datatable' : '' }} @can('status_sortie_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('status_sortie_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.status-sortie.fields.nom')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($status_sorties) > 0)
                        @foreach ($status_sorties as $status_sorty)
                            <tr data-entry-id="{{ $status_sorty->id }}">
                                @can('status_sortie_delete')
                                    <td></td>
                                @endcan

                                <td field-key='nom'>{{ $status_sorty->nom }}</td>
                                                                <td>
                                    @can('status_sortie_view')
                                    <a href="{{ route('admin.status_sorties.show',[$status_sorty->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('status_sortie_edit')
                                    <a href="{{ route('admin.status_sorties.edit',[$status_sorty->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('status_sortie_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.status_sorties.destroy', $status_sorty->id])) !!}
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
        @can('status_sortie_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.status_sorties.mass_destroy') }}';
        @endcan

    </script>
@endsection