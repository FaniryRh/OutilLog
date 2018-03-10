<?php $__env->startSection('content'); ?>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <h3 class="page-title">Calendrier</h3>

    <div id='calendar'></div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    ##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>





        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events : [
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($event->due_date): ?>
                    {
                        title : '<?php echo e(isset($event->mission->objet) ? $event->mission->objet : $event->type->nom); ?> : <?php echo e($event->name); ?>',
                        start : '<?php echo e(\Carbon\Carbon::createFromFormat(config('app.date_format'),$event->due_date)->format('Y-m-d')); ?>',
                        url : '<?php echo e(url('admin/tasks').'/'.$event->id.''); ?>',

                        <?php if($event->mission): ?>
                        backgroundColor: '#f56954', //red
                        borderColor    : '#000000', //red
                        Color    : '#000000',
                        
                        <?php else: ?>   <?php if($event->type->nom == 'Autre'): ?>
                                backgroundColor: '#008200', //red
                                borderColor    : '#000000', //red
                                Color    : '#000000',
                                <?php endif; ?>


                        <?php endif; ?>
                        borderColor    : '#000000'


                    },
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            })
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>