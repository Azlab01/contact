<?php $__env->startSection('main'); ?>
<div class="container">
    <!-- contacts card -->
    <div class="card card-default" id="card_contacts" style="background-color: transparent;border:none;">
        <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
            <ul class="list-group pull-down" id="contact-list">
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <div class="row w-100">                            
                            <div class="col-12 col-sm-6 col-md-3 px-0">
                            <img src="<?php echo e(asset("storage/$contact->avatar")); ?>" alt="<?php echo e($contact->name); ?>" class="rounded-circle mx-auto d-block img-fluid">
                            </div>
                            <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">                          
                                
                                <label class="name lead"><?php echo e($contact->name); ?></label>
                                <br> 
                                <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5842 Hillcrest Rd"></span>
                                <span class="text-muted"><?php echo e($contact->address); ?></span>
                                <br>
                                <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="<?php echo e($contact->number); ?>"></span>
                                <span class="text-muted small"><?php echo e($contact->number); ?></span>
                                <br>                                
                                <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" class="">
                                    <span class="fa fa-edit  text-success pulse" title="online now"></span>
                                </a>&nbsp;&nbsp;&nbsp;                
                                <a href="<?php echo e(route('contacts.show', $contact->id)); ?>" class="">
                                    <span class="fa fa-eye  text-success pulse" title="online now"></span>
                                </a>&nbsp;&nbsp;&nbsp;
                                <?php echo e(Form::model($contact, ['method'=>'delete', 'route'=>['contacts.destroy', $contact->id]])); ?>

                                <button type="submit" class="btn btn-sm" style="display: inline;">
                                    <span class="fa fa-trash  text-danger  pulse" title="online now"></span>
                                </button>
                                <?php echo Form::close(); ?>

                            </div>  
                        </div>
                    </li><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <!--/contacts list-->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\contact\resources\views/index.blade.php ENDPATH**/ ?>