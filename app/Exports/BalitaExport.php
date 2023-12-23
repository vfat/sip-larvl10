<?php

namespace App\Exports;

use App\Models\Balita;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class BalitaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Balita::all();
    }

    public function headings(): array
    {
        return array_keys($this->collection()->first()->toArray());
    }
}
