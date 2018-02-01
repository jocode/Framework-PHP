<br/>
<?php 
# Como la vista se incluye en la librería paginación, podemos usar los atributos que ella posee
if (isset($this->_paginacion)): ?>
<nav aria-label="Page navigation example">
	<ul class="pagination">
		<?php if($this->_paginacion['primero']): ?>
			<li class="page-item">
				<a class="page-link" href="<?php echo $link . $this->_paginacion['primero']; ?>">Primero</a>
			</li>
		<?php else: ?>
			<li class="page-item disabled">
				<a class="page-link" href="#">Primero</a>
			</li>
		<?php endif; ?>

		<?php if($this->_paginacion['anterior']): ?>
			<li class="page-item"><a class="page-link" href="<?php echo $link . $this->_paginacion['anterior']; ?>">Anterior</a>
			</li>
		<?php else: ?>
			<li class="page-item disabled">
				<a class="page-link" href="#">Anterior</a>
			</li>
		<?php endif; ?>

		<!-- Iterar el rango de páginas -->
		<?php for ($i = 0; $i < count($this->_paginacion['rango']); $i++ ): ?>
			<?php if ($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]): ?>
				<li class="page-item active"><a class="page-link" href="#"><?php echo $this->_paginacion['rango'][$i]; ?></a></li>
			<?php else: ?>
				<li class="page-item"><a class="page-link" href="<?php echo $link . $this->_paginacion['rango'][$i]; ?>"><?php echo $this->_paginacion['rango'][$i]; ?></a></li>
			<?php endif; ?>
		<?php endfor; ?>

		<?php if($this->_paginacion['siguiente']): ?>
			<li class="page-item"><a class="page-link" href="<?php echo $link . $this->_paginacion['siguiente']; ?>">Siguiente</a></li>
		<?php else: ?>
			<li class="page-item disabled">
				<a class="page-link" href="#">Siguiente</a>
			</li>
		<?php endif; ?>

		<?php if($this->_paginacion['ultimo']): ?>
			<li class="page-item"><a class="page-link" href="<?php echo $link . $this->_paginacion['ultimo']; ?>">Último</a></li>
		<?php else: ?>
			<li class="page-item disabled">
				<a class="page-link" href="#">Último</a>
			</li>
		<?php endif; ?>
	</ul>
</nav>
<?php endif; ?>
<br/>