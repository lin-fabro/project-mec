<?php

namespace App\Http\Controllers;

use App\Inquiries;
use Illuminate\Http\Request;
use App\Exports\InquiriesExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\DB;

class InquiriesController extends Controller
{
    public function submit(Request $request)
    {

        $validatedData = $request->validate([
            'first_name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email:rfc,dns',
            'contact_no' => 'required',
            'inquiry_order' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $inquiry = new Inquiries();

        $inquiry->first_name = request('first_name');
        $inquiry->company = request('company_name');
        $inquiry->email = request('email');
        $inquiry->contact_no = request('contact_no');
        $inquiry->inquiry = request('inquiry_order');

        $inquiry->save();

        $details = array(
            'created_at' => $inquiry->created_at,
            'first_name' => $request->get('first_name'),
            'email' => $request->get('email'),
            'company' => $request->get('company_name'),
            'contact_no' => $request->get('contact_no'),
            'inquiry' => $request->get('inquiry_order')
        );

        \Mail::to('meikotools@gmail.com')
            ->cc(['inshara@info.com.ph'])
            ->send(new \App\Mail\Inquiries($details));

        return back()->with('success', 'Thank you. Your inquiry has been submitted.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('inquiries')->orderBy('id', 'ASC')->get();
        $data_count = count($data);

        return view('inquiry.list', [
            'data' => $data,
            'data_count'=> $data_count]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inquiry = Inquiries::find($id);

        return view('inquiry.show', ['inquiry' => $inquiry]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inquiry = Inquiries::findOrFail($id);
        $inquiry->delete();

        return redirect('/inquiry/list')->with('success','Inquiry has been deleted.');
    }

    public function delete()
    {
        Inquiries::truncate();

        return redirect('/inquiry/list')->with('success','All inquiries has been deleted.');
    }

    public function export()
    {
        return new InquiriesExport();
    }
}
