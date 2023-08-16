<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\order;
use App\Models\feedback;
use App\Models\worker;

class AdminController extends Controller
{
    public function  add_service(){
        return view('admin.addservice');
    }

    public function  view_service(){
        $data = service::all();
        return view('admin.viewservice',compact('data'));
    }

    public function add_here(Request $request)
    {
        $data = new service();
        $data->service_name = $request->service;
        $data->service_charge = $request->charge;
        $data->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');  
            if ($image->isValid()) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $image->move('service', $imagename);
                $data->image = $imagename;
            } else {
                // File upload error occurred
                dd($image->getErrorMessage());
            }
        }

        $data->save();

        return redirect()->back()->with('message', 'Service Added Successfully');
   }

    public function delete_service($id){
        $data = service::find($id);
        $data->delete();
        return redirect()->back()->with('message','Service Deleted Successfully');

    }
    public function edit_service($id)
    {
        $data = service::find($id);
        return view('admin.editservice',compact('data'));
    }
    public function update_here(Request $request,$id)
    {
        $data = service::find($id);
        $data->service_name = $request->service;
        $data->service_charge = $request->charge;

        if ($request->hasFile('image')) {
            $image = $request->file('image');  
            if ($image) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $image->move('service', $imagename);
                $data->image = $imagename;
            }
        }
        $data->save();
        return redirect()->back()->with('message', 'Service Updated Successfully');
    }

    public function  Requested_service(){
        $data = order::where('status','requested')->orderBy('id', 'desc')->get();
        return view('admin.requestedServices',compact('data'));
    }

    public function assign($id)
{
    $data = order::find($id);
    $service = $data->service;
    $worker = worker::where('service', $service)
                    ->where('status', 'Free')
                    ->get();

    return view('admin.assignworker', compact('data', 'worker'));
}

    public function assigned(){
        $data = order::where('status','Assigned')->get();
        return view('admin.assigned',compact('data'));
    }
    public function completed($id){
        $data = order::find($id);
        $data->status = 'Completed';
        $data->save();

        $workerId = $data->w_id;

        $worker = worker::find($workerId);

        if($worker){
            $worker->status = 'Free';
            $worker->save();
        }

        return redirect()->back()->with('message', 'Request Status Updated Successfully');
    }

    public function complete(){
        $data = order::where('status','Completed')->get();
        return view('admin.completed',compact('data'));
        // return 'hi';
    }

    public function customer_feedback(){
        $data = feedback::orderBy('id', 'desc')->get();
        return view('admin.feedbacks',compact('data'));
        // return 'hi';
    }

    public function search(Request $request)
    {
        $searchText = $request->search;
        $data = order::where('status', 'requested')
                     ->where(function ($query) use ($searchText) {
                         $query->where('name', 'LIKE', "%$searchText%")
                               ->orWhere('email', 'LIKE', "%$searchText%")
                               ->orWhere('service', 'LIKE', "%$searchText%")
                               ->orWhere('date_column', 'LIKE', "%$searchText%")
                               ->orWhere('phone', 'LIKE', "%$searchText%")
                               ->orWhere('Address', 'LIKE', "%$searchText%");
                     })
                     ->orderBy('id', 'desc')
                     ->get();
        return view('admin.requestedServices', compact('data'));
    }
    
    public function sort(Request $request){
        $sortby = $request->input('sort_by');

        if($sortby === 'date'){
            $data = order::where('status','requested')
                        ->orderBy('date_column','asc')
                        ->get();
        }
        else{
            $data = order::where('status','requested')
                        ->orderBy('id','desc')
                        ->get();
        }
        return view('admin.requestedServices', compact('data'));
    }

    //worker

    public function  add_worker(){
        $service = service::all();
        return view('admin.addworker',compact('service'));
    }

    public function addworker_here(Request $request){

            $data = new worker();
            $data->w_name = $request->name;
            $data->w_age = $request->age;
            $data->service = $request->service;
            $data->experience = $request->experience;
            $data->status = 'Free';
            if ($request->hasFile('image')) {
                $image = $request->file('image');  
                if ($image->isValid()) {
                    $imagename = time() . '.' . $image->getClientOriginalExtension();
                    $image->move('worker', $imagename);
                    $data->image = $imagename;
                } else {
                    // File upload error occurred
                    dd($image->getErrorMessage());
                }
            }
    
            $data->save();
    
            return redirect()->back()->with('message', 'Worker Added Successfully');
       
    }
    public function  view_worker(){
        $data = worker::all();
        return view('admin.viewworker',compact('data'));
    }

    public function delete_worker($id){
        $data = worker::find($id);
        $data->delete();
        return redirect()->back()->with('message','Worker Deleted Successfully');

    }
    public function assignWorker($orderId,$workerId){
        $order = order::find($orderId);
        $order->status = 'Assigned';
        $order->w_id = $workerId;
        $order->save();

        $worker = worker::find($workerId);
        $worker->status = 'Assigned';
        $worker->save();

        return redirect()->route('assigned')->with('message', 'Worker assigned successfully.');
        
    }
    public function search_worker(Request $request)
    {
        $searchText = $request->search;
        $data = worker::where('w_name', 'LIKE', "%$searchText%")
            ->orWhere('w_age', 'LIKE', "%$searchText%")
            ->orWhere('service', 'LIKE', "%$searchText%")
            ->orWhere('id', 'LIKE', "%$searchText%")
            ->orWhere('experience', 'LIKE', "%$searchText%")
            ->orWhere('status', 'LIKE', "%$searchText%")
            ->get();
        return view('admin.viewworker', compact('data'));

    }

}
