@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center p-4">
    <h1 class="text-2xl font-bold mb-4">Orders</h1>
    <p class="mb-4 text-lg">Total Orders: {{ $totalOrders }}</p>
    <div class="flex flex-wrap gap-4 justify-center">
        @foreach ($orders as $order)
            <div class="bg-white p-4 rounded shadow flex-1 flex-col w-full max-w-sm flex-grow">
                <div class="flex-1">
                    <h2 class="text-xl font-bold">{{ $order->ProductName }}</h2>
                    <p><span class="font-semibold">Order ID:</span> {{ $order->id }}</p>
                    <p><span class="font-semibold">Full Name:</span> {{ $order->FullName }}</p>
                    <p><span class="font-semibold">Email:</span> {{ $order->Email }}</p>
                    <p><span class="font-semibold">Attended By:</span> {{ $order->AttendedBy }}</p>
                    <p><span class="font-semibold">Phone Number:</span> {{ $order->PhoneNumber }}</p>
                    <p><span class="font-semibold">Address:</span> {{ $order->Address }}</p>
                    <p><span class="font-semibold">Status:</span> {{ $order->Status }}</p>
                    <p><span class="font-semibold">Creted Date:</span> {{ $order->created_at }}</p>
                    <div class="mt-4 flex gap-2">
                        <a href="{{ route('orders.edit', $order) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <form action="{{ route('orders.destroy', $order) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $orders->links() }}
    </div>
</div>

@include('components.modal', ['statusCode' => 204, 'header' => '¡Borrado Exitoso!'])

@endsection
