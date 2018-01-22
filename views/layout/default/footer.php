<div id="footer">
	Copyright &copy; <?php echo date('Y'); echo ' '.APP_COMPANY; ?>
</div>
</div>
<?php if (isset($_layoutParams['js']) && count($_layoutParams['js'])): ?>
	<?php for ($i = 0; $i < count($_layoutParams['js']); $i++): ?>
		<script type="text/javascript" src="<?php echo $_layoutParams['js'][$i]; ?>"></script>
	<?php endfor; ?>
<?php endif; ?>
</body>
</html>