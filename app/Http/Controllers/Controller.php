<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;


abstract class Controller
{
    public function htmlToPdf () {
        $products = 'Apple';
        $data = [
            'title' => 'Funda of Web IT',
            'date' => date('m/d/y'),
            'products' => $products
        ];
        $pdf = Pdf::loadView('pdf.invoice', $data);
        return $pdf->stream('invoice.pdf');

        // $message = "hello world!";
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML($message);
        // return $pdf->stream();
    }
}
