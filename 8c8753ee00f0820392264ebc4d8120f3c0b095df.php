<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Tambah Produk Baru</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('products.store')); ?>" method="POST" class="mt-3">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="category_id" class="form-control">
                <option value="">-- Pilih Kategori --</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stock" class="form-control" value="<?php echo e(old('stock')); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" step="0.01" name="price" class="form-control" value="<?php echo e(old('price')); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Produk</button>
        <a href="<?php echo e(route('products.index')); ?>" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\inventory_app2\inventory-laravel\resources\views/products/create.blade.php ENDPATH**/ ?>