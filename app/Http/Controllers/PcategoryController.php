<?php

namespace App\Http\Controllers;

use App\Models\Pcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PcategoryController extends Controller
{

    public function index()
    {
        $category = Pcategory::select('category')
            ->groupBy('category')
            ->get();
        return view('product', compact('category'));
    }

    public function storecat(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            $category = new Pcategory(); //Eloquent
            $category->category = $request->input('category');
            $category->save();
            return response()->json([
                'status' => 200,
                'message' => 'CHINGKUYLA NA SAVE ! AY JAMA NAYSU BATSSSSS.'
            ]);
        }
    }
}
