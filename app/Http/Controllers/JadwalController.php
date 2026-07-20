<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class JadwalController extends Controller
{
    public function downloadPdf()
    {
        $pdf = Pdf::loadView('pdf.jadwal');

        return $pdf->download('jadwal-porprov-2026.pdf');
    }
}