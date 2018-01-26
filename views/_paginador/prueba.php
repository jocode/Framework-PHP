<br/>
<?php 
# Como la vista se incluye en la librería paginación, podemos usar los atributos que ella posee
if (isset($this->_paginacion)): ?>

<?php if($this->_paginacion['primero']): ?>
	<a href="<?php echo $link . $this->_paginacion['primero']; ?>">Primero</a>
<?php else: ?>
	Primero
<?php endif; ?>

<?php if($this->_paginacion['anterior']): ?>
	<a href="<?php echo $link . $this->_paginacion['anterior']; ?>">Anterior</a>
<?php else: ?>
	Anterior
<?php endif; ?>
<!-- Iterar el rango de páginas -->
<?php for ($i = 0; $i < count($this->_paginacion['rango']); $i++ ): ?>
	<?php if ($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]): ?>
		<?php echo $this->_paginacion['rango'][$i]; ?>
	<?php else: ?>
		<a href="<?php echo $link . $this->_paginacion['rango'][$i]; ?>"><?php echo $this->_paginacion['rango'][$i]; ?></a>
	<?php endif; ?>
<?php endfor; ?>

<?php if($this->_paginacion['siguiente']): ?>
	<a href="<?php echo $link . $this->_paginacion['siguiente']; ?>">Siguiente</a>
<?php else: ?>
	Siguiente
<?php endif; ?>

<?php if($this->_paginacion['ultimo']): ?>
	<a href="<?php echo $link . $this->_paginacion['ultimo']; ?>">Último</a>
<?php else: ?>
	Último
<?php endif; ?>

<?php endif; ?>
<br/>