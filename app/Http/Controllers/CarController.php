<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Hash;
// import Storage class
use Illuminate\Support\Facades\Storage;
use File;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $cars =Car::all();
        // return view('showAll',['cars'=>$cars]);
        $cars =Car::all();
        return view('getDB',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addDB');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        $name="";
        if ($req->hasfile('image')) {
            # code...
            $this->validate($req,[
                'image'=>'mimes:jpg,png,gif,jpeg|max:4048'
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=> 'Chỉ chấp nhận hình ảnh dưới 2mb'
            ]);
            $file = $req -> file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('/assets/images');
            $file->move($destinationPath,$name);
        }
        $this -> validate($req,[
            // 'mf_id'=>'required',
            'make'=>'required',
            'model'=>'required',
            'produced_on'=>'required|date'
        ],[
            // 'mf.id.required'=> 'Bạn chưa nhập id nhà sản xuất',
            'make.required'=>'Bạn chưa nhập mô tả',
            'model.required'=>'Bạn chưa nhập model',
            'produced_on.required'=> 'Bạn chưa nhập ngày sản xuất',
            'produced_on.date'=> 'Cột produced_on phải là kiểu ngày!'
        ]);

        $car=new Car();
        // $car -> mf_id = $req->mf_id;
        $car -> make = $req->make;
        $car -> model =$req->model;
        $car->produced_on=$req->produced_on;
        $car->image=$name;
        $car->save();
        return redirect()->route('cars.index')->with('success','Bạn đã cập nhật nhật thành công');
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
        $car =Car::find($id);
        // $hi=var_dump($car);
        return view('show',compact('car'));
        // return view('show',['car'=>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $car=Car::find($id);
        return view('edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        //
        $name="";
        if ($req->hasfile('image')) {
            # code...
            $this->validate($req,[
                'image'=>'mimes:jpg,png,gif,jpeg|max:4048'
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=> 'Chỉ chấp nhận hình ảnh dưới 2mb'
            ]);
            $file = $req -> file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('/assets/images');
            $file->move($destinationPath,$name);
        }
        $this -> validate($req,[
            // 'mf_id'=>'required',
            'make'=>'required',
            'model'=>'required',
            'produced_on'=>'required|date'
        ],[
            // 'mf_id.required'=>'Bạn chưa nhập id nhà sản xuất',
            'make.required'=>'Bạn chưa nhập mô tả',
            'model.required'=>'Bạn chưa nhập model',
            'produced_on.required'=> 'Bạn chưa nhập ngày sản xuất',
            'produced_on.date'=> 'Cột produced_on phải là kiểu ngày!'
        ]);

        $car=Car::find($id);
        // $car -> mf_id = $req->mf_id;
        $car -> make = $req->make;
        $car -> model =$req->model;
        $car->produced_on=$req->produced_on;
        $car->image=$name;
        $car->save();
        return redirect()->route('cars.index')->with('success','Bạn đã cập nhật nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car             = Car::findOrFail($id);
        $image_path         = public_path('/assets/images/').$car->image;

        if(File::exists($image_path)) {
            File::delete($image_path);
            $car->delete();
        }
        return redirect()->route('cars.index')->with('success','Bạn đã xóa thành công');
            //abort(404);

        // =======================================
        // Tìm đến đối tượng muốn xóa
        // $car = Car::findOrFail($id);
        // $car->delete();
        // return redirect()->route('cars.index')->with('success','Bạn đã xóa thành công');
        
    }
}
