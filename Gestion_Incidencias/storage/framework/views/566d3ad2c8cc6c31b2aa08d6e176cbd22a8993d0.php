<?php $__env->startSection('content'); ?>

<div class="panel panel-primary">
    <div class="panel-heading">Usuarios</div>

    <div class="panel-body">

        <?php if(session('notification')): ?>
            <div class = "alert alert-success">
                <?php echo e(session('notification')); ?>

            </div>
        <?php endif; ?> 

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
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control"  value="<?php echo e(old('email')); ?>">
            </div>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control"  value="<?php echo e(old('name')); ?>">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="text" name="password" class="form-control"  value="<?php echo e(old('password',str_random(8))); ?>">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Registrar Usuario</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>E-mail</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td>
                        <a href="/usuarios/<?php echo e($user->id); ?>" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a href="/usuarios/<?php echo e($user->id); ?>/eliminar" class="btn btn-sm btn-danger" title="Dar de baja">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
</div>
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>