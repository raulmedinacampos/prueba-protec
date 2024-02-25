@extends('layouts.basic')

@section('title', 'Nueva entrada')

@section('content')
<h1 class="h3">Alta de entradas</h1>
<form id="formAltaEntrada">
	@csrf
	<div class="row mb-3">
		<div class="col-sm-4">
			<label class="form-label">Título</label>
			<input type="text" id="titulo" name="titulo" required="required" class="form-control" />
			<div class="invalid-feedback">El título es obligatorio</div>
		</div>
		<div class="col-sm-4">
			<label class="form-label">Autor</label>
			<input type="text" id="autor" name="autor" required="required" class="form-control" />
			<div class="invalid-feedback">El autor es obligatorio</div>
		</div>
		<div class="col-sm-4">
			<label class="form-label">Fecha de publicación</label>
			<input type="date" id="fecha" name="fecha" required="required" class="form-control" />
			<div class="invalid-feedback">La fecha es obligatoria</div>
		</div>
	</div>
	
	<div class="row mb-3">
		<div class="col-sm-8">
			<label class="form-label">Contenido</label>
			<textarea name="contenido" id="contenido" required="required"></textarea>
			<div class="invalid-feedback">El contenido es obligatorio</div>
		</div>
		<div class="col-sm-4 pt-sm-4">
			<div class="form-check form-switch pt-sm-1">
				<input class="form-check-input" type="checkbox" role="switch" id="activo" name="activo" checked="checked" value="1" />
				<label class="form-check-label" for="activo">Entrada activa</label>
			</div>
		</div>
	</div>
	
	<div class="row mb-3">
		<div class="col-sm-4">
			<button type="button" id="btnGuardar" class="btn btn-primary">Guardar entrada</button>
		</div>
	</div>
</form>

<!-- Modal mensaje -->
<div class="modal fade" id="modalMensaje" tabindex="-1" aria-labelledby="modalMensajeLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
	<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
	<script type="text/javascript">
    	let editor;
		const btnGuardar = document.getElementById('btnGuardar');
		const modal = new bootstrap.Modal(document.getElementById('modalMensaje'));
		
		ClassicEditor
            .create(document.querySelector('#contenido'))
            .then( newEditor => {
                editor = newEditor;
                editor.model.document.on('change:data', () => {
        			document.getElementById("contenido").value = editor.getData();
        		});
            })
            .catch(error => {
                console.error(error);
            }
		);
        
		btnGuardar.addEventListener("click", function(e) {
			e.preventDefault();
			const validateItems = document.querySelectorAll('#formAltaEntrada');
			
			Array.from(validateItems).forEach(item => {
				if (!item.checkValidity()) {
					event.preventDefault();
					event.stopPropagation();
				} else {
					const form = document.getElementById("formAltaEntrada");
					const formData = new FormData(form);
					formData.append('contenido', editor.getData());

					fetch("/post/save", {
						method: "POST",
						body: formData
					}).then(response => {
						return response.json();
					}).then(data => {
						if ( data.status ) {
							document.querySelector('#modalMensaje .modal-body').innerHTML = data.mensaje;
							modal.show();

							document.getElementById('modalMensaje').addEventListener('hidden.bs.modal', event => {
								window.location.href = "/posts";
							});															
						}							
					});
				}

				item.classList.add('was-validated');
			});
        });
    </script>
@endsection