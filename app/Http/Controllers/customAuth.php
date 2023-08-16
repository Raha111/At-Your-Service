<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\service;
use App\Models\order;
use App\Models\feedback;
use App\Models\worker;


use Sesssion;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class customAuth extends Controller
{
    public function home()
    {
        return view("auth.home");
    }
    public function login()
    {
        return view("auth.login");
    }
    public function signup()
    {
        return view("auth.login");
    }
    public function signupUser(Request $request){
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12'
        ]);        
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        try {
            $res = $user->save();
        } catch (\Exception $e) {
            return back()->with('fail', 'Something went wrong: ' . $e->getMessage());
        }
               
        if($res){
            return back()->with('success','You have registered successfully!! plz login');
        } else {
            return back()->with('fail','Something went wrong');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:5|max:12'
        ]); 

        $user = User::where('username', $request->username)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId',$user->id);
                if ($user->role === 'admin') {
                    return redirect()->route('admin.dashboard');
                } elseif ($user->role === 'user') {
                    return redirect()->route('user.homepage');
                }
            } else {
                Alert::warning('Password does not match!');
                return back();
            }
        } else {
            Alert::warning('This username is not registered!');
            return back();
        }
    }

    public function request($id)
    {
        $data = service::find($id);
        return view('auth.request',compact('data'));
    }
    public function services()
    {
        $userId = session('loginId');
        $user = User::find($userId);
        $data = Service::all();
        return view('auth.services', compact('user', 'data'));
    }
    public function requested()
    {
         $userId = session('loginId');
         $user = User::find($userId);
         $data = Order::where('user_id', $userId)
                 ->where('status', '!=', 'Completed')
                 ->get();
         return view('auth.requested', compact('user','data'));
    }
    public function history()
    {
         $userId = session('loginId');
         $user = User::find($userId);
         $data = Order::where('user_id', $userId)
                 ->where('status', '=', 'Completed')
                 ->get();
         return view('auth.history', compact('user','data'));
    }
    public function adminDashboard()
    {
        $total_service = service::all()->count();
        $total_customer = User::all()->count();

        $order = order::where('status','=','Completed')->get();
        $total_revenue = 0;
        foreach($order as $order){
            $total_revenue = $total_revenue + $order->charge;
        }

        $current_request = order::where('status','=','requested')->get()->count();

        $assigned = order::where('status','=','Assigned')->get()->count();

        $completed = order::where('status','=','Completed')->get()->count();

         return view("admin.adminhome",compact('total_service','total_customer','total_revenue','current_request','assigned','completed'));
    }

    public function userHomepage()
    {
        $userId = session('loginId');
        $user = User::find($userId);
        if (!$user) {
            return redirect('login')->with('fail', 'User not found');
        }
        return view('auth.user', compact('user'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            Alert::success('You have been logged out Successflly!');
            return redirect('login');
        }
    }

    public function book_service(Request $request){
        $userId = session('loginId');
        $user = User::find($userId);
        $order=new order();
        $order->user_id=$user->id;
        $order->name=$request->Name;
        $order->email= $user->email;
        $order->service = $request->service;
        $order->charge = $request->charge;
        $order->phone = $request->Phone;
        $order->date_column = $request->date;
        $order->time_column = $request->time;
        $order->Address = $request->address;
        $order->details = $request->details;

        $order->save();

        return redirect()->route('confirmation', ['id' => $order->id]);

    }

    public function confirmation($id)
    {
        $order = order::find($id);
        return view('auth.confirmation',compact('order'));
    }

    public function cancel_order($id)
    {
        $order = order::find($id);
        if ($order->w_id) {
            $worker = worker::find($order->w_id);
    
            if ($worker) {
                $worker->status = 'Free';
                $worker->save();
            }
        }
        $order->delete();
        Alert::success('Request Canceled Successflly!');
        return redirect()->route('user.homepage');
    }
    public function contact()
    {
        $userId = session('loginId');
        $user = User::find($userId);
        return view('auth.contact', compact('user'));
    }
    public function feedback(Request $request){
        
        $data = new feedback();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;

        $data->save();

        Alert::success('Message Sent Successflly!');

        return redirect()->back();

    }
    
    public function see_worker($id){
        $userId = session('loginId');
        $user = User::find($userId);
        $worker = worker::find($id);
        return view('auth.worker',compact('worker','user'));
    }

}
