<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\CommitteeMember;
use App\Models\Meeting;
use App\Models\Member;
use Dompdf\Dompdf;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    function attendanceReport(Request $request)
    {
        $meeting = Meeting::findOrFail($request->meeting_id);

        $pdf = new Dompdf();
        
        $pdf->loadHtml(view('reports.attendance', compact('meeting')));
        $pdf->render();

        return $pdf->stream("attendance_report.pdf", ["Attachment" => false]);

        // return $pdf->stream();
    }
    
    function committeeConstitutionReport(Request $request)
    {
        $committee = Committee::findOrFail($request->committee_id);
        $chairPerson = Member::findOrFail($committee->chair_person);
        $secratory = Member::findOrFail($committee->secratory);

        $members = DB::select("SELECT * FROM members WHERE id in (SELECT member_id from committee_members WHERE committee_id = $committee->id) and id not in ($chairPerson->id, $secratory->id)");

        $pdf = new Dompdf();
        $pdf->set_paper('A4', 'portrait');
        $pdf->loadHtml(view('reports.committee_constitution', compact('committee', 'chairPerson', 'secratory','members')));
        $pdf->render();

        return $pdf->stream("committee_constitution_report.pdf", ["Attachment" => false]);
        // return view('reports.committee_constitution', compact('committee'));

    }
}
