<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all(['id', 'FullName', 'Email', 'ProductName', 'AttendedBy', 'PhoneNumber', 'Address', 'Status', 'created_at', 'updated_at']);
    }

    public function headings(): array
    {
        return [
            'id',
            'Full Name',
            'Email',
            'Product Name',
            'Attended By',
            'Phone Number',
            'Address',
            'Status',
            'created_at',
            'updated_at'
        ];
    }
}
