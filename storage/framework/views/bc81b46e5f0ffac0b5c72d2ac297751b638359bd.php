<?php $__env->startSection('content'); ?>

<style>
        #map-canvas{
            height: 250px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <!-- <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.title'); ?></h3> -->
    
    <?php echo Form::model($personnel_du_bngrc, ['method' => 'PUT', 'route' => ['admin.personnel_du_bngrcs.update', $personnel_du_bngrc->id], 'files' => true,]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?> -->Modification
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php if($personnel_du_bngrc->photo): ?>
                        <a href="<?php echo e(asset(env('UPLOAD_PATH').'/'.$personnel_du_bngrc->photo)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/'.$personnel_du_bngrc->photo)); ?>"></a>
                    <?php endif; ?>
                    <?php echo Form::label('photo', trans('quickadmin.personnel-du-bngrc.fields.photo').'', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('photo', old('photo')); ?>

                    <?php echo Form::file('photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                    <?php echo Form::hidden('photo_max_size', 5); ?>

                    <?php echo Form::hidden('photo_max_width', 4096); ?>

                    <?php echo Form::hidden('photo_max_height', 4096); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('photo')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('photo')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('tel', trans('quickadmin.personnel-du-bngrc.fields.tel').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('tel')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('tel')); ?>

                        </p>
                    <?php endif; ?>
                </div>


            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('nom_prenom', trans('quickadmin.personnel-du-bngrc.fields.nom-prenom').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('nom_prenom', old('nom_prenom'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('nom_prenom')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('nom_prenom')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                


                <div class="col-xs-6 form-group">
                    <?php echo Form::label('tel2', trans('quickadmin.personnel-du-bngrc.fields.tel2').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('tel2', old('tel2'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('tel2')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('tel2')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('fonction', trans('quickadmin.personnel-du-bngrc.fields.fonction').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('fonction', old('fonction'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('fonction')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('fonction')); ?>

                        </p>
                    <?php endif; ?>
                </div>



                <div class="col-xs-6 form-group">
                    <?php echo Form::label('email', trans('quickadmin.personnel-du-bngrc.fields.email').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('email')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('email')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('adresse', trans('quickadmin.personnel-du-bngrc.fields.adresse').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('adresse', old('adresse'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('adresse')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('adresse')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('competence_formation', trans('quickadmin.personnel-du-bngrc.fields.competence-formation').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('competence_formation[]', $competence_formations, old('competence_formation') ? old('competence_formation') : $personnel_du_bngrc->competence_formation->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('competence_formation')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('competence_formation')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('capacites', trans('quickadmin.personnel-du-bngrc.fields.capacites').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('capacites[]', $capacites, old('capacites') ? old('capacites') : $personnel_du_bngrc->capacites->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('capacites')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('capacites')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('date_embauche', 'Date d\'embauche', ['class' => 'control-label']); ?>

                    <?php echo Form::text('date_embauche', old('date_embauche'), ['class' => 'form-control date', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('date_embauche')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('date_embauche')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('statut_id', trans('quickadmin.personnel-du-bngrc.fields.statut').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('statut_id', $statuts, old('statut_id'), ['class' => 'form-control select2']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('statut_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('statut_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <input type="text" id="searchmap" ></input>

            <div class="col-xs-12 box box-warning" id="map-canvas"></div>

            <div class="row" style="display: none;">

                <div class="col-xs-12 form-group">
                    <?php echo Form::label('latitude', trans('quickadmin.personnel-du-bngrc.fields.latitude').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('latitude', old('latitude'), ['id' => 'lat','class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('latitude')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('latitude')); ?>

                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('longitude', trans('quickadmin.personnel-du-bngrc.fields.longitude').'', ['class' => 'control-label']); ?>

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
    </div>

    <a href="<?php echo e(route('admin.personnel_du_bngrcs.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>

    <?php echo Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    ##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "<?php echo e(config('app.date_format_js')); ?>"
        });
    </script>

    <script>



        function icon_img(){
return "<?php echo e(url('/icon/placeholder.png')); ?>";
        }

        var iconBase = icon_img();
        
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: <?php echo e($personnel_du_bngrc->latitude); ?>,
                lng:  <?php echo e($personnel_du_bngrc->longitude); ?>

            },
            zoom:6

        });

        var marker = new google.maps.Marker({
            position:{
                lat: <?php echo e($personnel_du_bngrc->latitude); ?>,
                lng:  <?php echo e($personnel_du_bngrc->longitude); ?>

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