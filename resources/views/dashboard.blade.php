@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4 flex flex-col items-center">
        <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                <form action="{{ route('orders.index') }}" method="GET" class="w-full">
                    <button type="submit" class="flex items-center justify-center bg-pink-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-pink-600 transition-colors duration-300 ease-in-out w-full">
                        <i class="fas fa-eye mr-2"></i> View Orders
                    </button>
                </form>
                <form action="{{ route('orders.create') }}" method="GET" class="w-full">
                    <button type="submit" class="flex items-center justify-center bg-pink-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-pink-600 transition-colors duration-300 ease-in-out w-full">
                        <i class="fas fa-plus mr-2"></i> Create Order
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
