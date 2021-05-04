<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function getoffers(){
        return Offer::select('id','name') -> get();
    }
    // insert static data to DB
    public function store(){
        Offer::create([
            'name' =>'offer5',
            'price' => '300',
            'details' =>'offer5 details'
        ]);
        }
    public function myform(){
        return view('crud\insertdataform');
    }
    public function storeForm(request $request){
        $rules =[
            'name' =>'required|max:100|unique:offers,name',
            'price' =>'required|numeric',
            'details' =>'required'
        ];
        $messages =[
            'name.required' =>'اسم العرض مطلوب',
            'name.unique' =>'اسم العرض موجود',
            'price.numeric' =>'اسم السعر لازم يكون رقم ',
            'details.required' =>'التفاصيل لازم تكون موجوده'

        ];
        $validator =validator($request ->all(),$rules,$messages);
        if ($validator ->fails()){
            //return $validator->errors();
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
          $offer=  Offer::create([
                'name' =>$request->name,
                'price' => $request->price,
                'details' =>$request->details
            ]);

          //  return 'saved successfully';
        return $offer;
    }


    }


