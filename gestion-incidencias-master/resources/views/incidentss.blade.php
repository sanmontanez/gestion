@extends('layouts.app')


@section('styles')

<head>
<style>
	.img-responsive {
    	margin: 0 auto;
	}


</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

@endsection

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading"><i class="far fa-window-restore"></i> Incidencias</div>
    <div class="panel-body text-center">
        <img src="/images/fondo.jpg" alt="Sistema de gestión de incidencias" class="img-responsive">
    </div>
</div>
@endsection