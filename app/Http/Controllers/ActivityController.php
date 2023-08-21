<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $event_verified = Activity::get()->where('verify', '1');
        return view('activities.index', ['events' => $event_verified]);
    }

    public function showDetail(Activity $event)
    {

        return view('activities.detail', ['event' => $event]);
    }


    public function apply()
    {
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
