<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    protected $year;
    protected $month;

    public function __construct($year, $month)
    {
        $this->year = $year;
        $this->month = $month;
    }

    public function collection()
    {
        $query = Order::query();

        if ($this->year) {
            $query->whereYear('created_at', $this->year);
        }

        if ($this->month) {
            $query->whereMonth('created_at', $this->month);
        }

        return $query->get();
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
