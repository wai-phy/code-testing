<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    //register page
    public function registerPage(){
        return view('home');
    }

    //register 
    public function register(Request $request){
       $data= $this->getStudentData($request);
       Registration::create($data);

       return redirect()->route('register#List');

    }

    // //Success Page
    // public function success(){
    //     return view('success');
    // }

    // Register List Page
    public function registerList(){
        $studentData = Registration::when(request('key'),function($query){
                    $query->orWhere('name','like','%'.request('key').'%')
                    ->orWhere('name','like','%'.request('key').'%')
                    ->orWhere('father_name','like','%'.request('key').'%')
                    ->orWhere('grade','like','%'.request('key').'%')
                    ->orWhere('phone','like','%'.request('key').'%')
                    ->orWhere('address','like','%'.request('key').'%');
                        })
                        ->orderBy('created_at','desc')->paginate(3);
        return view('registerList',compact('studentData'));
        
    }
    //delete student Data
    public function deleteData($id){
        Registration::where('id',$id)->delete();
        return back();
    }

    // student detail
    public function studentDetail($id){
        $registerDetail = Registration::where('id',$id)->first();
        // dd($registerDetail->name);
        return view('studentDetail',compact('registerDetail'));
    }

    //student update 
    public function updateStudent($id){
        $updateStudent = Registration::where('id',$id)->first();
        // dd($registerDetail->name);
        return view('updateStudent',compact('updateStudent'));
    }

    //student update Data
    public function update(Request $request){
        $id = $request->id;
        $data= $this->getStudentData($request);
        Registration::where('id',$id)->update($data);
        return redirect()->route('register#List');
    }


    //getStudentData
    private function getStudentData($request){
        return [
            'name' => $request->name,
            'father_name' => $request->fatherName,
            'grade' => $request->grade,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
    }
}
