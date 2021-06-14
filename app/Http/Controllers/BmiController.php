<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('bmi'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function calculate($height,$weight)
    {
            $height = $height/100;
            $bmi = $weight/($height*$height);
            if ($bmi <= 18.5) {
            $output = "Underweight";
            } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
            $output = "Normal";
            } else if ($bmi > 24.9 AND $bmi<=29.9) {
            $output = "Overweight";
            } else if ($bmi > 30.0) {
            $output = "OBESE";
            }
            echo "Your BMI value is " . $bmi . " and you are : "; 
            echo "$output"; 
        
                       
    }

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
