<div class="panel panel-primary">
    <div class="panel-heading">Menú</div>

    <div class="panel-body">
        <div class="nav nav-pills nav-stacked">
			<?php if(auth()->check()): ?>		
				<li <?php if(request()->is('home')): ?> class="active" <?php endif; ?>><a href="/home">Dhasboard</a></li>
			
				<?php if(!auth()->user()->is_client): ?>
				<li <?php if(request()->is('ver')): ?> class="active" <?php endif; ?>><a href="/ver">Ver incidencias</a></li>
				<?php endif; ?>

				<li <?php if(request()->is('reportar')): ?> class="active" <?php endif; ?>><a href="/reportar">Reportar incidencia</a></li>
				
				<?php if(auth()->user()->is_admin): ?>
				<li role="presentation" class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				      Administración <span class="caret"></span>
				    </a>
				    <ul class="dropdown-menu">
				      <li><a href="/usuarios">Usuarios</a></li>
				      <li><a href="/proyectos">Proyectos</a></li>
				      <li><a href="/config">Configuración</a></li>
				    </ul>
				 </li>
				<?php endif; ?>
			
			<?php else: ?>
				<li><a href="#">Bienvenido</a></li>
				<li><a href="#">Instrucciones</a></li>
				<li><a href="#">Créditos</a></li>
			<?php endif; ?>
		</div>
    </div>
</div>
