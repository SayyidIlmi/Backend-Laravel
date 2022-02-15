
<?php $__env->startSection('title', 'Siswa'); ?>

<?php $__env->startSection('content'); ?>
    
<?php if(session('pesan')): ?>
    <div></div>
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success ☻</h4>
                <?php echo e(session('pesan')); ?>.
              </div>
    <?php endif; ?>
<a href="/siswa/add" class="btn btn-primary btn-sm">Add</a><br>
<h3>
<div>
  Showing
  <?php echo e($siswa->firstItem()); ?>

  to
  <?php echo e($siswa->lastItem()); ?>

  of
  <?php echo e($siswa->total()); ?>

</div>
<div>
<?php echo e($siswa->links()); ?>

</div></h3>
    <table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>
              Wali Kelas
            </th>
            <th>Guru Id </th>
            <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($data->nisn); ?></td>
                <td><?php echo e($data->nama_siswa); ?></td>
                <td><a href="/guru/detail/<?php echo e($data->id_guru); ?>"><?php echo e($data->nama_guru); ?></a></td>
                <td>(<?php echo e($data->guru_id); ?>)</td>
                <td>
                    <a href="/siswa/detail/<?php echo e($data->id); ?>" class="btn btn-sm btn-success">Details</a>
                    <a href="/siswa/edit/<?php echo e($data->id); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo e($data->id); ?>">
                Delete
                    </button>
                </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
    </tbody>
</table>

<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal modal-danger fade" id="delete<?php echo e($data->id); ?>">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Menghapus data siswa : <?php echo e($data->nama_siswa); ?></h4>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
                <a href="/siswa/delete/<?php echo e($data->id); ?>" class="btn btn-outline">Yakin & Hapus</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          
          <!-- /.modal-dialog -->
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Belajar-Laravel\resources\views/v_siswa.blade.php ENDPATH**/ ?>