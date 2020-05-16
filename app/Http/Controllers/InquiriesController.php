<?php

namespace App\Http\Controllers;

use App\Inquiries;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    public function submit(Request $request)
    {

        $validatedData = $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email:rfc,dns',
            'contact_no' => 'required',
            'inquiry_order' => 'required',
            'captcha' => 'required|captcha',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiries $inquiries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiries $inquiries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiries $inquiries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiries $inquiries)
    {
        //
    }
}
