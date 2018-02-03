<div class="card">
	<div class="card-body">
			<div  class="form-row align-items-center">
				<label class="col" for="nombre">Nombre</label>
				<div class="col-8">
					<input id="nombre" type="text" name="nombre" class="form-control">
				</div>
				<div class="col">
					<input id="btnEnviar" class="btn btn-success" type="submit" value="Enviar">
				</div>
			</div><br/>
			<div class="form-row d-flex justify-content-center">
				<div class="col-auto">
					<select class="form-control" name="pais" id="pais">
						<option value="0"> Seleccione un país </option>
						{foreach from=$paises item=pais}
						<option value="{$pais.id}">{$pais.pais}</option>
						{/foreach}
					</select>
				</div>
				<div class="col-auto">
					<select class="form-control" name="ciudad" id="ciudad">
						<option value="0"> Seleccione una ciudad </option>
					</select>
				</div>
			</div>
	</div>
</div>
<div id="lista_registros">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>País</th>
				<th>Ciudad</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$datos item=$dato}
			<tr>
				<td>{$dato.id}</td>
				<td>{$dato.nombre}</td>
				<td>{$dato.pais}</td>
				<td>{$dato.ciudad}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>
	{$paginacion|default:''}
</div>