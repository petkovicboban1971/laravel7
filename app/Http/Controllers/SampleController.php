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
                    $button = '<span name="edit" id="'.$data->id.'" class="edit"><a href="#"><i class="fa fa-edit" style="color: green;">&nbsp;&nbsp;Uredi</i></a></span>';
                    $button .= '&nbsp;&nbsp;&nbsp;<span name="edit" id="'.$data->id.'" class="delete"><a href="#"><i class="fa fa-close" style="color: red;">&nbsp;&nbsp;Obriši</i></a></span>';
                    return $button;
                })
                ->editColumn('last_first_name', function ($data) {
                    return $data->last_name . ' ' . $data->first_name;
                })
                ->addColumn('details', function($data){
                    $button = '<button name="details" id="'.$data->id.'" class="details">Detalji</button>';
                    return $button;
                })
                ->rawColumns(['action', 'details'])
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
            'phone_number'      =>  'required'
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
            'postal_number'     =>  $request->postal_number,
            'phone_number'      =>  $request->phone_number,
            'country'           =>  $request->country,
            'birth_date'        =>  $request->birth_date,
            'hometown'          =>  $request->hometown,
            'coutry_of_birth'   =>  $request->coutry_of_birth,
            'citizenship'       =>  $request->citizenship,
            'note'              =>  $request->note,
            'picture'           =>  $request->picture,
            'proof_of_payment'  =>  $request->proof_of_payment/*,
            'permissions_id'    =>  Permissions::find($request->permissions_id)->permission_name*/
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
    public function show($sample_data)
    {
        $data = Sample_data::findOrFail($sample_data);
        $data->birth_date = date_format(date_create($data->birth_date), "d.m.Y.");
        return response()->json(['result' => $data]);
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
            'phone_number'      =>  'required',
            'coutry_of_birth'   =>  'required'
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
            'coutry_of_birth'   =>  $request->coutry_of_birth,
            'citizenship'       =>  $request->citizenship,
            'note'              =>  $request->note,
            'picture'           =>  $request->picture,
            'proof_of_payment'  =>  $request->proof_of_payment/*,
            'permissions_id'     =>  $request->permissions_id*/
        );

        Sample_data::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Podaci uspešno ažurirani.']);

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

