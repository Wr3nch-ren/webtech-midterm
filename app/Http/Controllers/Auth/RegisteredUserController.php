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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name_title' => $request->name_title,
            'surname' => $request->surname,
            'date_of_birth' => $request->date_of_birth,
            'student_code' => $request->student_code,
            'faculty' => $request->faculty,
            'department' => $request->department,
            'year' => $request->year,
            'phone' => $request->phone,
            'line_id' => $request->line_id,
            'facebook' => $request->facebook,
            'allergy' => $request->allergy
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('user.profile');
    }
}
