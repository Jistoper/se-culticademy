<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Barryvdh\DomPDF\PDF;



class CertificateController extends Controller
{
    public function generateCertificate($userId, $courseId)
    {
        $user = User::find($userId);
        $course = Course::find($courseId);

        $data = $this->getCertificateData($user, $course);
        $pdf = $this->generateCertificatePDF($data);

        return $pdf->download('certificate.pdf');
    }

    private function getCertificateData($user, $course)
    {
        return [
            'name' => $user->name,
            'course' => $course->name,
            'date' => date('Y-m-d'),
        ];
    }

    private function generateCertificatePDF($data)
    {
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView('certificate.index', $data);
        $pdf->setPaper('A4', 'landscape');
        return $pdf;
    }
}

     // public function generateCertificate($userId, $courseId)
    // {

    //     // Retrieve the user and course data from your database
    //     $user = User::find($userId);
    //     $course = Course::find($courseId);

    //     // Storage location
    //     $outputfile = storage_path('app/public/certificate/' . $user . '_' . $course . '.pdf');
    //     $this->fillPDF(storage_path('app/public/certificate/master/' . $user . '_' . $course . '.pdf'), $outputfile, $user);

    //     return response()->file($outputfile);
    //     // // Pass the data to the certificate template
    //     // $data = [
    //     //     'name' => $user->name,
    //     //     'course' => $course->name,
    //     //     'date' => date('F j, Y'),
    //     // ];

    //     // // Generate the PDF certificate using Dompdf
    //     // $pdf = \PDF::loadView('certificate', $data)->setPaper('landscape');

    //     // // Return the PDF certificate as a download
    //     // return $pdf->download('certificate.pdf');
    // }

    // public function generateCertificate() {
    //     // create new FPDF instance
    //     $pdf = new FPDF();

    //     // add a page
    //     $pdf->AddPage();

    //     // set the font
    //     $pdf->SetFont('Arial', 'B', 16);

    //     // set the text color to black
    //     $pdf->SetTextColor(0, 0, 0);

    //     // write the certificate text    $pdf->Cell(0, 10, "Certificate of Completion", 0, 1, 'C');
    //     $pdf->Cell(0, 10, "This certificate is awarded to $name", 0, 1, 'C');

    //     // output the PDF
    //     $pdf->Output();
    // }
