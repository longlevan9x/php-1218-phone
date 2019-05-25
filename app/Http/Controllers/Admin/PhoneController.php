<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Phone;
use App\Models\Producer;
use App\Models\KindPhone;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::query()->paginate(2);

        return view('admin.phone.index', ['phones' => $phones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producers = Producer::whereActive(1)->get();
        $kind_phones = KindPhone::where("active", 1)->get();
        return view('admin.phone.create', [
            'producers' => $producers,
            'kind_phones' => $kind_phones
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:191',
            'price' => 'numeric',
            'quantity' => 'numeric'
        ];
        $request->validate($rules);

        $image = '';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . "-" . $file->getClientOriginalName();

            $file->storeAs("public/phone", $image);
        }

        $phone = new Phone;
        $phone->fill($request->all());

        $phone->image = $image;

        $check = $phone->save();
        if ($check) {
            return redirect('admin/phone')->with('success', "Tạo mới thành công");
        }
        return redirect('admin/phone/create')->with('error', "Tạo mới thất bại");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone = Phone::findOrFail($id);

        $producers = Producer::whereActive(1)->get();
        $kind_phones = KindPhone::whereActive(1)->get();
        return view('admin.phone.edit', [
            'phone' => $phone, 
            'producers' => $producers,
            'kind_phones' => $kind_phones
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $phone = Phone::findOrFail($id);

        $rules = [
            'name' => 'required|max:191',
            'price' => 'numeric',
            'quantity' => 'numeric'
        ];

        $request->validate($rules);

        $phone->fill($request->all());

        if ($request->hasFile('image')) {
            $old_image = $phone->image; 

            $file = $request->file('image');
            $image = time() . "-" . $file->getClientOriginalName();
            $file->storeAs('public/phone', $image);
            $phone->image = $image;

            @unlink(public_path('storage/phone/' . $old_image));
        }

        

        $check = $phone->save();
        if ($check) {
            return redirect('admin/phone')->with('success', "Cập nhật điện thoại " . $phone->name . " thành công");
        }
        return redirect('admin/phone/' . $phone->id . "/edit")->with('error', "Cập nhật thất bại");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::findOrFail($id);

        if($phone->delete()) {
            return response()->json([
                'message' => 'success'
            ]);
        }
        return response()->json([
            'message' => 'error'
        ]); 
    }
}
