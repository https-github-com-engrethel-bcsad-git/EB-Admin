<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\DocuRequest;

class DocuRequestController extends Controller
{
    public function accept($id)
    {
        $docuRequest = DocuRequest::find($id);
        $docuRequest->status = '1';
        $docuRequest->save();
        return redirect()->route('docu_approved')->with('success', 'Success');
    }

    public function destroy($id)
    {
        $docuRequest = DocuRequest::find($id);
        $docuRequest->delete();
        return redirect()->back();
    }

    public function print($id)
    {
        $docuRequest = DocuRequest::find($id);
        $docuRequest->status = '2';
        $docuRequest->save();
        $pdf = PDF::loadView('pdf.docu_request_pdf', compact('docuRequest'));
        return $pdf->stream('docu_request.pdf');
    }

    public function cancel($id)
    {
        $docuRequest = DocuRequest::find($id);
        $docuRequest->status = '4';
        $docuRequest->save();
        return redirect()->route('docu_printed')->with('success', 'Success');
    }

    public function receive($id)
    {
        $docuRequest = DocuRequest::find($id);
        $docuRequest->status = '3';
        $docuRequest->save();
        return redirect()->route('docu_printed')->with('success', 'Success');
    }
}