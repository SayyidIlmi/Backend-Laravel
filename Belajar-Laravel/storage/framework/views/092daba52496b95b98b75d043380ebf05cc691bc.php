
<?php $__env->startSection('title', 'Add Guru'); ?>


<?php $__env->startSection('content'); ?>
    
    <form action="/guru/insert" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
    <div class="content">
    <div class="row">
        <div class="col-sm-5">

            <div class="form-group <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <label>NIP</label>
                <input class="form-control" value="<?php echo e(old('nip')); ?>" name="nip" type="text">
                    <div class="text-danger">
                    <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                   
                    </div>
            </div>

            
            <div class="form-group <?php $__errorArgs = ['nama_guru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <label>Nama Guru</label>
                <input class="form-control" value="<?php echo e(old('nama_guru')); ?>" name="nama_guru" type="text">
                    <div class="text-danger">
                    <?php $__errorArgs = ['nama_guru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                   
                      </div>
                </div>


            <div class="form-group <?php $__errorArgs = ['mapel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <label>Mata Pelajaran</label>
                <input class="form-control" value="<?php echo e(old('mapel')); ?>" name="mapel" type="text">
                    <div class="text-danger">
                        <?php $__errorArgs = ['mapel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                   
                     </div>
            </div>

            <div class="form-group">
               <button class="btn btn-primary btn-sm"> Save Data </button>
            </div>
            <tr>
                <th><a href="/guru" class="btn btn-success btn-sm">Back</a></th>
            </tr>

            </div>
    </div>
</div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Belajar-Laravel\resources\views/v_addguru.blade.php ENDPATH**/ ?>