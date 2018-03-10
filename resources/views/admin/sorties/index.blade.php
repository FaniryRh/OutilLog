@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.sortie.title')</h3>
    @can('sortie_create')
    <p>
        <a href="{{ route('admin.sorties.create') }}" class="btn btn-success"><!-- @lang('quickadmin.qa_add_new') -->Effectuer nouvelle sortie</a>
        
    </p>
    @endcan

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_list') -->Liste des sorties
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($sorties) > 0 ? 'datatable' : '' }} @can('sortie_delete') dt-select @endcan">
                <thead style="background-color: orange;">
                    <tr>
                        @can('sortie_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.sortie.fields.parsonnel')</th>
                        <th>@lang('quickadmin.sortie.fields.stock')</th>
                        <th>@lang('quickadmin.sortie.fields.quantite')</th>
                        <!-- <th>@lang('quickadmin.sortie.fields.unite')</th> -->
                        <th>@lang('quickadmin.sortie.fields.motif')</th>
                        <th>@lang('quickadmin.sortie.fields.mission')</th>
                        <th>@lang('quickadmin.sortie.fields.date')</th>
                        <!-- <th>@lang('quickadmin.sortie.fields.dateheurfin')</th> -->
                        <th>@lang('quickadmin.sortie.fields.statut')</th>
                        <!-- <th>@lang('quickadmin.sortie.fields.reponsable-sortie')</th> -->
                        <th>@lang('quickadmin.sortie.fields.location')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($sorties) > 0)
                        @foreach ($sorties as $sorty)
                            <tr data-entry-id="{{ $sorty->id }}">
                                @can('sortie_delete')
                                    <td></td>
                                @endcan

                                <td field-key='parsonnel'>{{ $sorty->parsonnel->nom_prenom or '' }}</td>
                                <td field-key='stock' style="background-color: #ffeecc; font-weight: bold;"><a href="{{ route('admin.liste_stocks.show',[$sorty->stock->id]) }}">{{ $sorty->stock->designation or '' }}</a></td>
                                <td field-key='quantite' style="font-weight: bold;">{{ $sorty->quantite }} {{ $sorty->unite }}</td>
                                <!-- <td field-key='unite'>{{ $sorty->unite }}</td> -->
                                <td field-key='motif'>{!! $sorty->motif !!}</td>
                                <td field-key='mission'>{{ $sorty->mission->objet or '' }}</td>
                                <td field-key='date'>{{ $sorty->date }}</td>
                                <!-- <td field-key='dateheurfin'>{{ $sorty->dateheurfin }}</td> -->
                                <td field-key='statut' style="font-weight: bold;">{{ $sorty->statut->nom or '' }}</td>
                                <!-- <td field-key='reponsable_sortie'>{{ $sorty->reponsable_sortie }}</td> -->
                                <td field-key='location'>{{ $sorty->location_address }}</td>
                                                                <td>
                                    @can('sortie_view')
                                    <a href="{{ route('admin.sorties.show',[$sorty->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('sortie_edit')
                                    <a href="{{ route('admin.sorties.edit',[$sorty->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('sortie_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.sorties.destroy', $sorty->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="16">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('sortie_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.sorties.mass_destroy') }}';
        @endcan

    </script>
@endsection