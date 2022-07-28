<?php

namespace App\Http\Controllers;



use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function downloadPdf()
    {
        $path = public_path('pdf/dex-cv.pdf');
        return response()->download($path);
    }
}
