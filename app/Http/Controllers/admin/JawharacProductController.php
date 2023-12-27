<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Jawharacategory;
use App\Models\Jawharacproduct;
class JawharacProductController extends Controller
{
    public function index()
    {
       
        $products = Jawharacproduct::orderBy('id', 'DESC')->paginate(10);
        return view('front.jawharaProduct.index', compact('products'));
    }

    public function create()
    {
        $models = Jawharacategory::all();

        return view('front.jawharaProduct.create',compact('models'));
    }


    public function store(Request $request)
    {
        try {
        DB::beginTransaction();
        $img = $request->image;
        $img_new = time() . $img->getClientOriginalName();
        $img->move('uploads/articles',$img_new);
        Jawharacproduct::create([
            'title' => $request->title,
            'description' => $request->description,
            'jawharacategories_id' => $request->jawharacategories_id,
            'image' => 'uploads/articles/'.$img_new,
            
        ]);

        // $car = Jawharacproduct::create($request->all());
        
    
       
        DB::commit();
        return redirect()->route('admin.product')->with(['success' => 'تم ألاضافة بنجاح']);
    } catch (\Exception $ex) {
        DB::rollback();
        return redirect()->route('admin.product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    }
    }


    public function edit($id)
    {

        //get specific carmodel and its translations
        $product = Jawharacproduct::find($id);
        $models = Jawharacategory::all();

        // if (!$models) {
        //     return redirect()->route('admin.products')->with(['error' => 'هذا الماركة غير موجود ']);
        // }

        return view('front.jawharaProduct.edit', compact('models','product'));
    }


    public function update($id, Request  $request)
    {
        try {
 


            $car = Jawharacproduct::find($id);

            // if (!$car) {
            //     return redirect()->route('admin.cars')->with(['error' => 'هذا الماركة غير موجود']);
            // }
            $oldImagePath = $car->image;
            $articleData = [
                'title' => $request->title,
                'description' => $request->description,
            ];
            if ($request->hasFile('image')) {
                // Delete the old image file from the server
                if ($oldImagePath) {
                    @unlink(public_path($oldImagePath));
                }
    
                $img = $request->file('image');
                $img_new = time() . $img->getClientOriginalName();
                $img->move('uploads/articles', $img_new);
                $articleData['image'] = 'uploads/articles/' . $img_new;
            }
            // DB::beginTransaction();

            $car->update($articleData);
            // $car->update($request->all());

            
            // DB::commit();
            return redirect()->route('admin.product')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $ex) {
            // DB::rollback();
            return redirect()->route('admin.product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $car = Jawharacproduct::find($id);

            // if (!$car) {
            //     return redirect()->route('admin.cars')->with(['error' => 'هذا الماركة غير موجود ']);
            // }
            // $ts = Carbon\Carbon::now()->toDateTimeString();
            // $data = array('deleted_at' => $ts, 'deleted_by' => Auth::user()->id);
            // DB::table('cars')->where('id', $id)->update($data);
            $car->delete();

            return redirect()->route('admin.product')->with(['success' => 'تم  الحذف بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}