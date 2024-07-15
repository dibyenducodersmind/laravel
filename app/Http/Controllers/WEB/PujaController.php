<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WEB\Puja;
use App\Models\WEB\PujaBenefits;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PujaController extends Controller
{
    #Puja List
    public function pujaListPage()
    {
        $getPujaList = Puja::whereIn('status', ['1','0'])->with('puja_benefit')->orderBy('id', 'DESC')->get();
        $getBenefitList = PujaBenefits::where('status','1')->get();
        return view('puja.pujaList',compact('getPujaList','getBenefitList'));
    }

    # Add Puja
    public function addPujaPage()
    {
        return view('puja.addPuja');
    }

    # Add Puja
    public function addPuja(Request $request)
    {
        // dd($request->all());
        try {
            $request->validate([
                'puja_name' => 'required|string|max:255',
                'puja_price' => 'required|numeric|min:0',
                'puja_title' => 'required|string|max:255',
                'puja_description' => 'required|string',
                'field' => 'required|array',
                'field.*' => 'string|max:255',
                'status' => 'required|in:1,0',
            ]);

            $validator = Validator::make($request->all(), [
                'puja_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('puja_image')) {

                $image = $request->file('puja_image');
                //dd("hi");
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('puja-image'), $imageName);
                $puja_image1 = $imageName;
            }

            $benefits = json_encode($request->field);

            $addPuja = new Puja;
            $addPuja->puja_name   = $request->puja_name;
            $addPuja->price       = $request->puja_price;
            $addPuja->title       = $request->puja_title;
            $addPuja->description = $request->puja_description;
            $addPuja->date    = $benefits;
            $addPuja->image       = $puja_image1;
            $addPuja->status      = $request->status;

            $addPuja->save();

            return redirect()->route('puja.list')->with('success', 'Puja added successfully!');
        } catch (\Exception $e) {
            return response()->json(['response' => false, 'message' => $e->getMessage()], 500);
        }
    }

    # Puja Edit
    public function pujaEdit($puja_id)
    {
        $pujaDetails = Puja::where('id', $puja_id)->first();
        return view('puja.editPuja', ['pujaDetails' => $pujaDetails]);
    }

    # Puja Update
    public function pujaUpdate(Request $request, $puja_id)
    {
        //dd($request->all());
        try {
            $request->validate([
                'puja_name' => 'required|string|max:255',
                'puja_price' => 'required|numeric|min:0',
                'puja_title' => 'required|string|max:255',
                'puja_description' => 'required|string',
                'field' => 'required|array',
                'field.*' => 'string|max:255',
                'status' => 'required|in:1,0',
            ]);


            $updatePuja = Puja::where('id', $puja_id)->first();

            if ($request->hasFile('puja_image')) {

                if ($updatePuja->image && Storage::exists('puja-image/' . $updatePuja->image)) {
                    Storage::delete('public/puja-image/' . $updatePuja->image);
                }

                $image = $request->file('puja_image');

                $imageName = date('Y-m-d-H-i-s') . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('puja-image'), $imageName);
                $puja_image = $imageName;
            } else {
                $puja_image = $updatePuja->image;
            }

            $date = json_encode($request->field);


            $updatePuja->puja_name   = $request->puja_name;
            $updatePuja->price       = $request->puja_price;
            $updatePuja->title       = $request->puja_title;
            $updatePuja->description = $request->puja_description;
            $updatePuja->date        = $date;
            $updatePuja->image       = $puja_image;
            $updatePuja->status      = $request->status;

            $updatePuja->update();

            //  dd($addPuja);

            return redirect()->route('puja.list')->with('success', 'Puja updates successfully!');
        } catch (\Exception $e) {
            return response()->json(['response' => false, 'message' => $e->getMessage()], 500);
        }
    }

    # Puja Delete
    public function pujaDelete($puja_id)
    {
        $pujaDetails = Puja::whereIn('status', ['1', '0'])->where('id', $puja_id)->first();
        if (!empty($pujaDetails)) {
            $pujaUpdate = Puja::where('id', $puja_id)->first();
            $pujaUpdate->status = '2';
            $pujaUpdate->update();

            $sql = PujaBenefits::where('puja_id',$puja_id)->whereIn('status', ['1', '0']);
            $pujaBenefitCount = $sql->count();
            if($pujaBenefitCount > 0){
                $pujaBenefit = $sql->first();
                $pujaBenefit->status = '2';
                $pujaBenefit->update();
            }

            return redirect()->back()->with('success', 'Puja deleted successfully!');
        }
    }


    
}
