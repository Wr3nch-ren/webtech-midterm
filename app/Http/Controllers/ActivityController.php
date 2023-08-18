<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index() {
        return view('activities.index');
    }

    public function showDetail() {
        return view('activities.detail');
    }

    public function apply() {
        $faculties = [
            "คณะเกษตร",
            "คณะบริหารธุรกิจ",
            "คณะประมง",
            "คณะมนุษยศาสตร์",
            "คณะวนศาสตร์",
            "คณะวิทยาศาสตร์",
            "คณะวิศวกรรมศาสตร์",
            "คณะศึกษาศาสตร์",
            "คณะเศรษฐศาสตร์",
            "คณะสถาปัตยกรรมศาสตร์",
            "คณะสังคมศาสตร์",
            "คณะสัตวแพทยศาสตร์",
            "คณะอุตสาหกรรมเกษตร",
            "คณะเทคนิคการสัตวแพทย์",
            "คณะสิ่งแวดล้อม"
        ];
        return view('activities.apply', [
            'faculties' => $faculties
        ]);
    }
}
