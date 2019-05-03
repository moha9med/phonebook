<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phonebook;
use DB;


class phonebookcontroller extends Controller
{

    public function search(Request $request){

        // $search = $request->get('search');
        // $contacts = DB::table('phonebooks')->where('name','like','%',$search,'%');
        // return view('phonebook',['contacts'=>$contacts]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = phonebook::orderby('id','asc')->paginate(9);
        return view('contacts')->with('contacts',$contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required'
        ]);

        //add contact

        $contact = new phonebook;
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone'); 
        $contact->save();

        return redirect('/')->with('success','Contact Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = phonebook::find($id);
        return view('contact')->with('contact',$contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = phonebook::find($id);
        return view('edit')->with('contact',$contact);
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

        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required'
        ]);


        $contact = phonebook::find($id);
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone'); 
        $contact->save();
        return redirect('phonebook')->with('success','Contact modified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = phonebook::find($id);
        $contact->delete();
       return redirect('/')->with('success','Contact Deleted');
    }
}
