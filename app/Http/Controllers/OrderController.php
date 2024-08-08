<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;

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

    public function index(Request $request)
    {
        // Get all the filters from the request
        $query = Order::query();

        // Apply year filter if present
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }

        // Apply month filter if present
        if ($request->filled('month')) {
            $query->whereMonth('created_at', $request->month);
        }

        // Add more filters as needed
        $orders = $query->paginate(10); // Adjust pagination as needed
        $totalOrders = $query->count();
        $user = auth()->user();

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

    public function export(Request $request)
    {
        $year = $request->input('year');
        $month = $request->input('month');

        return Excel::download(new OrdersExport($year, $month), 'orders.xlsx');
    }
}
