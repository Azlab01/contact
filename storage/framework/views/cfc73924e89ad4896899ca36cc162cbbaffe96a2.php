<div class="form-group container">    
    <?php if(isset($label)): ?>
        <label  class="col-sm-2 text-white col-form-label" for="label_<?php echo e($name); ?>"><?php echo e($label); ?></label>
    <?php endif; ?>
    <div class="col-sm-12">
       <?php echo e(Form::$type($name, null, ["class"=>($errors->has($name)) ? 'form-control is-invalid' : 'form-control', "id"=>"label_$name"])); ?>

    </div>
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback" style="display: block;"><?php echo e($errors->first($name)); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div><?php /**PATH C:\laragon\www\contact\resources\views/partials/input.blade.php ENDPATH**/ ?>