<?php $__env->startSection('content'); ?>
    <h1>Daftar Presensi</h1>
        <?php if(isset($murid['nama'])): ?>
            <p>Login berhasil. Nama murid: <?php echo e($murid['nama']); ?></p>
        <?php else: ?>
            <p>Selamat datang!</p>
        <?php endif; ?>

        
    <table class="table table-bordered">
        <thead style="text-align: center">
            <tr>
                <th>ID</th>
                <th>Kelas</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($presensi) && is_array($presensi)): ?>
                <?php $__currentLoopData = $presensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($p['id_presensi'] ?? 'Tidak Ada'); ?></td>
                        <td><?php echo e($p['kelas']['nama_kelas'] ?? 'Tidak Ada'); ?></td>
                        <td><?php echo e($p['tanggal'] ?? 'Tidak Ada'); ?></td>
                        <td>
                            <a href="<?php echo e(isset($p['id_presensi']) ? route('presensi.show', $p['id_presensi']) : '#'); ?>">Lihat Detail</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align: center">Tidak ada data presensi.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project-akhir-tst\attendance-student\resources\views/presensi/index.blade.php ENDPATH**/ ?>