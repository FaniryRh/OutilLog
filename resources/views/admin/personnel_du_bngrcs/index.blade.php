@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.personnel-du-bngrc.title')</h3>
    @can('personnel_du_bngrc_create')
    <p>
        <a href="{{ route('admin.personnel_du_bngrcs.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('personnel_du_bngrc_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.personnel_du_bngrcs.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.personnel_du_bngrcs.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_list') -->Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($personnel_du_bngrcs) > 0 ? 'datatable' : '' }} @can('personnel_du_bngrc_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead style="background-color: orange;">
                    <tr>
                        @can('personnel_du_bngrc_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.personnel-du-bngrc.fields.photo')</th>

                        <th>@lang('quickadmin.personnel-du-bngrc.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.fonction')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.tel')</th>
                        <!-- <th>@lang('quickadmin.personnel-du-bngrc.fields.tel2')</th>
 -->                        <th>@lang('quickadmin.personnel-du-bngrc.fields.email')</th>
                        <!-- <th>@lang('quickadmin.personnel-du-bngrc.fields.adresse')</th> -->
                        <!-- <th>@lang('quickadmin.personnel-du-bngrc.fields.competence-formation')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.capacites')</th>
                        <th>Date d'embauche</th> -->
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.statut')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($personnel_du_bngrcs) > 0)
                        @foreach ($personnel_du_bngrcs as $personnel_du_bngrc)
                            <tr data-entry-id="{{ $personnel_du_bngrc->id }}">
                                @can('personnel_du_bngrc_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='photo'>@if($personnel_du_bngrc->photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $personnel_du_bngrc->photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $personnel_du_bngrc->photo) }}"/></a>
                                @else <img src="{{ url('/images/user.png') }}" style="width: 50px; height: 50px;" />


                                @endif</td>
                                <td field-key='nom_prenom' style="background-color: #ffeecc; font-weight: bold;">{{ $personnel_du_bngrc->nom_prenom }}</td>
                                <td field-key='fonction'>{{ $personnel_du_bngrc->fonction }}</td>
                                
                                <td field-key='tel'>{{ $personnel_du_bngrc->tel }}</td>
                                <!-- <td field-key='tel2'>{{ $personnel_du_bngrc->tel2 }}</td> -->
                                <td field-key='email'>{{ $personnel_du_bngrc->email }}</td>
                                <!-- <td field-key='adresse'>{{ $personnel_du_bngrc->adresse }}</td> -->
                                <!-- <td field-key='competence_formation'>
                                    @foreach ($personnel_du_bngrc->competence_formation as $singleCompetenceFormation)
                                        <span class="label label-info label-many">{{ $singleCompetenceFormation->titre }}</span>
                                    @endforeach
                                </td>
                                <td field-key='capacites'>
                                    @foreach ($personnel_du_bngrc->capacites as $singleCapacites)
                                        <span class="label label-info label-many">{{ $singleCapacites->titre }}</span>
                                    @endforeach
                                </td>
                                <td field-key='date_embauche'>{{ $personnel_du_bngrc->date_embauche }}</td> -->


                                <?php $stat = e(isset($personnel_du_bngrc->statut->nom) ? $personnel_du_bngrc->statut->nom : ''); $color = null; ?>

                                                                <?php switch ($stat) {
                                                                        case "Disponible":
                                                                            $color = 'green';
                                                                            break;
                                                                        case "Occupé":
                                                                            $color = 'red';
                                                                            break;
                                                                        case "En mission":
                                                                            $color = 'orange';
                                                                            break;
                                                                        case "Absent":
                                                                            $color = 'black';
                                                                            break;
                                                                        case "Au bureau":
                                                                            $color = 'yellow';
                                                                            break;
                                                                        default:
                                                                            $color = 'white';
                                                                            break;
                                                                }?>

                                <td field-key='statut' style="background-color: <?= $color ?>"><span   class="badge bg-black" style="background-color: <?= $color ?>; font-size: 10px;" >{{ $personnel_du_bngrc->statut->nom or '' }}</span></td>
                                
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('personnel_du_bngrc_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.personnel_du_bngrcs.restore', $personnel_du_bngrc->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('personnel_du_bngrc_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.personnel_du_bngrcs.perma_del', $personnel_du_bngrc->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('personnel_du_bngrc_view')
                                    <a href="{{ route('admin.personnel_du_bngrcs.show',[$personnel_du_bngrc->id]) }}" class="btn btn-xs btn-primary fa fa-eye">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('personnel_du_bngrc_edit')
                                    <a href="{{ route('admin.personnel_du_bngrcs.edit',[$personnel_du_bngrc->id]) }}" class="btn btn-xs btn-info fa fa-edit">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('personnel_du_bngrc_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.personnel_du_bngrcs.destroy', $personnel_du_bngrc->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger fa fa-edit')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="18">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('personnel_du_bngrc_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.personnel_du_bngrcs.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection