function ShowDetails(item) {
	const modal = new bootstrap.Modal(document.getElementById('detalleModal'));
	const id = item.children().data('id');

	fetch("/post/details/"+id, {
		method: "GET",
	}).then(response => {
		return response.json();
	}).then(data => {
		if ( data.status ) {
			const resp = data.response;
			let body = `
				<h3 class="h5">${resp.titulo}</h3>
				<h4 class="h6 mb-1"><em>${resp.autor}</em></h4>
				<p class="mt-0"><small>${resp.fecha}</small></p>
				${resp.contenido}`;
			document.querySelector('#detalleModal .modal-body').innerHTML = body;
			modal.show();
		}
	});
}

function ClearSearchForm(table) {
	const btn = document.getElementById('limpiar');

	btn.addEventListener('click', function(e) {
		e.preventDefault();

		document.getElementById("formFiltros").reset();
		$('#buscar').trigger('click');
	});
}

function Search(table) {
	const btn = document.getElementById('buscar');
	btn.addEventListener("click", function(e) {
		e.preventDefault();
		e.stopPropagation();
		
		let titulo = document.getElementById('fTitulo').value;
		let autor = document.getElementById('fAutor').value;
		let contenido = document.getElementById('fContenido').value;
		
		table.columns(1).search(titulo, true);
		table.columns(2).search(autor, true);
		table.columns(4).search(contenido, true).draw();
	});
}

$(function() {
	let table = $('#entradas').DataTable({
		"bLengthChange": false,
	    "language": {
	    	"zeroRecords": "No se encontraron entradas",
	    	"info": "Mostrando _START_ al _END_ de _TOTAL_ registros"
	    },
	    "fnDrawCallback": function(oSettings) {
			// Muestra u oculta paginación
			if (oSettings._iDisplayLength >= oSettings.fnRecordsDisplay()) {
				$(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
			} else {
				$(oSettings.nTableWrapper).find('.dataTables_paginate').show();
			}
	    }
	});

	ClearSearchForm(table);
	Search(table);

	$('#entradas').on('click', '.detalle', function() {
		ShowDetails($(this));
	});
});