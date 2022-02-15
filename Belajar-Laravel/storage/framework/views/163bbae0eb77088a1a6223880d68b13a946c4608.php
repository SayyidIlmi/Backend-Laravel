
<?php $__env->startSection('title', 'Detail siswa'); ?>
<?php $__env->startSection('content'); ?>
   
<table class="table">
<tr>
    <th width="120px">NISN</th>
    <th width="30px">:</th>
    <th><?php echo e($siswa->nisn); ?></th>
</tr>

<tr>
    <th width="120px">Nama siswa</th>
    <th width="30px">:</th>
    <th><?php echo e($siswa->nama_siswa); ?></th>
</tr>
<tr>
    <th width="120px">Wali Kelas</th>
    <th width="30px">:</th>
    <td><a href="/guru/detail/<?php echo e($siswa->id_guru); ?>"><?php echo e($siswa->nama_guru); ?></a></td>
</tr>
<tr>
    <th width="120px">Id Guru</th>
    <th width="30px">:</th>
    <th>No ID Guru (<?php echo e($siswa->guru_id); ?>)</th>
</tr>
<tr>
    <th><a href="/siswa" class="btn btn-success btn-sm" onclick="history.back(-1)">Back</a></th>
</tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Belajar-Laravel\resources\views/v_detailsiswa.blade.php ENDPATH**/ ?>