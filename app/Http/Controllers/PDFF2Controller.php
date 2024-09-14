<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; // Barryvdh DomPDF

class PDFF2Controller extends Controller
{
    public function htmlToPdff()
    {
        // Load the view and pass data (optional)
        $pdf = PDF::loadView('samplepdfblade');

        // Return the generated PDF (stream it to the browser)
        return $pdf->stream('samplepdfblade.pdf');
    }
}
