<?php $__env->startSection('content'); ?>

<style>
        #map-canvas{
            height: 400px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.inventaire.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.inventaires.store']]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_create'); ?>
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('date', trans('quickadmin.inventaire.fields.date').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('date', old('date'), ['class' => 'form-control datetime', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('date')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('date')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('mission_id', trans('quickadmin.inventaire.fields.mission').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('mission_id', $missions, old('mission_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('mission_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('mission_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('stock_id', trans('quickadmin.inventaire.fields.stock').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('stock_id', $stocks, old('stock_id'), ['class' => 'form-control select2']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('stock_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('stock_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('quantite', trans('quickadmin.inventaire.fields.quantite').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('quantite', old('quantite'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('quantite')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('quantite')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('unite', trans('quickadmin.inventaire.fields.unite').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('unite', old('unite'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('unite')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('unite')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                 <div class="col-xs-6 form-group">
                    <?php echo Form::label('materiel_id', trans('quickadmin.inventaire.fields.materiel-id').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('materiel_id[]', $materiel_ids, old('materiel_id'), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('materiel_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('materiel_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('responsable_id', trans('quickadmin.inventaire.fields.responsable-id').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('responsable_id[]', $responsable_ids, old('responsable_id'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('responsable_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('responsable_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('destination', trans('quickadmin.inventaire.fields.destination').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('destination', old('destination'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('destination')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('destination')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <input type="text" id="searchmap" ></input>

            <div id="map-canvas"></div>

            <div class="row" style="display: none;">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('latitude', trans('quickadmin.inventaire.fields.latitude').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('latitude', old('latitude'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('latitude')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('latitude')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-12 form-group">
                    <?php echo Form::label('longitude', trans('quickadmin.inventaire.fields.longitude').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('longitude', old('longitude'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('longitude')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('longitude')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>

    <?php echo Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    ##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##
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
                lat: -18.915647,
                lng:  47.540394
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