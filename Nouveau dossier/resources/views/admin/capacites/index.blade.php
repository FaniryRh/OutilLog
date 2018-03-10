@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.capacite.title')</h3>
    @can('capacite_create')
    <p>
        <a href="{{ route('admin.capacites.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($capacites) > 0 ? 'datatable' : '' }} @can('capacite_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('capacite_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.capacite.fields.titre')</th>
                        <th>@lang('quickadmin.capacite.fields.description')</th>
                        <th>@lang('quickadmin.capacite.fields.piece-jointe')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($capacites) > 0)
                        @foreach ($capacites as $capacite)
                            <tr data-entry-id="{{ $capacite->id }}">
                                @can('capacite_delete')
                                    <td></td>
                                @endcan

                                <td field-key='titre'>{{ $capacite->titre }}</td>
                                <td field-key='description'>{!! $capacite->description !!}</td>
                                <td field-key='piece_jointe'>@if($capacite->piece_jointe)<a href="{{ asset(env('UPLOAD_PATH').'/' . $capacite->piece_jointe) }}" target="_blank">Download file</a>@endif</td>
                                                                <td>
                                    @can('capacite_view')
                                    <a href="{{ route('admin.capacites.show',[$capacite->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('capacite_edit')
                                    <a href="{{ route('admin.capacites.edit',[$capacite->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('capacite_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.capacites.destroy', $capacite->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('capacite_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.capacites.mass_destroy') }}';
        @endcan

    </script>
@endsection