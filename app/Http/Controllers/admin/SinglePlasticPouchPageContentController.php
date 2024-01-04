<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SinglePlasticPouchPageContent;
use App\Models\Jawharacproduct;
use File;
use Storage;
use Carbon\Carbon;
class SinglePlasticPouchPageContentController extends Controller
{
    public function create(){
        $models = Jawharacproduct::all();

        return view('front.create_single_plastic_pouch_page_contents',compact('models'));
    }

    public function insert(Request $request)
    {
        try {
            // Check if there is an existing record with the specified jawharacproducts_id
            $existingRecord = SinglePlasticPouchPageContent::where('jawharacproducts_id', $request->jawharacproducts_id)->first();

            if ($existingRecord) {
                // Save paths of existing images before deletion
                $img_PPfirstPath = $existingRecord->img_PPfirst;
                $img_PPsecondPath = $existingRecord->img_PPsecond;
                $img_PPthirdPath = $existingRecord->img_PPthird;

                // Delete the existing images and the old directory
                if ($img_PPfirstPath && file_exists(public_path($img_PPfirstPath))) {
                    unlink(public_path($img_PPfirstPath));
                }
                if ($img_PPsecondPath && file_exists(public_path($img_PPsecondPath))) {
                    unlink(public_path($img_PPsecondPath));
                }
                if ($img_PPthirdPath && file_exists(public_path($img_PPthirdPath))) {
                    unlink(public_path($img_PPthirdPath));
                }

                // Delete the old directory
                $oldDirectoryPath = public_path('uploads/singleplasticpouchpage/' . $existingRecord->id);
                if (File::exists($oldDirectoryPath)) {
                    File::deleteDirectory($oldDirectoryPath);
                }
            }

            // Create a new directory for each product
            $newDirectoryPath = 'uploads/singleplasticpouchpage/' . ($existingRecord ? $existingRecord->id : now()->timestamp);

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

            // Create a new SinglePlasticPouchPageContent instance
            SinglePlasticPouchPageContent::updateOrCreate($data);

            return redirect()->back()->with('success', 'Data inserted successfully.');
        } catch (\Exception $e) {
            // Handle exceptions and display error
            return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }


}
