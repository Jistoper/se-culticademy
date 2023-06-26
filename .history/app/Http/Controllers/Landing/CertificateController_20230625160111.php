<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCertification;
use App\Models\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function generateCertificate($courseId)
    {
        $user = Auth::user();
        $course = Course::find($courseId);

        // Check is certificate already printed


        $data = $this->getCertificateData($user, $course);
        $pdf = $this->generateCertificatePDF($data);

        // Save the PDF to storage/app/public/certificates directory
        $path = 'certificates/';
        $filename = $course->id . '_' . $user->id . '_' . Carbon::now()->format('YmdHis') . '.pdf';
        Storage::put($path . $filename, $pdf->output());

        // Update the course_certifications table with the file path
        $certificate = CourseCertification::where('course_id', $course->id)
            ->where('user_id', $user->id)
            ->update([
                'certificate_path' => $path . $filename,
                'is_printed' => true,
                'updated_at' => now(),
            ]);

        // Return the created CourseCertification model if needed
        return $this->downloadCertificate();
        // $certificate;
    }

    public function downloadCertificate($certificateId)
    {
        $user = Auth::user();

        $certificate = CourseCertification::where('course_id', $certificateId)
            ->where('user_id', $user->id)
            ->first();

            $filePath = $certificate->certificate_path;

            // Check if the file exists
            if (Storage::exists($filePath)) {
                // Retrieve the file's name
                $fileName = basename($filePath);

                // Set the appropriate response headers for file download
                $headers = [
                    'Content-Type' => 'application/pdf', // Replace with the appropriate MIME type for your file
                    'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
                ];

                // Download the file
                return Storage::download($filePath, $fileName, $headers);
            }

            // File not found
            abort(404);
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
    // public function generateCertificatex($userId, $courseId)
    // {
    //     $user = User::find($userId);
    //     $course = Course::find($courseId);

    //     $data = $this->getCertificateData($user, $course);
    //     $pdf = $this->generateCertificatePDF($data);

    //     return $pdf->download('certificate.pdf');
    // }

    // public function generateCertificate($userId, $courseId)
    // {
    //     $user = User::find($userId);
    //     $course = Course::find($courseId);

    //     $data = $this->getCertificateData($user, $course);
    //     $pdf = $this->generateCertificatePDF($data);

    //     // Save the PDF to storage/app/public/certificates directory
    //     $path = 'certificates/';
    //     $filename = $course->id . '_' . $user->id . '_' . Carbon::now()->format('YmdHis') . '.pdf';
    //     Storage::put($path . $filename, $pdf->output());

    //     // Update the course_certifications table with the file path
    //     $certificate = CourseCertification::create([
    //         'course_id' => $course->id,
    //         'user_id' => $user->id,
    //         'certificate_path' => $path . $filename,
    //     ]);

    //     // Return the created CourseCertification model if needed
    //     return $certificate;
    // }

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
