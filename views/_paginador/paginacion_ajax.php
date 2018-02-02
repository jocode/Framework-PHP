<br/>
<?php 
# Como la vista se incluye en la librería paginación, podemos usar los atributos que ella posee
if (isset($this->_paginacion)): ?>
<nav aria-label="Page navigation example">
	<ul class="pagination">
		<?php if($this->_paginacion['primero']): ?>
			<li class="page-item">
				<a class="page-link pagina" pagina="<?php echo $this->_paginacion['primero']; ?>" href="javascript:void(0);">Primero</a>
			</li>
		<?php else: ?>
			<li class="page-item disabled">
				<a class="page-link" href="javascript:void(0);">Primero</a>
			</li>
		<?php endif; ?>

		<?php if($this->_paginacion['anterior']): ?>
			<li class="page-item"><a class="page-link pagina" pagina="<?php echo $this->_paginacion['anterior']; ?>" href="javascript:void(0);">Anterior</a>
			</li>
		<?php else: ?>
			<li class="page-item disabled">
				<a class="page-link" href="javascript:void(0);">Anterior</a>
			</li>
		<?php endif; ?>

		<!-- Iterar el rango de páginas -->
		<?php for ($i = 0; $i < count($this->_paginacion['rango']); $i++ ): ?>
			<?php if ($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]): ?>
				<li class="page-item active"><a class="page-link" href="javascript:void(0);"><?php echo $this->_paginacion['rango'][$i]; ?></a></li>
			<?php else: ?>
				<li class="page-item"><a class="page-link pagina" pagina="<?php echo $this->_paginacion['rango'][$i]; ?>" href="javascript:void(0);"><?php echo $this->_paginacion['rango'][$i]; ?></a></li>
			<?php endif; ?>
		<?php endfor; ?>

		<?php if($this->_paginacion['siguiente']): ?>
			<li class="page-item"><a class="page-link pagina" pagina="<?php echo $this->_paginacion['siguiente']; ?>" href="javascript:void(0);">Siguiente</a></li>
		<?php else: ?>
			<li class="page-item disabled">
				<a class="page-link" href="javascript:void(0);">Siguiente</a>
			</li>
		<?php endif; ?>

		<?php if($this->_paginacion['ultimo']): ?>
			<li class="page-item"><a class="page-link pagina" pagina="<?php echo $this->_paginacion['ultimo']; ?>" href="javascript:void(0);">Último</a></li>
		<?php else: ?>
			<li class="page-item disabled">
				<a class="page-link" href="javascript:void(0);">Último</a>
			</li>
		<?php endif; ?>
	</ul>
</nav>
<?php endif; ?>
<br/>