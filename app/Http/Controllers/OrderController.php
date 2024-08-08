<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'FullName' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255',
            'ProductName' => 'required|string|max:255',
            'AttendedBy' => 'required|string|max:255',
            'PhoneNumber' => 'required|string|max:15',
            'Address' => 'required|string|max:255',
        ]);

        $order = Order::create($request->all());

        return back()
            ->with('success', '¡El pedido ha sido creado exitosamente!')
            ->with('status_code', 201);
    }

    public function create() 
    {
        return view('orders.create');
    }

    public function index()
    {
        $orders = Order::paginate(10); // O el número de órdenes que desees mostrar por página
        $totalOrders = Order::count(); // Obtener el total de órdenes
        $user = auth()->user(); // Obtener el usuario autenticado

        // Retorna la vista con los datos necesarios
        return view('orders.index', compact('orders', 'totalOrders', 'user'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'FullName' => 'required|max:255',
            'Email' => 'required|email|max:255',
            'ProductName' => 'required|max:255',
            'AttendedBy' => 'required|max:255',
            'PhoneNumber' => 'required|max:255',
            'Address' => 'required|max:255',
            'Status' => 'required|max:255',
        ]);

        $order->update($request->all());
        return back()
            ->with('success', '¡El pedido ha sido editado exitosamente!')
            ->with('status_code', 204);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return back()
            ->with('success', '¡El pedido ha sido borrado exitosamente!')
            ->with('status_code', 204);
    }
}
