<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index() {
        $activities = Activity::get();
        return view('activities.index', [
            'activities' => $activities
        ]);
    }

    public function showDetail(string $id) {
        $activity = Activity::findOrFail($id);
        return view('activities.detail',[
            'activity' => $activity
        ]);
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
            'faculties' => $faculties,
        ]);
    }
}
