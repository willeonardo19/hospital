<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $meses=[
            '1'    => "Enero",
            '2'    => "Febrero",
            '3'    => "Marzo",
            '4'    => "Abril",
            '5'    => "Mayo",
            '6'    => "Junio",
            '7'    => "Julio",
            '8'    => "Agosto",
            '9'    => "Septiembre",
            '10'   => "Octubre",
            '11'   => "Noviembre",
            '12'   => "Diciembre"
        ];
        $años=[
            '2016'    => "2016",
            '2017'    => "2017"
            
        ];

        if($request->input('mes')!=0){
             return view('admin.reportes.sigsa')
        ->with('meses',$meses)
        ->with('años',$años);
        }else{
            return view('admin.reportes.sigsa')
        ->with('meses',$meses)
        ->with('años',$años);
        }

        
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
