
<?php $__env->startSection('title', 'Add siswa'); ?>


<?php $__env->startSection('content'); ?>
    
    <form action="/siswa/insert" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
    <div class="content">
    <div class="row">
        <div class="col-sm-5">

            <div class="form-group <?php $__errorArgs = ['nisn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <label>NISN</label>
                <input class="form-control" value="<?php echo e(old('nisn')); ?>" name="nisn" type="text">
                    <div class="text-danger">
                    <?php $__errorArgs = ['nisn'];
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

            
            <div class="form-group <?php $__errorArgs = ['nama_siswa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <label>Nama Siswa</label>
                <input class="form-control" value="<?php echo e(old('nama_siswa')); ?>" name="nama_siswa" type="text">
                    <div class="text-danger">
                    <?php $__errorArgs = ['nama_siswa'];
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


            <div class="form-group <?php $__errorArgs = ['guru_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <label>Wali Kelas</label>
                <input class="form-control" value="<?php echo e(old('guru_id')); ?>" name="guru_id" type="text">
                    <div class="text-danger">
                        <?php $__errorArgs = ['guru_id'];
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
                <th><a href="/siswa" class="btn btn-success btn-sm">Back</a></th>
            </tr>

            </div>
    </div>
</div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Belajar-Laravel\resources\views/v_addsiswa.blade.php ENDPATH**/ ?>