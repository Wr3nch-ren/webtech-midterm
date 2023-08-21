<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function faculty()
    {
        $faculties = DB::table("faculty")->pluck('name', 'id');
        return view('user.edit-profile', ['faculties' => $faculties]);
    }

    public function major($id)
    {
        $majors = DB::table("majors")
            ->where("faculty_id", $id)
            ->pluck('name', 'id');
        return json_encode($majors);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
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

            // ]    

        );

        return view('user.edit-profile', [
            'education' => $education,
            'user' => Auth::user()
        ]);
        // return view('user.edit-profile', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
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
        $user->major = $request->get('major');
        // $user->email = $user->email;
        $user->nickname = $request->get('nickname');
        $user->faculty = $request->get('faculty');
        $user->major = $request->get('major');
        $user->year = $request->get('year');
        $user->phone = $request->get('phone');
        $user->line_id = $request->get('line_id');
        $user->facebook = $request->get('facebook');
        $user->allergy = $request->get('allergy');
        $user->image_path = $file_path;
        $user->save();
        return redirect()->route('account.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
