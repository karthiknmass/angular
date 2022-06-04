<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index($id=null)
    {
        return  $id?Contact::find($id):Contact::all();
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
    }
    public function show($id)
    {
        return Contact::find($id);
    }
public function destroy($id)
{
    $contacts = Contact::find($id);
       $result=$contacts->delete();
}
public function update(Request $request, $id)
{
    $contacts = Contact::find($id);
    $contacts->name=$request->input("name");
    $contacts->address=$request->input("address");
    $contacts->mobile=$request->input("mobile");
    $contacts->save();
    return response()->json($contacts);
}
}
