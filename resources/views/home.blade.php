@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $nbr_perso ?></h3>

              <p>Personnel du BNGRC</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('admin.personnel_du_bngrcs.index') }}" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $nbr_asset ?></h3>

              <p>Matériels</p>
            </div>
            <div class="icon">
              <i class="fa fa-cubes"></i>
            </div>
            <a href="{{ route('admin.assets.index') }}" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $nbr_stock ?></h3>

              <p>Stock</p>
            </div>
            <div class="icon">
              <i class="fa fa-cubes"></i>
            </div>
            <a href="{{ route('admin.liste_stocks.index') }}" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3><?= $nbr_reunion ?></h3>

                    <p>Réunion en attente</p>
                </div>
                <div class="icon">
                <i class="fa  fa-tasks"></i>
            </div>
            <a href="{{ route('admin.tasks.index') }}" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
    </div>
        




    <div class="row">
        <style>
            #map-canvas{
                height: 650px;
            }
        </style>
        <div class="col-md-6">
            <div class="panel panel-default box box-warning ">
                <div class="panel-heading ">
                    Localisation
                </div>
                <div class="panel-body"> 
                    <div id="map_canvas" style="width:auto;height:800px">
                        <?php 
                            echo $a;
                            echo $c;
                            echo $d;

                        ?>
                    </div>
                </div>
            </div>
        </div> 

        <div class="col-md-6" >
            <div class="panel panel-primary">
                <div class="box-header">
                    <h3 class="box-title">Statut missions <span class="badge bg-orange">Total: <?= $nbr_mission ?></span></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style=" overflow-y:auto; max-height: 300px;">
                    @if (count($progress_mission) > 0)
                    @foreach ($progress_mission as $mission)
                    <p><span class="label label-black bg-blue"><a href="missions/{{ $mission->id}}" style="color: white; ">{{ $mission->objet}}</a></span><span class="badge bg-blue">     {{ $mission->progression}}%</span><code style="color: blue;">{{ $mission->date_deb}}</code></p>
                    <div class="progress progress-sm active">
                        <div class="progress-bar progress-bar-default progress-bar-striped" role="progressbar" aria-valuenow= "" aria-valuemin="0" aria-valuemax="100" style="width: {{ $mission->progression}}%">
                            <span class="sr-only"></span>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="19">Aucune mission</td>
                    </tr>
                    @endif
                        
                                          
                </div>
                <!-- /.box-body -->
            </div>
          <!-- /.box -->
        </div>
            <!--  -->



        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Missions ajoutées récemment</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> @lang('quickadmin.missions.fields.objet')</th> 
                            <th> @lang('quickadmin.missions.fields.location')</th> 
                            <th> @lang('quickadmin.missions.fields.date-deb')</th> 
                            <th> @lang('quickadmin.missions.fields.date-fin')</th> 
                            <!-- <th> @lang('quickadmin.missions.fields.description')</th>  -->
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($missions as $mission)
                            <tr>
                               
                                <td style="background-color: #ffeecc; font-weight: bold;">{{ $mission->objet }} </td> 
                                <td>{{ $mission->location }} </td> 
                                <td>{{ $mission->date_deb }} </td> 
                                <td>{{ $mission->date_fin }} </td> 
                                <!-- <td>{{ $mission->description }} </td>  -->
                                <td>

                                    @can('mission_view')
                                    <a href="{{ route('admin.missions.show',[$mission->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan

                                    @can('mission_edit')
                                    <a href="{{ route('admin.missions.edit',[$mission->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan

                                    @can('mission_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.destroy', $mission->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                
</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
 </div>


        
        </div>
      <!-- /.row -->











      <div class="row">

      <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Tâches ajoutées récemment</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> @lang('quickadmin.tasks.fields.name')</th> 
                            <!-- <th> @lang('quickadmin.tasks.fields.description')</th>  -->
                            <th> @lang('quickadmin.tasks.fields.due-date')</th> 
                            <th> @lang('quickadmin.tasks.fields.heur')</th> 
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($tasks as $task)
                            <tr>
                               
                                <td style="background-color: #ffeecc; font-weight: bold;">{{ $task->name }} </td> 
                                <!-- <td>{{ $task->description }} </td>  -->
                                <td>{{ $task->due_date }} </td> 
                                <td>{{ $task->heur }} </td> 
                                <td>

                                    @can('task_view')
                                    <a href="{{ route('admin.tasks.show',[$task->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan

                                    @can('task_edit')
                                    <a href="{{ route('admin.tasks.edit',[$task->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan

                                    @can('task_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tasks.destroy', $task->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                
</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
 </div>
         <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">OM ajouté récemment</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> @lang('quickadmin.om.fields.destination')</th> 
                            <th> @lang('quickadmin.om.fields.itineraire')</th> 
                            <th> @lang('quickadmin.om.fields.depart')</th> 
                            <th> @lang('quickadmin.om.fields.duree')</th> 
                            <th> @lang('quickadmin.om.fields.remise-rapport')</th> 
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($oms as $om)
                            <tr>
                               
                                <td style="background-color: #ffeecc; font-weight: bold;">{{ $om->destination }} </td> 
                                <td>{{ $om->itineraire }} </td> 
                                <td>{{ $om->depart }} </td> 
                                <td>{{ $om->duree }} </td> 
                                <td>{{ $om->remise_rapport }} </td> 
                                <td>

                                    @can('om_view')
                                    <a href="{{ route('admin.oms.show',[$om->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan

                                    @can('om_edit')
                                    <a href="{{ route('admin.oms.edit',[$om->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan

                                    @can('om_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.oms.destroy', $om->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                
</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
 </div>

 

 


    </div>



  <!--  -->
@endsection
