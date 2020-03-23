<?php

namespace App\Http\Controllers;

use App\Sample_data;
use Illuminate\Http\Request;
use DataTables;
use Validator;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Sample_data::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Uredi</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Obriši</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('sample_data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'first_name'        =>  'required',
            'last_name'         =>  'required',
            'e_mail'            =>  'required',
            'address'           =>  'required',
            'city'              =>  'required',
            'country'           =>  'required',
            'postal_number'     =>  'required',
            'phone_number'      =>  'required',
            /*'birth_date'        =>  'required',
            'hometown'          =>  'required',
            'coutry_of_birth'   =>  'required'*/
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'first_name'        =>  $request->first_name,
            'last_name'         =>  $request->last_name,
            'e_mail'            =>  $request->e_mail,
            'address'           =>  $request->address,
            'city'              =>  $request->city,
            'country'           =>  $request->country,
            'postal_number'     =>  $request->postal_number,
            'phone_number'      =>  $request->phone_number,
            'birth_date'        =>  $request->birth_date,
            'hometown'          =>  $request->hometown,
            'coutry_of_birth'   =>  $request->coutry_of_birth
        );

        Sample_data::create($form_data);

        return response()->json(['success' => 'Unos novog člana izvršen.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function show(Sample_data $sample_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Sample_data::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sample_data $sample_data)
    {
        $rules = array(
            'first_name'        =>  'required',
            'last_name'         =>  'required',
            'e_mail'            =>  'required',
            'address'           =>  'required',
            'city'              =>  'required',
            'country'           =>  'required',
            'postal_number'     =>  'required',
            'phone_number'      =>  'required'
            /*'birth_date'        =>  'required',
            'hometown'          =>  'required',
            'coutry_of_birth'   =>  'required'*/
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'first_name'        =>  $request->first_name,
            'last_name'         =>  $request->last_name,
            'e_mail'            =>  $request->e_mail,
            'address'           =>  $request->address,
            'city'              =>  $request->city,
            'country'           =>  $request->country,
            'postal_number'     =>  $request->postal_number,
            'phone_number'      =>  $request->phone_number,
            'birth_date'        =>  $request->birth_date,
            'hometown'          =>  $request->hometown,
            'coutry_of_birth'   =>  $request->coutry_of_birth
        );

        Sample_data::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Podaci uspešno uređeni.']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sample_data::findOrFail($id);
        $data->delete();
    }
}

