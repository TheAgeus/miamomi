@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center p-4">
    <h1 class="text-2xl font-bold mb-4">Orders</h1>
    <p class="mb-4 text-lg">Total Orders: {{ $totalOrders }}</p>

    <!-- Filter Form -->
    <form action="{{ route('orders.index') }}" method="GET" class="flex flex-wrap gap-4 justify-center mb-4">
        <input type="number" name="year" placeholder="Year" value="{{ request('year') }}" class="border p-2 rounded" min="1900" max="{{ date('Y') }}">
        <input type="number" name="month" placeholder="Month" value="{{ request('month') }}" class="border p-2 rounded" min="1" max="12">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Filter</button>
        <!-- Download Button -->
        <a href="{{ route('orders.export') }}?{{ http_build_query(request()->query()) }}" class="bg-green-500 text-white px-4 py-2 rounded">Download Excel</a>
    </form>



    <!-- Orders Display -->
    <div class="flex flex-wrap gap-4 justify-center">
        @foreach ($orders as $order)
            <div class="{{ $order->Status === 'Terminado' ? 'bg-green-100' : ($order->Status === 'En Proceso' ? 'bg-yellow-100' : 'bg-white') }} p-4 rounded shadow flex-1 flex-col w-full max-w-sm flex-grow">
                <div class="flex-1">
                    <h2 class="text-xl font-bold">{{ $order->ProductName }}</h2>
                    <p><span class="font-semibold">Order ID:</span> {{ $order->id }}</p>
                    <p><span class="font-semibold">Full Name:</span> {{ $order->FullName }}</p>
                    <p><span class="font-semibold">Email:</span> {{ $order->Email }}</p>
                    <p><span class="font-semibold">Attended By:</span> {{ $order->AttendedBy }}</p>
                    <p><span class="font-semibold">Phone Number:</span> {{ $order->PhoneNumber }}</p>
                    <p><span class="font-semibold">Address:</span> {{ $order->Address }}</p>
                    <p><span class="font-semibold">Status:</span> <span id="status-{{ $order->id }}">{{ $order->Status }}</span></p>
                    <p><span class="font-semibold">Created Date:</span> {{ $order->created_at }}</p>
                    <div class="mt-4 flex gap-2">
                        <a href="{{ route('orders.edit', $order) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <form action="{{ route('orders.destroy', $order) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </form>
                        @if ($order->Status !== 'Terminado')
                            <button 
                                onclick="processOrder({{ $order->id }}, this)" 
                                class="status-btn bg-blue-500 text-white px-2 py-1 rounded">
                                {{ $order->Status === 'Registrado' ? 'Procesar' : 'Terminar' }}
                            </button>
                        @else
                            <button 
                                onclick="processOrder({{ $order->id }}, this)" 
                                class="status-btn bg-blue-500 text-white px-2 py-1 rounded">
                                Rollback
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="mt-4">
        {{ $orders->appends(request()->query())->links() }} <!-- Preserve filter parameters when paginating -->
    </div>
</div>

@include('components.modal', ['statusCode' => 204, 'header' => '¡Borrado Exitoso!'])

@endsection

<!-- Add JavaScript -->
@section('scripts')
<script>
    function processOrder(orderId, button) {

        const currentStatus = document.getElementById(`status-${orderId}`).innerHTML;

        let newStatus = currentStatus === 'Registrado' ? 'En Proceso' : (currentStatus === 'En Proceso' ? 'Terminado' : currentStatus);

        if ( currentStatus === newStatus) 
        {
            newStatus = 'Registrado'
        }

        fetch(`/orders/${orderId}/update-status`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ status: newStatus })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) 
            {
                const statusElement = document.getElementById(`status-${orderId}`);
                statusElement.innerHTML = `${newStatus}`;

                if (newStatus === 'En Proceso') 
                {
                    button.innerHTML = 'Terminar'
                    button.closest('.flex-col').classList.add('bg-yellow-100');
                }
                else if (newStatus === 'Terminado') 
                {
                    button.closest('.flex-col').classList.add('bg-green-100');
                    button.innerHTML = 'Rollback'   
                }
                else if (newStatus === 'Registrado') 
                {
                    button.innerHTML = 'Procesar'
                    button.closest('.flex-col').classList.add('bg-white');
                    button.closest('.flex-col').classList.remove('bg-green-100');
                    button.closest('.flex-col').classList.remove('bg-yellow-100');
                    
                }
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>
@endsection
