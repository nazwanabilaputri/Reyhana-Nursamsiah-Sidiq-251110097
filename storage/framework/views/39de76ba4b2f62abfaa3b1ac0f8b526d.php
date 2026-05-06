<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Data Mahasiswa</h2>
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($mhs->nama); ?></td>
                <td><?php echo e($mhs->nim); ?></td>
                <td><?php echo e($mhs->jurusan); ?></td>
       <td class="d-flex justify-content-between align-items-center">
            <a href="<?php echo e(route('mahasiswa.edit', $mhs->id)); ?>" class="btn btn-success">Edit</a>
            
            <form action="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>" method="POST"
      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>
</html><?php /**PATH C:\Users\Nazwa Nabila\tugaslaravel12\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>