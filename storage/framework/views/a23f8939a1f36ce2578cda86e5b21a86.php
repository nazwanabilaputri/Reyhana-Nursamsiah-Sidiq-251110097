<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Mahasiswa</h1>
    <p>Ini adalah tampilan dari file <b>mahasiswa.blade.php</b> </p>

    <table border="1" cellpadding="10" style="background-color: white; width: 100%;">
        <tr style="background-color: #f2f2f2;">
            <th>No</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Nazwa Nabila Putri</td>
            <td>Teknik Informatika</td>
        </tr>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Nazwa Nabila\tugaslaravel12\resources\views/mahasiswa.blade.php ENDPATH**/ ?>