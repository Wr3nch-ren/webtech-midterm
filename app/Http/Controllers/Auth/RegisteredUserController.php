<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */


    public function create(): View
    {
        $education = array(
            // 'faculty' => [
            'คณะเกษตร' => array(
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
                'โครงการหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเกษตรเขตร้อน (หลักสูตรนานาชาติ) ภาคพิเศษ',
                'โครงการเปิดสอนระดับปริญญาโท สาขาการสื่อสารเพื่อการพัฒนา (หลักสูตรนานาชาติ) ภาคพิเศษ',
                'โครงการหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาเกษตรเขตร้อน ภาคพิเศษ-หลักสูตรนานาชาติ',
                'โครงการปริญญาโทส่งเสริมการเกษตรสำหรับผู้บริหาร (ภาคพิเศษ)',
                'โครงการหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาคหกรรมศาสตร์ (ภาคพิเศษ)',
                'โครงการหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิชาเกษตรเขตร้อน (ภาคพิเศษ)-หลักสูตรไทย',
                'โครงการหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิชาเกษตรยั่งยืน (หลักสูตรนานาชาติ)',
                'โครงการหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิชาพลังงานชีวภาพ (ภาคพิเศษ)',
                'โครงการหลักสูตรวิทยาศาสตรดุษฎีบัณฑิต สาขาเกษตรเขตร้อน ภาคพิเศษ -หลักสูตรนานาชาติ',
                'โครงการหลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาเกษตรเขตร้อน ภาคพิเศษ -หลักสูตรไทย',
            ),
            'คณะบริหารธุรกิจ' => array(
                'ภาควิชาการเงิน',
                'ภาควิชาการจัดการ',
                'ภาควิชาการจัดการการผลิต',
                'ภาควิชาการตลาด',
                'ภาควิชาบัญชี',
            ),
            'คณะประมง' => array(
                'ภาควิชาการจัดการประมง',
                'ภาควิชาชีววิทยาประมง',
                'ภาควิชาผลิตภัณฑ์ประมง',
                'ภาควิชาเพาะเลี้ยงสัตว์น้ำ',
                'ภาควิชาวิทยาศาสตร์ทางทะเล',
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
            'คณะวนศาสตร์' => array(
                'ภาควิชาการจัดการป่าไม้',
                'ภาควิชาชีววิทยาป่าไม้',
                'ภาควิชาวิศวกรรมป่าไม้',
                'ภาควิชาวนผลิตภัณฑ์',
                'ภาควิชาวนวัฒนวิทยา',
                'ภาควิชาอนุรักษวิทยา',
            ),
            'คณะวิทยาศาสตร์' => array(
                'ภาควิชาคณิตศาสตร์',
                'ภาควิชาเคมี',
                'ภาควิชาจุลชีววิทยา',
                'ภาควิชาชีวเคมี',
                'ภาควิชาพฤกษศาสตร์',
                'ภาควิชาพันธุศาสตร์',
                'ภาควิชาฟิสิกส์',
                'ภาควิชารังสีประยุกต์และไอโซโทป',
                'ภาควิชาวิทยาการคอมพิวเตอร์',
                'ภาควิชาวิทยาศาสตร์พื้นพิภพ',
                'ภาควิชาวัสดุศาสตร์',
                'ภาควิชาสถิติ',
                'ภาควิชาสัตววิทยา',
            ),

            'คณะวิศวกรรมศาสตร์' => array(
                'ภาควิชาวิศวกรรมการบินและอวกาศ',
                'ภาควิชาวิศวกรรมคอมพิวเตอร์',
                'ภาควิชาวิศวกรรมเคมี',
                'ภาควิชาวิศวกรรมเครื่องกล',
                'ภาควิชาวิศวกรรมทรัพยากรน้ำ',
                'ภาควิชาวิศวกรรมไฟฟ้า',
                'ภาควิชาวิศวกรรมวัสดุ',
                'ภาควิชาวิศวกรรมโยธา',
                'ภาควิชาวิศวกรรมสิ่งแวดล้อม',
                'ภาควิชาวิศวกรรมอุตสาหการ',
            ),

            'คณะศึกษาศาสตร์' => array(
                'ภาควิชาการศึกษา',
                'ภาควิชาจิตวิทยาการศึกษาและการแนะแนว',
                'ภาควิชาเทคโนโลยีการศึกษา',
                'ภาควิชาพลศึกษา',
                'ภาควิชาอาชีวศึกษา',
            ),

            'คณะเศรษฐศาสตร์' => array(
                'ภาควิชาเศรษฐศาสตร์',
                'ภาควิชาเศรษฐศาสตร์เกษตรและทรัพยากร',
                'ภาควิชาสหกรณ์',
            ),
            'คณะสถาปัตยกรรมศาสตร์' => array(
                'ภาควิชาสถาปัตยกรรม',
                'ภาควิชาภูมิสถาปัตยกรรม',
                'ภาควิชานวัตกรรมอาคาร'
            )
        );

        return view('auth.register', [
            'education' => $education
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $image = $request->file('image');
        $file_name = $request->name . "." . $image->getClientOriginalExtension();
        $file_path = 'storage/' . $request->email . '/' . $file_name;
        $image->storeAs('public/' . $request->email . '/' . $file_name);
        $year = (int) $request->get('year');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name_title' => $request->name_title,
            'surname' => $request->surname,
            'nickname' => $request->nickname,
            'date_of_birth' => $request->date_of_birth,
            'student_code' => $request->student_code,
            'faculty' => $request->faculty,
            'major' => $request->department,
            'year' => $request->year,
            'phone' => $request->phone,
            'line_id' => $request->line_id,
            'facebook' => $request->facebook,
            'congenital_disease' => $request->congenital_disease,
            'allergy' => $request->allergy,
            'image_path' => $file_path
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('user.profile');
    }
}
