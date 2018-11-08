@extends('layouts.app')

@section('content')

<head>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<div class="panel panel-primary">
    <div class="panel-heading"><i class="fas fa-tachometer-alt"></i> Escritorio</div>

    <div class="panel-body">


    	
        
        @if (auth()->user()->is_support)
        <div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Incidencias asignadas a mí</h3>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Código</th>
							<th>Categoría</th>
							<th>Severidad</th>
							<th>Estado</th>
							<th>Fecha creación</th>
							<th>Título</th>
						</tr>
					</thead>
					<tbody id="dashboard_my_incidents">
						@foreach ($my_incidents as $incident)
							<tr>
								<td>
									<a href="/ver/{{ $incident->id }}">
										{{ $incident->id }}
									</a>
								</td>
								<td>{{ $incident->category_name }}</td>
								<td>{{ $incident->severity_full }}</td>
								<td>{{ $incident->state }}</td>
								<td>{{ $incident->created_at }}</td>
								<td>{{ $incident->title_short }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Incidencias sin asignar</h3>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Código</th>
							<th>Categoría</th>
							<th>Severidad</th>
							<th>Estado</th>
							<th>Fecha creación</th>
							<th>Título</th>
							<th>Opción</th>
						</tr>
					</thead>
					<tbody id="dashboard_pending_incidents">
						@foreach ($pending_incidents as $incident)
							<tr>
								<td>
									<a href="/ver/{{ $incident->id }}">
										{{ $incident->id }}
									</a>
								</td>
								<td>{{ $incident->category_name }}</td>
								<td>{{ $incident->severity_full }}</td>
								<td>{{ $incident->state }}</td>
								<td>{{ $incident->created_at }}</td>
								<td>{{ $incident->title_short }}</td>
								<td>
									<a href="" class="btn btn-primary btn-sm">
										Atender
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@endif

		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Incidencias reportadas por mí</h3>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Código</th>
							<th>Categoría</th>
							<th>Severidad</th>
							<th>Estado</th>
							<th>Fecha creación</th>
							<th>Título</th>
							<th>Responsable</th>
						</tr>
					</thead>
					<tbody id="dashboard_by_me">
						@foreach ($incidents_by_me as $incident)
							<tr>
								<td>
									<a href="/ver/{{ $incident->id }}">
										{{ $incident->id }}
									</a>
								</td>
								<td>{{ $incident->category_name }}</td>
								<td>{{ $incident->severity_full }}</td>
								<td>{{ $incident->state }}</td>
								<td>{{ $incident->created_at }}</td>
								<td>{{ $incident->title_short }}</td>
								<td>
									{{ $incident->support_id ? $incident->support->name : 'Sin asignar' }}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

    </div>
</div>
@endsection
