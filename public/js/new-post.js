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