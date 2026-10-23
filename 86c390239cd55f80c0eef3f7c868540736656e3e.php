<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk - Inventory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Produk</h2>
        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">+ Tambah Produk</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($index + 1); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->category->name ?? 'Tanpa Kategori'); ?></td>
                    <td><?php echo e($product->stock); ?></td>
                    <td>Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
                    <td>
                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="text-center">Belum ada data produk.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\inventory_app2\inventory-laravel\resources\views/products/index.blade.php ENDPATH**/ ?>