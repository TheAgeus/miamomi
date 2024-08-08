@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <a href="{{ route('orders.index') }}" class="bg-blue-800 text-white px-2 py-1 rounded block text-center">View Orders</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
        <a href="{{ route('orders.create') }}" class="bg-blue-600 text-white px-2 py-1 rounded block text-center">Create Order</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
        <a href="{{ route('orders.export') }}" class="bg-green-800 text-white px-2 py-1 rounded block text-center">Download Excel</a>
    </div>
</div>
@endsection
