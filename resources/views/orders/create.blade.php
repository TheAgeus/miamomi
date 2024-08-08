@extends('layouts.app')

@section('content')

    <!-- Store order from -->
    @include('components.order-form')

    <!-- Modal -->
    @include('components.modal', ['statusCode' => 201, 'header' => '¡Pedido Exitoso!'])
@endsection
