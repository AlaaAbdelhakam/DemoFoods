<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Catalog;

class UploadPDF extends Controller
{
   
    public function store(Request $request)
{
    
    try {
        // Get the latest PDF record
        $existingPdf = Catalog::latest()->first();

        if ($existingPdf) {
            $pdfPath = $existingPdf->catalogpdf;

            // Ensure $pdfPath is not null before attempting to delete
            if ($pdfPath) {
                Storage::disk('public')->delete($pdfPath);
            }

            $existingPdf->delete();
        }

        $directoryPath = 'public/uploads/pdf'; // Update the path as needed

        // Check if the directory exists, and create it if not
        if (!Storage::disk('local')->exists($directoryPath)) {
            Storage::disk('local')->makeDirectory($directoryPath);
        }

        // Upload the new PDF
        $pdfPath = $request->file('catalogpdf')->store($directoryPath, 'public');

        // Save the new PDF path in the database
        Catalog::create(['catalogpdf' => $pdfPath]);

        return redirect()->back()->with('success', 'PDF uploaded successfully.');
    } catch (\Exception $e) {
        // Handle exceptions and display error
        return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
    }
}


    public function download()
    {
        $pdf = Catalog::first();

        if (!$pdf) {
            abort(404); // or handle as appropriate for your application
        }

        $filePath = storage_path("app/public/{$pdf->catalogpdf}");
        $fileName = 'Catalog.pdf';

        return response()->download($filePath, $fileName);
    }
    
}