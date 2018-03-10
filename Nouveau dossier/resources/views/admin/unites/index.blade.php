@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.unite.title')</h3>
    @can('unite_create')
    <p>
        <a href="{{ route('admin.unites.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($unites) > 0 ? 'datatable' : '' }} @can('unite_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('unite_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.unite.fields.nom')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($unites) > 0)
                        @foreach ($unites as $unite)
                            <tr data-entry-id="{{ $unite->id }}">
                                @can('unite_delete')
                                    <td></td>
                                @endcan

                                <td field-key='nom'>{{ $unite->nom }}</td>
                                                                <td>
                                    @can('unite_view')
                                    <a href="{{ route('admin.unites.show',[$unite->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('unite_edit')
                                    <a href="{{ route('admin.unites.edit',[$unite->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('unite_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.unites.destroy', $unite->id])) !!}
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
        @can('unite_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.unites.mass_destroy') }}';
        @endcan

    </script>
@endsection