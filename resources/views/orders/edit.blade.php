@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Order</h1>
    <form action="{{ route('orders.update', $order) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="FullName" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" name="FullName" id="FullName" value="{{ $order->FullName }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="Email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="Email" id="Email" value="{{ $order->Email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="ShoeModel" class="block text-sm font-medium text-gray-700">Shoe Model</label>
            <input type="text" name="ShoeModel" id="ShoeModel" value="{{ $order->ShoeModel }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="ShoeSize" class="block text-sm font-medium text-gray-700">Shoe Size</label>
            <input type="text" name="ShoeSize" id="ShoeSize" value="{{ $order->ShoeSize }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="AttendedBy" class="block text-sm font-medium text-gray-700">Attended By</label>
            <input type="text" name="AttendedBy" id="AttendedBy" value="{{ $order->AttendedBy }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="PhoneNumber" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input type="text" name="PhoneNumber" id="PhoneNumber" value="{{ $order->PhoneNumber }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="Address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" name="Address" id="Address" value="{{ $order->Address }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div>
            <label for="address" class="block text-sm font-medium text-gray-700">Tipo de pedido</label>
            <select required name="orderType" id="orderType" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="Local">Local</option>
                <option value="Foraneo">Foraneo</option>
            </select>
        </div>
        <div class="mb-5">
            <label for="Status" class="block text-sm font-medium text-gray-700">Status</label>
            <input type="text" name="Status" id="Status" value="{{ $order->Status }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="flex justify-between">
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('orders.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back to Orders</a>
        </div>
    </form>
</div>

@include('components.modal', ['statusCode' => 204, 'header' => '¡Modificación Exitosa!'])

@endsection
