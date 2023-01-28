<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Container;
use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\User;
use App\Models\Domain_Hosting;
use App\Models\Garments;
use App\Models\Generalsetting;
use App\Models\Member;;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{
    //register-form
    // ==========================
    public function register_form()
    {
        return view('register_form');
    }
    public function store_register_form(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'member_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'address' => 'required',
            'permanent_address' => 'required',
            'birth' => 'required',
            'education' => 'required',
            'company_name' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'blood' => 'required',
            'nid' => 'required',
        ]);
        $register = new Member();
        $cbc ="CBC-";
        $num   = '1000';
        $last_id  = Member::orderBy('id','DESC')->first();

        if(!empty($last_id))
        {
            $code_add =  ++$last_id->id;
        }else{
             $code_add = 1;
        }
        $code = $cbc.($num + $code_add) ;
        $register->cbc_sl =  $code;

        $register->member_name = $request->member_name;
        $register->father_name = $request->father_name;
        $register->mother_name = $request->mother_name;
        $register->address = $request->address;
        $register->permanent_address = $request->permanent_address;
        $register->birth = $request->birth;
        $register->education = $request->education;
        $register->company_name = $request->company_name;
        $register->designation = $request->designation;
        $register->company_address = $request->company_address;
        $register->phone = $request->phone;
        $register->email = $request->email;
        $register->blood = $request->blood;
        $register->nid = $request->nid;
        $register->cbc_type = $request->cbc_type;
        if($request->file('photo')){
            $file = $request->file('photo');
            $fileName = date('Y-m-d ').$file->getClientOriginalName();
            $file->move(public_path('member_image'),$fileName);
            $register->photo =  $fileName;

        }
        $register->save();
        return redirect()->back()->with('message', 'Registration Successfully!');
    }
    //Admin Dashboard
    // =============================
    public function index()
    {
        // $count = Container::where('softDeletes', 1)->count();
        $count = Member::count();
        $general_setting = Generalsetting::latest()->first();
        return view('layout.index',compact('count', 'general_setting'));
    }

    public function PasswordChange()
    {
        return view('password-change');
    }
    public function StorePasswordChange(Request $request)
    {
        $request->validate([
            'old_password' =>'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password'
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->old_password, $hashedPassword)){
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->new_password);
            $users->save();
            Session::flush();
            $notification = array(
                    'message' => 'Password Change Successfully',
                    'alert-type' => 'success'
                );
            return redirect('/login')->with($notification);

            }else{
                $notification = array(
                    'message' => 'Please Enter Your Valid  Old Password!',
                    'alert-type' => 'success'
                );
                  return back()->with($notification);
            }
    }
    public function search()
    {
        $search = Container::get();
        return view('search', compact('search'));
    }
    public function getBLNumber(Request $request)
    {
        $query = $request->bl_number;
        $item = Container::where('bl_number', '=', $query)->first();
        return view('get_bl_no_by_ajax', compact('item'));

    }
    public function Logout()
    {
        Session::flush();
        Auth::Logout();
        $notification =  array(
                'message' => 'Log Out Successfully ',
                'alert-type' => 'success'
            );
        return redirect('/login')->with($notification);
    }

    //Freight
    public function Add_customer()
    {
        return view('customer.add-customer');
    }
    public function Store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email_1' => 'required|unique:customers',
            'phone_1' => 'required|unique:customers',
            'website' => 'required',
        ]);
        $add_customer = new Customer ;
        $add_customer->name =$request->name;
        $add_customer->company =$request->company;
        $add_customer->email_1 =$request->email_1;
        $add_customer->email_2 =$request->email_2;
        $add_customer->phone_1 =$request->phone_1;
        $add_customer->phone_2 =$request->phone_2;
        $add_customer->website =$request->website;
        $add_customer->address =$request->address;
        $add_customer->save();
        $notification = array(
            'message' => 'Added Successfully',
            'alert-type' => 'success'
        );
        // $all_customers = Customer::all();
        return view('customer.add-customer')->with('success' ,'Data added');
    }
    public function AllCustomer()
    {
        return view('customer.all-customer');
    }
    public function Edit($id)
    {
        $edit = Customer::find($id);
        return view('customer.edit-customer', compact('edit'));
    }
    public function Update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required',
        'email_1' => 'required',
        'phone_1' => 'required',
        'website' => 'required',
        ]);
        $update = Customer::find($id);
        $update->name =$request->name;
        $update->company =$request->company;
        $update->email_1 =$request->email_1;
        $update->email_2 =$request->email_2;
        $update->phone_1 =$request->phone_1;
        $update->phone_2 =$request->phone_2;
        $update->website =$request->website;
        $update->address =$request->address;
        $update->save();
        return redirect('admin/all-customer')->with('message', 'Data Updated  Successfully');
    }
    public function Status($id){
       $status = DB::table('customers')->where('id', $id)->first();
       if($status->status){
            $status = 0;
       }else{
        $status = 1;
       }
       $values = array('status' =>$status);
       DB::table('customers')->where('id', $id)->update($values);
       return redirect()->back();
    }
    public function Delete($id)
    {
        $delete = Customer::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function View_Customer($id)
    {
        $view = Customer::find($id);
       return view('customer.view-customer', compact('view'));
    }
    public function Generate($id){
        $show  = Customer::find($id);
        $data = ['show' => $show];
        $pdf = Pdf::loadView('customer.generate-pdf', $data);
        return $pdf->download('customer'.'-'.$show->id.'.pdf');
    }

    //Add Domain & Hosting
    public function All_domain(){
        $customers  = Customer::all();
        $domains = Domain_Hosting::with('customer')->orderBy('id', 'DESC')->get();

        return view('domain.all-domain', compact('domains', 'customers'));
    }
    public function Add_domain()
    {
        $customers = Customer::all();
        $domains = Domain_Hosting::orderBy('id', 'DESC')->get();
       return view('domain.add-domain', compact('customers','domains'));
    }
    public function StoreAdmin(Request $request)
    {
        $request->validate([
            'cust_id' => 'required',
            'domain_name' => 'required',
            'domain_author_name' => 'required',
            'domain_yearly_price' => 'required',
            'domain_start_date' => 'required',
            'hosting_space' => 'required',
            'hosting_author_name' => 'required',
            'hosting_expiry_date' => 'required',
            'hosting_yearly_price' => 'required',
            ]);
        $domain = new Domain_Hosting;
        $domain->cust_id  = $request->cust_id ;
        $domain->domain_name  = $request->domain_name ;
        $domain->domain_author_name = $request->domain_author_name;
        $domain->domain_yearly_price =$request->domain_yearly_price;
        $domain->domain_start_date   =$request->domain_start_date;
        $domain->domain_expiry_date  =$request->domain_expiry_date;
        $domain->hosting_space       =$request->hosting_space;
        $domain->hosting_author_name =$request->hosting_author_name;
        $domain->hosting_start_date  =$request->hosting_start_date;
        $domain->hosting_expiry_date =$request->hosting_expiry_date;
        $domain->hosting_yearly_price=$request->hosting_yearly_price;
        $domain->save();
        return redirect()->back()->with('message', 'Data Added  Successfully');
    }

    public function Edit_Domain($id)
    {
        $edit = Domain_Hosting::find($id);

        $customers  = Customer::where('status',1)->select('id','name')->get();
        // return [$edit, $customers];
        return view('domain.edit-domain', compact('edit', 'customers' ));
    }
    public function Update_Domain(Request $request, $id)
    {
        $update = Domain_Hosting::find($id);
        $update->cust_id =$request->cust_id;
        $update->domain_name =$request->domain_name;
        $update->domain_author_name  =$request->domain_author_name;
        $update->domain_yearly_price =$request->domain_yearly_price;
        $update->domain_start_date   =$request->domain_start_date;
        $update->domain_expiry_date  =$request->domain_expiry_date;
        $update->hosting_space       =$request->hosting_space;
        $update->hosting_author_name =$request->hosting_author_name;
        $update->hosting_start_date  =$request->hosting_start_date;
        $update->hosting_expiry_date =$request->hosting_expiry_date;
        $update->hosting_yearly_price=$request->hosting_yearly_price;
        $update->save();
        return redirect('admin/all-domain')->with('message', 'Data Updated  Successfully');
    }
    public function Delete_Domain($id)
    {
        $delete = Domain_Hosting::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function View_Domain($id)
    {
        $view = Domain_Hosting::find($id);
        return view('domain.view-domain', compact('view'));
    }
    public function DomainPdf($id){
        $show = Domain_Hosting::find($id);
        $data = ['show' => $show];
        $pdf = Pdf::loadView('admin.domain.generate-pdf', $data);
        return $pdf->download('domain-invoice'.'-'.$show->id.'.pdf');
    }
    // public function Excel(){
        // dd('ok');
    // }
    // ================================
    //Expire Domain & Hosting
    // ===============================
    public function Expire()
    {
        $from = '';
        $to   = '';
        $cust_name   = '';
        $customers = Customer::orderBy('id', 'DESC')->get();
        $domains = Domain_Hosting::where('domain_expiry_date',date('y-m-d'))->get();
       return view('expire.all-expire', compact('domains','customers','from','to','cust_name'));
    }
    public function ExpireSearch(Request $request)
    {
        $from = $request->from_date;
        $to   = $request->to_date;
        $cust_name   = $request->cust_name;

         $customers = Customer::orderBy('id', 'DESC')->get();

        if($from &&  $to && $cust_name )
        {
        $domains = Domain_Hosting::whereBetween('domain_expiry_date',array($from,$to))
         ->where('cust_id', $cust_name)
        ->orderBy('id', 'DESC')
        ->get();

        }elseif($from &&  $to)
        {
        $domains = Domain_Hosting::whereBetween('domain_expiry_date',array($from,$to))
        ->orderBy('id', 'DESC')
        ->get();
        }elseif($cust_name)
        {
         $domains = Domain_Hosting::where('cust_id', $cust_name)
        ->orderBy('id', 'DESC')
        ->get();
        }else{
              $domains = Domain_Hosting::where('domain_expiry_date',date('y-m-d'))->get();
        }
        return view('expire.all-expire', compact('domains','customers','from','to','cust_name'));
    }
}
