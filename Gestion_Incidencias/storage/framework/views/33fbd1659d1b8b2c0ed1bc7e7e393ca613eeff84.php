<?php $__env->startSection('content'); ?>

<div class="panel panel-primary">
    <div class="panel-heading">Editar Usuario</div>

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
                <input type="text" name="email" class="form-control" readonly value="<?php echo e(old('email',$user->email)); ?>">
            </div>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" name="name" class="form-control"  value="<?php echo e(old('name',$user->name)); ?>">
            </div>
            <div class="form-group">
                <label for="password">Contraseña <em>Ingresar solo si desea modificar</em></label>
                <input type="text" name="password" class="form-control"  value="<?php echo e(old('password')); ?>">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Guardar Usuario</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Proyecto</th>
                    <th>Nivel</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Proyecto A</td>
                    <td>N1</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a href="" class="btn btn-sm btn-danger" title="Dar de baja">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>