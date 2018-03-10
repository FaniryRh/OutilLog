@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.competance-formation.title')</h3>
    @can('competance_formation_create')
    <p>
        <a href="{{ route('admin.competance_formations.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($competance_formations) > 0 ? 'datatable' : '' }} @can('competance_formation_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('competance_formation_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.competance-formation.fields.titre')</th>
                        <th>@lang('quickadmin.competance-formation.fields.description')</th>
                        <th>@lang('quickadmin.competance-formation.fields.piece-jointe')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($competance_formations) > 0)
                        @foreach ($competance_formations as $competance_formation)
                            <tr data-entry-id="{{ $competance_formation->id }}">
                                @can('competance_formation_delete')
                                    <td></td>
                                @endcan

                                <td field-key='titre'>{{ $competance_formation->titre }}</td>
                                <td field-key='description'>{!! $competance_formation->description !!}</td>
                                <td field-key='piece_jointe'>@if($competance_formation->piece_jointe)<a href="{{ asset(env('UPLOAD_PATH').'/' . $competance_formation->piece_jointe) }}" target="_blank">Download file</a>@endif</td>
                                                                <td>
                                    @can('competance_formation_view')
                                    <a href="{{ route('admin.competance_formations.show',[$competance_formation->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('competance_formation_edit')
                                    <a href="{{ route('admin.competance_formations.edit',[$competance_formation->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('competance_formation_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.competance_formations.destroy', $competance_formation->id])) !!}
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
        @can('competance_formation_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.competance_formations.mass_destroy') }}';
        @endcan

    </script>
@endsection