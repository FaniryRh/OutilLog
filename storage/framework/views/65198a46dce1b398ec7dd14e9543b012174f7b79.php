<?php $__env->startSection('content'); ?>

<style>
        #map-canvas{

            height: 400px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.missions.title'); ?></h3>
    
    <?php echo Form::model($mission, ['method' => 'PUT', 'route' => ['admin.missions.update', $mission->id], 'files' => true,]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('objet', trans('quickadmin.missions.fields.objet').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('objet', old('objet'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('objet')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('objet')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('location', trans('quickadmin.missions.fields.location').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('location', old('location'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('location')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('location')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('date_deb', trans('quickadmin.missions.fields.date-deb').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('date_deb', old('date_deb'), ['class' => 'form-control datetime', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('date_deb')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('date_deb')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('date_fin', trans('quickadmin.missions.fields.date-fin').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('date_fin', old('date_fin'), ['class' => 'form-control datetime', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('date_fin')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('date_fin')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('piece_jointe', trans('quickadmin.missions.fields.piece-jointe').'', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('piece_jointe', old('piece_jointe')); ?>

                    <?php if($mission->piece_jointe): ?>
                        <a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $mission->piece_jointe)); ?>" target="_blank">Download file</a>
                    <?php endif; ?>
                    <?php echo Form::file('piece_jointe', ['class' => 'form-control']); ?>

                    <?php echo Form::hidden('piece_jointe_max_size', 10); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('piece_jointe')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('piece_jointe')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                
                <div class="col-xs-6 form-group">
                    <?php if($mission->itineraire): ?>
                        <a href="<?php echo e(asset(env('UPLOAD_PATH').'/'.$mission->itineraire)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/'.$mission->itineraire)); ?>"></a>
                    <?php endif; ?>
                    <?php echo Form::label('itineraire', trans('quickadmin.missions.fields.itineraire').'', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('itineraire', old('itineraire')); ?>

                    <?php echo Form::file('itineraire', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                    <?php echo Form::hidden('itineraire_max_size', 10); ?>

                    <?php echo Form::hidden('itineraire_max_width', 4096); ?>

                    <?php echo Form::hidden('itineraire_max_height', 4096); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('itineraire')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('itineraire')); ?>

                        </p>
                    <?php endif; ?>
                </div>

            </div>

            <div class="row">
                

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('personnel_id', trans('quickadmin.missions.fields.personnel-id').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('personnel_id[]', $personnel_ids, old('personnel_id') ? old('personnel_id') : $mission->personnel_id->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('personnel_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('personnel_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('progression', trans('quickadmin.missions.fields.progression').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('progression', old('progression'), ['class' => 'form-control', 'placeholder' => '', 'readonly']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('progression')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('progression')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('stat_id', trans('quickadmin.missions.fields.stat').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('stat_id', $stats, old('stat_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('stat_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('stat_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-12 form-group">
                    <?php echo Form::label('description', trans('quickadmin.missions.fields.description').'', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('description', old('description'), ['class' => 'form-control editor', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('description')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('description')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row" style="display: none;">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('latitude', trans('quickadmin.missions.fields.latitude').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('latitude', old('latitude'), [ 'id' => 'lat','class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('latitude')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('latitude')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('longitude', trans('quickadmin.missions.fields.longitude').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('longitude', old('longitude'), ['id' => 'lng','class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('longitude')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('longitude')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
                        
        </div>

        <input type="text" id="searchmap" ></input>

            <div id="map-canvas" ></div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Sortie
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.unite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.reponsable-sortie'); ?></th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="sortie">
                    <?php $__empty_1 = true; $__currentLoopData = old('sorties', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php echo $__env->make('admin.missions.sorties_row', [
                            'index' => $index
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php $__currentLoopData = $mission->sortie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('admin.missions.sorties_row', [
                                'index' => 'id-' . $item->id,
                                'field' => $item
                            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new"><?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?></a>
        </div>
    </div>

    <a href="<?php echo e(route('admin.missions.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>

    <?php echo Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    ##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##

    <script type="text/html" id="sortie-template">
        <?php echo $__env->make('admin.missions.sorties_row', [
            'index' => '_INDEX_'
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </script>
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=<?php echo e(csrf_token()); ?>',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=<?php echo e(csrf_token()); ?>'
            });
        });
    </script>
    <script src="<?php echo e(url('quickadmin/js')); ?>/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "<?php echo e(config('app.date_format_js')); ?>",
            timeFormat: "HH:mm:ss"
        });
    </script>

            <script>
        $('.add-new').click(function () {
            var tableBody = $(this).parent().find('tbody');
            var template = $('#' + tableBody.attr('id') + '-template').html();
            var lastIndex = parseInt(tableBody.find('tr').last().data('index'));
            if (isNaN(lastIndex)) {
                lastIndex = 0;
            }
            tableBody.append(template.replace(/_INDEX_/g, lastIndex + 1));
            return false;
        });
        $(document).on('click', '.remove', function () {
            var row = $(this).parentsUntil('tr').parent();
            row.remove();
            return false;
        });
        </script>

        <script>
        
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: -18.915647,
                lng:  47.540394
            },
            zoom:6

        });

         function icon_img(){
            return "<?php echo e(url('/icon/placeholder.png')); ?>";

        }

        var iconBase = icon_img();

        var marker = new google.maps.Marker({
            position:{
                lat: <?php echo e($mission->latitude); ?>,
                lng:  <?php echo e($mission->longitude); ?>

            },
            map: map,
            draggable:true,
            icon: iconBase

        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

        google.maps.event.addListener(searchBox,'places_changed',function(){
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;

            for(i=0; place = places[i]; i++){
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }

            map.fitBounds(bounds);
            map.setZoom(10);


        });

        google.maps.event.addListener(marker, 'position_changed',function(){
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#lat').val(lat);
            $('#lng').val(lng);



        })


    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>