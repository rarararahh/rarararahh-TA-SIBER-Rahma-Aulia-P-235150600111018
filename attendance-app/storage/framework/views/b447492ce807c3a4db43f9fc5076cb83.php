<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Detail Presensi</h1>

    <div class="mb-4">
        <h3>Kelas: <?php echo e($presensi->kelas->nama_kelas); ?></h3>
        <p>Tanggal: <?php echo e($presensi->tanggal); ?></p>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Siswa</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $presensi->detailPresensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($detail->murid->nama); ?></td>
                    <td><?php echo e(ucfirst($detail->status)); ?></td>
                    <td>
                        <form action="<?php echo e(route('detail-presensi.update', $detail->id_detail_presensi)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <select name="status" class="form-select" onchange="this.form.submit()">
                                <option value="hadir" <?php echo e($detail->status == 'hadir' ? 'selected' : ''); ?>>Hadir</option>
                                <option value="izin" <?php echo e($detail->status == 'izin' ? 'selected' : ''); ?>>Izin</option>
                                <option value="sakit" <?php echo e($detail->status == 'sakit' ? 'selected' : ''); ?>>Sakit</option>
                                <option value="alpha" <?php echo e($detail->status == 'alpha' ? 'selected' : ''); ?>>Alpha</option>
                            </select>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <a href="<?php echo e(route('presensi.index')); ?>" class="btn btn-secondary mt-3">Kembali</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project-akhir-tst\attendance-app\resources\views/presensi/show.blade.php ENDPATH**/ ?>