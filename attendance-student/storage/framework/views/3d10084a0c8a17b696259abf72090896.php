<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Login</h1>
    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <select name="kelas" id="kelas" class="form-select" required>
            <option value="">Pilih Kelas</option>
            <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($k->id); ?>"><?php echo e($k->nama_kelas); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" required>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
    
        <?php if($errors->any()): ?>
            <div class="alert alert-danger mt-3">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project-akhir-tst\attendance-student\resources\views/auth/login.blade.php ENDPATH**/ ?>