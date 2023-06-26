<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCertification;
use App\Models\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function generateCertificate($courseId)
    {
        $user = Auth::user();
        $course = Course::find($courseId);

        // Check if certificate is already printed

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
        // return $this->downloadCertificate($certificate);
        return redirect()->back()->with('success', 'Certifikat telah dicetak, silahkan klik lihat untuk melihat sertifikat');
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
        // Create a new Dompdf instance
        $dompdf = new Dompdf();

        // Load the HTML template for the certificate
        $html = view('certificate.index', $data)->render();

        // Set the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Get the default options
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('isFontSubsettingEnabled', true);

        // Specify the font families
        $options->set('fontDir', public_path('fonts/'));
        $options->set('defaultFont', 'Arial');
        $options->set('fontFamily', 'Arial, PinyonScript'); // Multiple font families separated by comma
        $options->setFontFa
        // Set the options for the Dompdf instance
        $dompdf->setOptions($options);

        // Load the HTML content into dompdf
        $dompdf->loadHtml($html);

        // Render the PDF
        $dompdf->render();

        // Return the generated PDF
        return $dompdf;
    }



    public function testPage($userId, $courseId)
    {
        $user = User::find($userId);
        $course = Course::find($courseId);

        $name = $user->name;
        $course = $course->name;
        $date = now();

        return view('certificate.index', compact('name', 'course', 'date'));
    }
}
