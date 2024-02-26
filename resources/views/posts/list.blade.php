@extends('layouts.basic')

@section('title', 'Entradas')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
@endsection

@section('content')
<div class="card mb-4">
	<div class="card-header">Buscar por:</div>
    <div class="card-body">
    	<form id="formFiltros">
            <div class="row filtros">
            	<div class="col-sm-3 pe-sm-5">
                	<div class="row">
                    	<label class="col-sm col-form-label col-form-label-sm" for="fTitulo">Título</label>
                    	<div class="col-sm-9">
                    		<input type="text" id="fTitulo" class="form-control form-control-sm" />
                    	</div>
                	</div>
            	</div>
            	<div class="col-sm-3 pe-sm-5">
                	<div class="row">
                    	<label class="col-sm col-form-label col-form-label-sm" for="fAutor">Autor</label>
                    	<div class="col-sm-9">
                    		<input type="text" id="fAutor" class="form-control form-control-sm" />
                    	</div>
                	</div>
            	</div>
            	<div class="col-sm-4">
                	<div class="row">
                    	<label class="col-sm col-form-label col-form-label-sm" for="fContenido">Contenido</label>
                    	<div class="col-sm-9">
                    		<input type="text" id="fContenido" class="form-control form-control-sm" />
                    	</div>
                	</div>
            	</div>
            	<div class="col-sm-2">
            		<div class="d-grid d-sm-flex gap-2 mt-3 mt-sm-0">
            			<button type="button" id="buscar" class="btn btn-warning btn-sm"><i class="fa-solid fa-magnifying-glass"></i></button>
            			<button type="button" id="limpiar" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-eraser"></i></button>
            		</div>
            	</div>
            </div>
        </form>
    </div>
</div>

<div class="table-responsive">
	<table id="entradas" class="table table-striped">
		<thead>
    		<tr>
    			<th>ID</th>
    			<th>Título</th>
    			<th>Autor</th>
    			<th>Fecha</th>
    			<th>Contenido</th>
    			<th></th>
    		</tr>
		</thead>
		<tbody>
    		@foreach ( $entradas as $entrada )
    		<tr>
    			<td>{{ $entrada->id }}</td>
    			<td>{{ $entrada->titulo }}</td>
    			<td>{{ $entrada->autor }}</td>
    			<td>{{ date('d/m/Y', strtotime($entrada->fecha)) }}</td>
    			<td>{{ Str::limit(strip_tags($entrada->contenido), 70) }}</td>
    			<td class="fs-5 detalle">
    				<i class="fa-regular fa-file-lines" role="button" title="Ver detalle" data-id="{{ $entrada->id }}"></i>
    			</td>
    		</tr>
    		@endforeach
		</tbody>
	</table>
</div>

<!-- Modal detalle -->
<div class="modal fade" id="detalleModal" tabindex="-1" aria-labelledby="detalleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="detalleModalLabel">Información completa</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="{{ asset('js/list-posts.js') }}" type="text/javascript"></script>
@endsection