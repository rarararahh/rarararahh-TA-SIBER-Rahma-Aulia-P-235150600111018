<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Presensi</h1>
    <a href="<?php echo e(route('presensi.create')); ?>" class="btn btn-primary mb-3">Tambah Presensi</a>

    <table class="table table-bordered">
        <thead style="text-align: center">
            <tr>
                <th>#</th>
                <th>Kelas</th>
                <th>Tanggal</th>
                <th>Jumlah Siswa</th>
                <th>Detail</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $presensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($data->kelas->nama_kelas); ?></td>
                    <td><?php echo e($data->tanggal); ?></td>
                    <td><?php echo e($data->detailPresensi->count()); ?></td>
                    <td>
                        <a href="<?php echo e(route('presensi.show', $data->id_presensi)); ?>" class="btn btn-info btn-sm">Lihat Detail</a>
                    </td>
                    <td>
                        <a href="<?php echo e(route('presensi.edit', $data->id_presensi)); ?>" class="btn btn-outline-info btn-sm">Edit</a>
                        <a href="<?php echo e(route('presensi.delete', $data->id_presensi)); ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                    </td>
                        
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project-akhir-tst\attendance-app\resources\views/presensi/index.blade.php ENDPATH**/ ?>