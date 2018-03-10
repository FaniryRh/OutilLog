@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.entree.title')</h3>
    @can('entree_create')
    <p>
        <a href="{{ route('admin.entrees.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($entrees) > 0 ? 'datatable' : '' }} @can('entree_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('entree_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.entree.fields.date')</th>
                        <th>@lang('quickadmin.entree.fields.stock')</th>
                        <th>@lang('quickadmin.entree.fields.quantite')</th>
                        <th>@lang('quickadmin.entree.fields.unite')</th>
                        <th>@lang('quickadmin.entree.fields.motif')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($entrees) > 0)
                        @foreach ($entrees as $entree)
                            <tr data-entry-id="{{ $entree->id }}">
                                @can('entree_delete')
                                    <td></td>
                                @endcan

                                <td field-key='date'>{{ $entree->date }}</td>
                                <td field-key='stock'>{{ $entree->stock->designation or '' }}</td>
                                <td field-key='quantite'>{{ $entree->quantite }}</td>
                                <td field-key='unite'>{{ $entree->unite }}</td>
                                <td field-key='motif'>{!! $entree->motif !!}</td>
                                                                <td>
                                    @can('entree_view')
                                    <a href="{{ route('admin.entrees.show',[$entree->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('entree_edit')
                                    <a href="{{ route('admin.entrees.edit',[$entree->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('entree_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.entrees.destroy', $entree->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('entree_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.entrees.mass_destroy') }}';
        @endcan

    </script>
@endsection