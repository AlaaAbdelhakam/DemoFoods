<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SinglePlasticPailsPageContent;
use App\Models\Jawharacproduct;
use File;
use Storage;
use Carbon\Carbon;
class SinglePlasticPailsPageContentsController extends Controller
{
    public function create(){
        $models = Jawharacproduct::all();

        return view('front.create_single_plastic_pails_page_contents',compact('models'));
    }

    public function insert(Request $request)
    {
        try {
            // Check if there is an existing record with the specified jawharacproducts_id
            $existingRecord = SinglePlasticPailsPageContent::where('jawharacproducts_id', $request->jawharacproducts_id)->first();

            if ($existingRecord) {
                // Save paths of existing images before deletion
                $img_PPailsfirstPath = $existingRecord->img_PPailsfirst;
                $img_PPailssecondPath = $existingRecord->img_PPailssecond;
                $img_PPailsthirdPath = $existingRecord->img_PPailsthird;

                // Delete the existing images and the old directory
                if ($img_PPailsfirstPath && file_exists(public_path($img_PPailsfirstPath))) {
                    unlink(public_path($img_PPailsfirstPath));
                }
                if ($img_PPailssecondPath && file_exists(public_path($img_PPailssecondPath))) {
                    unlink(public_path($img_PPailssecondPath));
                }
                if ($img_PPailsthirdPath && file_exists(public_path($img_PPailsthirdPath))) {
                    unlink(public_path($img_PPailsthirdPath));
                }

                // Delete the old directory
                $oldDirectoryPath = public_path('uploads/singleplasticpailspage/' . $existingRecord->id);
                if (File::exists($oldDirectoryPath)) {
                    File::deleteDirectory($oldDirectoryPath);
                }
            }

            // Create a new directory for each product
            $newDirectoryPath = 'uploads/singleplasticpailspage/' . ($existingRecord ? $existingRecord->id : now()->timestamp);

            // Check if the directory exists, and create it if not in the public directory
            $publicNewDirectoryPath = public_path($newDirectoryPath);
            if (!File::exists($publicNewDirectoryPath)) {
                File::makeDirectory($publicNewDirectoryPath, 0755, true, true);
            }

            $uploadedImages = [];

            // Loop through all uploaded images
            foreach ($request->allFiles() as $key => $file) {
                $imageName = date('YmdHi') . $file->getClientOriginalName();
                $filePath = $newDirectoryPath . '/' . $imageName;

                // Store the image in the public directory
                $file->move($publicNewDirectoryPath, $imageName);
                $uploadedImages[$key] = $filePath;
            }

            // Combine uploaded images and request data
            $data = array_merge($request->except(['_token']), $uploadedImages);

            // Create a new SinglePlasticPailsPageContent instance
            SinglePlasticPailsPageContent::updateOrCreate($data);

            return redirect()->back()->with('success', 'Data inserted successfully.');
        } catch (\Exception $e) {
            // Handle exceptions and display error
            return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }

}
