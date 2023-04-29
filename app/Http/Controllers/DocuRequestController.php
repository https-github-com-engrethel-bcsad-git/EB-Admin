<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\DocuRequest;

class DocuRequestController extends Controller
{
    public function print(DocuRequest $docuRequest)
    {
        $pdf = PDF::loadView('pdf.docu_request_pdf', compact('docuRequest'));
        return $pdf->stream('docu_request.pdf');
    }
}