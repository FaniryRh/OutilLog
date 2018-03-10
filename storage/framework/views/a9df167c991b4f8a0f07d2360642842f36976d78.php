<?php $__env->startSection('content'); ?>
<style>
        #map-canvas{
            height: 400px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
<!--     <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.missions.title'); ?></h3> -->
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.missions.store'], 'files' => true,]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading" style="width: auto; height: auto;">
            Nouvelle mission
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
                    <?php echo Form::label('materiel_id', trans('quickadmin.missions.fields.materiel-id').'', ['class' => 'control-label']); ?>

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
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('personnel_id', trans('quickadmin.missions.fields.personnel-id').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('personnel_id[]', $personnel_ids, old('personnel_id'), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('personnel_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('personnel_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                                
            </div>

            <div class="row" style="visibility: hidden; width: 1px; height: 1px;">
                <div class="" >
                    <?php echo Form::label('progression', trans('quickadmin.missions.fields.progression').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('progression', '0', ['class' => 'form-control', 'placeholder' => '', 'readonly']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('progression')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('progression')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                
            </div>
            <div class="row">

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


            
            <input type="text" id="searchmap" ></input>

            <div id="map-canvas"></div>

            <div class="row" style="visibility: hidden; width: 1px; height: 1px;">
                <div class="">
                    <?php echo Form::label('latitude', trans('quickadmin.missions.fields.latitude').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('latitude', old('latitude'), ['id' => 'lat','class' => 'form-control', 'placeholder' => '', 'readonly']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('latitude')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('latitude')); ?>

                        </p>
                    <?php endif; ?>
                </div>
                            <div class="" style="visibility: hidden; width: 1px; height: 1px;">
                    <?php echo Form::label('longitude', trans('quickadmin.missions.fields.longitude').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('longitude', old('longitude'), ['id' => 'lng','class' => 'form-control', 'placeholder' => '', 'readonly']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('longitude')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('longitude')); ?>

                        </p>
                    <?php endif; ?>
                </div>
                <div class="" style="visibility: hidden; width: 1px; height: 1px;">
                    <?php echo Form::label('multiple_piece_jointe', trans('quickadmin.missions.fields.multiple-piece-jointe').'', ['class' => 'control-label']); ?>

                    <?php echo Form::file('multiple_piece_jointe[]', [
                        'multiple',
                        'class' => 'form-control file-upload',
                        'data-url' => route('admin.media.upload'),
                        'data-bucket' => 'multiple_piece_jointe',
                        'data-filekey' => 'multiple_piece_jointe',
                        ]); ?>

                    <p class="" style="visibility: hidden; width: 1px; height: 1px;"></p>
                    <div class="">
                        <div class="">&nbsp;</div>
                        <div class=""></div>
                    </div>
                    <?php if($errors->has('multiple_piece_jointe')): ?>
                        <p class="">
                            <?php echo e($errors->first('multiple_piece_jointe')); ?>

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

    <script src="<?php echo e(asset('quickadmin/plugins/fileUpload/js/jquery.iframe-transport.js')); ?>"></script>
    <script src="<?php echo e(asset('quickadmin/plugins/fileUpload/js/jquery.fileupload.js')); ?>"></script>
    <script>
        $(function () {
            $('.file-upload').each(function () {
                var $this = $(this);
                var $parent = $(this).parent();

                $(this).fileupload({
                    dataType: 'json',
                    formData: {
                        model_name: 'Mission',
                        bucket: $this.data('bucket'),
                        file_key: $this.data('filekey'),
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    add: function (e, data) {
                        data.submit();
                    },
                    done: function (e, data) {
                        $.each(data.result.files, function (index, file) {
                            var $line = $($('<p/>', {class: "form-group"}).html(file.name + ' (' + file.size + ' KB)').appendTo($parent.find('.files-list')));
                            $line.append('<a href="#" class="btn btn-xs btn-danger remove-file">Remove</a>');
                            $line.append('<input type="hidden" name="' + $this.data('bucket') + '_id[]" value="' + file.id + '"/>');
                            if ($parent.find('.' + $this.data('bucket') + '-ids').val() != '') {
                                $parent.find('.' + $this.data('bucket') + '-ids').val($parent.find('.' + $this.data('bucket') + '-ids').val() + ',');
                            }
                            $parent.find('.' + $this.data('bucket') + '-ids').val($parent.find('.' + $this.data('bucket') + '-ids').val() + file.id);
                        });
                        $parent.find('.progress-bar').hide().css(
                            'width',
                            '0%'
                        );
                    }
                }).on('fileuploadprogressall', function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $parent.find('.progress-bar').show().css(
                        'width',
                        progress + '%'
                    );
                });
            });
            $(document).on('click', '.remove-file', function () {
                var $parent = $(this).parent();
                $parent.remove();
                return false;
            });
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