<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnquireFormModel;

class EnquireFormController extends Controller
{
    public function index(){
        $url = url('enquire-form/');
        $title = "Enquire Form";
        $data = compact('url', 'title');
        return view('enquireForm')->with($data);
    }
    
    public function store(Request $request){
        $session = session()->flash('status', 'Data inserted successfully.');

        // Validate fields
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirmation_pass' => 'required|same:password',
        ]);

        // Insert Query
        $form_class = new EnquireFormModel;
        $form_class->name = $request['name'];
        $form_class->email = $request['email'];
        $form_class->password = md5($request['password']);
        $form_class->address = $request['address'];
        $form_class->address2 = $request['address2'];
        $form_class->city = $request['city'];
        $form_class->state = $request['state'];
        $form_class->zip = $request['zip'];
        $form_class->privacy = $request['privacy']; 
        $form_class->save();

        return redirect('/enquire-form/view');
    }

    protected function view(Request $request){
        $search = $request['search'];
        if($request['search']){
            $fetch_enquire_form_data = EnquireFormModel::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->paginate(10);
            $full_url = url()->full();
        }else{
            $fetch_enquire_form_data = EnquireFormModel::paginate(10);
        }

        $form_data_compact = compact('fetch_enquire_form_data', 'search');

        return view('enquire_form-view')->with($form_data_compact);
    }

    protected function delete($id){
        $find_data = EnquireFormModel::find($id);
        if(!is_null($find_data)){
            $find_data->delete();
        }
        return redirect('enquire-form/view');
    }
    
    protected function edit($id){
        $fetch_enquire_form_data = EnquireFormModel::find($id);
        if(is_null($fetch_enquire_form_data)){
            return redirect('enquire-form/');
        }else{
            $url = url("/enquire-form/update").'/'.$id;
            $title = 'Update Enquire Form';
            $data = compact('fetch_enquire_form_data', 'url', 'title');
            return view('enquireForm')->with($data);
        }
    }

    protected function update($id, Request $request){
        
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'address' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
        ]);
        
        $update_data = EnquireFormModel::find($id);
        $update_data->name = $request['name'];
        $update_data->email = $request['email'];
        $update_data->password = $request['password'];
        $update_data->address = $request['address'];
        $update_data->address2 = $request['address2'];
        $update_data->city = $request['city'];
        $update_data->state = $request['state'];
        $update_data->zip = $request['zip'];
        $update_data->privacy = $request['privacy'];
        $update_data->save();

        $session = session()->flash('status', 'Your record has been updated successfully');
        return redirect('enquire-form/view');
    }
}
