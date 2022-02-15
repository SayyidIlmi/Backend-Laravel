<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="<?php echo e(request()->is('guru') ? 'active' : ''); ?>"><a href="/guru"><i class="fa fa-book"></i> <span>Guru</span></a></li>
        <li class="<?php echo e(request()->is('siswa') ? 'active' : ''); ?>"><a href="/siswa"><i class="fa fa-book"></i> <span>Siswa</span></a></li>        
      </ul><?php /**PATH C:\Belajar-Laravel\resources\views/layout/v_nav.blade.php ENDPATH**/ ?>