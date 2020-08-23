<?php $__env->startSection('main'); ?>
<?php echo e(Form::model($contact, ['method'=>'put', 'files' => true, 'route'=>['contacts.update', $contact->id]])); ?>

    <?php echo $__env->make('partials.input', ["type"=>"text", 
                                        'name'=>"name",
                                        'label'=>"Name"
                                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.input', ["type"=>"text", 
                                        'name'=>"number",
                                        'label'=>"Number"
                                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.input', ["type"=>"text", 
                                        'name'=>"address",
                                        'label'=>"Address"
                                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.input', ["type"=>"file", 
                                        'name'=>"avatar",
                                        'label'=>"Avatar"
                                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="form-group row justify-content-center">
    <button type="submit" class="form-control col-4" >Modifier</button>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\contact\resources\views/edit.blade.php ENDPATH**/ ?>