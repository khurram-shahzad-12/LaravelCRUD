<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function view(){
        $url = url('/customer/create');
        $title='Customer Registration';
        $customer=new Customer();
        $customer->name='';
        $customer->email='';
        $customer->city='';
        $customer->state='';
        $data=compact('url','title','customer');
        return view('customer')->with($data);
    }

    public function addcustomer(Request $request){
        // $result=compact('request');
        // echo '<pre>';
        // print_r($request['name']);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'city' => 'required',
            'state'=> 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);
        // echo '<pre>';
        // print_r($request->all());
        $customer= new Customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->city = $request['city'];
        $customer->state = $request['state'];
        $customer->password = $request['password'];

        $customer->save();
        // response->json_decode(['message'=>'saved']);
        return redirect('/customer/view');

    }

    public function viewcustomer(){
        $customers = Customer::all();
        $data = compact('customers');
        return view('viewcustomer')->with($data);
    }

    public function deletecustomer($id){
        // echo $id;
        $customer = Customer::find($id)->delete();
        return redirect('/customer/view');
        // echo '<pre>';
        // print_r($customer);
    }

    public function editcustomer($id){
        // echo $id;
        $customer=Customer::find($id);
        if (is_null($customer)) {
            return redirect('/customer/view');
        } else {
            $title='update customer';
            $url=url('/customer/update').'/'.$id;
            $data=compact('customer','url','title');
            return view('customer')->with($data);
        }
        
    }

    public function updatecustomer($id,Request $request){
        $customer = Customer::find($id);
        // echo '<pre>';
        // print_r($customer);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->city = $request['city'];
        $customer->state = $request['state'];

        $customer->save();
        return redirect('/customer/view');
    }
}
