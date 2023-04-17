<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Dompdf\Dompdf;
use Exception;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    function attendanceReport()
    {
        $id = 2;
        $dompdf = new Dompdf();
        $commitess = Committee::find($id);

        $data = [
            'title' => 'Attendance Sheet',
            'commitess' => $commitess,
            'meetings' => $commitess->meeting_details->first(),
            'members' => $commitess->committee_members_details
        ];
        
        try {
            $pdf = app('dompdf.wrapper');

            $pdf->setPaper('A4', 'portrait');

            $pdf->loadView('admin.ReportPDF.attendance', $data);
        } catch (Exception $e) {
            return back()->with('error', 'Error generating PDF: ' . $e->getMessage());
        }
        // return $pdf->download('Attendance_report_' . date('YmdHis') . '.pdf');
        return $pdf->stream();
    }
}
