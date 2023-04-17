<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Meeting;
use Dompdf\Dompdf;
use Exception;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    function attendanceReport(Request $request)
    {
        $meeting = Meeting::findOrFail($request->meeting_id);

        $pdf = new Dompdf();
        
        $pdf->loadHtml(view('reports.attendance', compact('meeting')));
        $pdf->render();

        return $pdf->stream("attendanceReport.pdf", ["Attachment" => false]);

        // return $pdf->stream();
    }
}
