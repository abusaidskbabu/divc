<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Inertia\Inertia;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Redirect;


class FrontendController extends Controller{



    public function home(){

        $projects = DB::table('projects')->where('status', 1)->get() ?? null;
       
        return Inertia::render('Home', [
            'projects' => $projects,
        ]);
    }

    public function pages($slug){
        $page = DB::table('tb_pages')->where('alias',$slug)->first();
        if($page){
            return Inertia::render('Pages',[
                'page' => $page,
            ]);
        }else{
            return Inertia::render('404');
        }
    }


    

    public function portfolio(){
        $partnership = DB::table('projects')->where('status',1)->get();
        return Inertia::render('Portfolio',[
            'partnership' => $partnership,
        ]);
    }

    public function partner_details($id){
        $partner = DB::table('projects')->where('id',$id)->where('status',1)->first();
        return Inertia::render('Partner',[
            'partner' => $partner,
        ]);
    }

    public function contact_us(){
        return Inertia::render('Contact');
    }
    public function contactSubmit(Request $request){
        $request->validate([
            'name' => ['required'],
            'message' => ['required'],
        ]);

        $data['name'] =  $request->name;
        $data['phone'] =  $request->phone;
        $data['email'] =  $request->email;
        $data['subect'] =  $request->subect;
        $data['message'] =  $request->message;
        DB::table('tb_contact')->insert($data);
        return redirect()->back()->with('message', 'Message sent successfully.');
    }
    public function applyForRefund(Request $request){
        $request->validate([
            'startup_name' => ['required'],
            'mobile_number' => ['required', 'min:11', 'max:11'],
            'address' => ['required'],
            'sector' => ['required'],
            'amount_requested' => ['required'],
            'product_stage' => ['required'],
            'attachment' => ['required','file','max:8192'],
        ]);
		if($request->attachment){
            $imageName = uniqid().'.'.$request->attachment->getClientOriginalExtension();
            $request->attachment->move('../admin/public/uploads/attachment', $imageName);
			$data['attachment'] = $imageName; 
        }
        $data['startup_name'] =  $request->startup_name;
        $data['registration_no'] =  $request->registration_no;
        $data['website_url'] =  $request->website_url;
        $data['video_link'] =  $request->video_link;
        $data['mobile_number'] =  $request->mobile_number;
        $data['address'] =  $request->address;
        $data['sector'] =  $request->sector;
        $data['amount_requested'] =  $request->amount_requested;
        $data['product_stage'] =  $request->product_stage;
        DB::table('tb_investment')->insert($data);
        return redirect()->back()->with('message', 'Request sent successfully.');
    }

    



    public function request_for_fund(){
        return Inertia::render('RequestFund');
    }

    public function accelerator_program(){
        return Inertia::render('AcceleratorProgram');
    }

    public function search(Request $request){
        $keyword = $request->searchContent;
        $partnership = DB::table('projects')
        ->where('title', 'LIKE', '%' . $keyword . '%')
        ->orWhere('founder', 'LIKE', '%' . $keyword . '%')
        ->orWhere('short_description', 'LIKE', '%' . $keyword . '%')
        ->orWhere('description', 'LIKE', '%' . $keyword . '%')
        ->where('status',1)->get();
        return Inertia::render('Search',[
            'partnership' =>  $partnership,
            'keyword' =>  $keyword
        ]);

    }
    

    


}