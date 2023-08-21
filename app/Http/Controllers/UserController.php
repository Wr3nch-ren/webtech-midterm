<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }

    public function create(Request $request)
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $email = $request->get('email');
        $user = User::where('email', $email)->first();
        $user->name_title = $request->get('name_title');
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->date_of_birth = $request->get('date_of_birth');
        $user->student_code = $request->get('student_code');
        $user->faculty = $request->get('faculty');
        $user->department = $request->get('department');
        $user->email = $request->get('email');
        $user->nickname = $request->get('nickname');
        $user->faculty = $request->get('faculty');
        $user->department = $request->get('department');
        $user->year = $request->get('year');
        $user->phone = $request->get('phone');
        $user->line_id = $request->get('line_id');
        $user->facebook = $request->get('facebook');
        $user->congenital_disease = $request->get('congenital_disease');
        $user->allergy = $request->get('allergy');
        $user->save();

        return redirect()->route('login');
    }

    public function participatingEvents()
    {
        return view('user.events');
    }

    public function certificates()
    {
        $user = Auth::user();
        $certificates = Certificate::get()->where('user_id', $user->id);
        return view('user.certificates', [
            'certificates' => $certificates
        ]);
    }

    public function storeCertificate(Request $request) {

        $user =  Auth::user();

        $image = $request->file('certiImage');

        if(is_null($image)){
            return redirect()->back();
        }
        
        $file_name = now()->getTimestamp().".".$image->getClientOriginalExtension();
        $file_path = 'storage/'.$user->id.'/certificate/'.$file_name;
        $image->storeAs('public/'.$user->id.'/certificate/'.$file_name);

        $certificate = new Certificate();
        $certificate->certificate_path = $file_path;
        $certificate->name = $request->get('certiName');
        $certificate->user_id = $user->id;
        $certificate->save();
        
        return redirect()->route('user.certificates');
    }

    public function editProfile()
    {

        $education = array(
            'คณะเกษตร' => array(
                'สำนักงานเลขานุการ',
                'ภาควิชากีฏวิทยา',
                'ภาควิชาเกษตรกลวิธาน',
                'ภาควิชาคหกรรมศาสตร์',
                'ภาควิชาปฐพีวิทยา',
                'ภาควิชาพืชไร่นา',
                'ภาควิชาพืชสวน',
                'ภาควิชาโรคพืช',
                'ภาควิชาส่งเสริมและนิเทศศาสตร์เกษตร',
                'ภาควิชาสัตวบาล',
                'ศูนย์วิจัยข้าวโพดและข้าวฟ่างแห่งชาติ',
                'ศูนย์วิจัยและถ่ายทอดเทคโนโลยีการเกษตร',
                'โครงการหลักสูตรวิทยาศาสตรบัณฑิต สาขาเกษตรเขตร้อน (หลักสูตรนานาชาติ) ภาคพิเศษ',
                'โครงการเปิดสอนระดับปริญญาโท สาขาการสื่อสารเพื่อการพัฒนา (หลักสูตรนานาชาติ) ภาคพิเศษ',
                'โครงการหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาเกษตรเขตร้อน ภาคพิเศษ-หลักสูตรนานาชาติ',
                'โครงการปริญญาโทส่งเสริมการเกษตรสำหรับผู้บริหาร (ภาคพิเศษ)',
                'โครงการหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาคหกรรมศาสตร์ (ภาคพิเศษ)',
                'โครงการหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาเกษตรเขตร้อน (ภาคพิเศษ)-หลักสูตรไทย',
                'โครงการหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาเกษตรยั่งยืน (หลักสูตรนานาชาติ)',
                'โครงการหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิชาพลังงานชีวภาพ (ภาคพิเศษ)',
                'โครงการหลักสูตรวิทยาศาสตรดุษฎีบัณฑิต สาขาเกษตรเขตร้อน ภาคพิเศษ -หลักสูตรนานาชาติ',
                'โครงการหลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาเกษตรเขตร้อน ภาคพิเศษ -หลักสูตรไทย'
            ),
            'คณะบริหารธุรกิจ' => array(
                'ภาควิชาการเงิน',
                'ภาควิชาการจัดการ',
                'ภาควิชาการจัดการการผลิต',
                'ภาควิชาการตลาด',
                'ภาควิชาบัญชี'
            ),
            'คณะประมง' => array(
                'ภาควิชาการจัดการประมง',
                'ภาควิชาชีววิทยาประมง',
                'ภาควิชาผลิตภัณฑ์ประมง',
                'ภาควิชาเพาะเลี้ยงสัตว์น้ำ',
                'ภาควิชาวิทยาศาสตร์ทางทะเล'
            ),
            'คณะมนุษยศาสตร์' => array(
                'ภาควิชาดนตรี',
                'ภาควิชานิเทศศาสตร์และสารสนเทศศาสตร์',
                'ภาควิชาภาษาต่างประเทศ',
                'ภาควิชาวรรณคดี',
                'ภาควิชาภาษาศาสตร์',
                'ภาควิชาภาษาไทย',
                'ภาควิชาภาษาตะวันออก',
                'ภาควิชาปรัชญาและศาสนา',
                'ภาควิชาอุตสาหกรรมท่องเที่ยวและบริการ'
            ),
        );

        return view('user.edit-profile', [
            'education' => $education,
            'user' => Auth::user()
        ]);
    }
    public function update(Request $request)
    {
        $userDetail = Auth::user();
        $user = User::find($userDetail->id);

        $image = $request->file('image');
        $file_name = $request->name . "." . $image->getClientOriginalExtension();
        $file_path = 'storage/' . $request->email . '/' . $file_name;
        $image->storeAs('public/' . $request->email . '/' . $file_name);

        $user->name_title = $request->get('name_title');
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->date_of_birth = $request->get('date_of_birth');
        $user->student_code = $request->get('student_code');
        $user->faculty = $request->get('faculty');
        $user->department = $request->get('department');
        $user->email = $request->get('email');
        $user->nickname = $request->get('nickname');
        $user->faculty = $request->get('faculty');
        $user->department = $request->get('department');
        $user->year = $request->get('year');
        $user->phone = $request->get('phone');
        $user->line_id = $request->get('line_id');
        $user->facebook = $request->get('facebook');
        $user->allergy = $request->get('allergy');
        $user->image_path = $file_path;
        $user->save();
        return redirect()->route('user.profile');
    }

    public function notification()
    {
        return view('user.notification');
    }

    public function organize()
    {
        return view('user.organize');
    }
}