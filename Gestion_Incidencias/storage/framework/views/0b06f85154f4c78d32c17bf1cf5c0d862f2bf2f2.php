<?php $__env->startSection('content'); ?>

<div class="panel panel-primary">
    <div class="panel-heading">Dashboard</div>

    <div class="panel-body">

        <?php if(count($errors) > 0): ?>
            <div class = "alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li> <?php echo e($error); ?> </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?> 

        <form action="" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="category_id">Categoría</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">General</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
            </div>
            <div class="form-group">
                <label for="severity">Severidad</label>
                <select name="severity" id="" class="form-control">
                    <option value="M">Menor</option>
                    <option value="N">Normal</option>
                    <option value="A">Alta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" class="form-control"  value="<?php echo e(old('title')); ?>">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="" class="form-control"><?php echo e(old('description')); ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Registrar incidencia</button>
            </div>
        </form>
    </div>
</div>
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>