<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $certificates = Certificate::get()->where('user_id', $user->id);
        return view('user.certificates', [
            'certificates' => $certificates
        ]);
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
        $user =  Auth::user();

        $image = $request->file('certiImage');

        if (is_null($image)) {
            return redirect()->back();
        }

        $file_name = now()->getTimestamp() . "." . $image->getClientOriginalExtension();
        $file_path = 'storage/' . $user->id . '/certificate/' . $file_name;
        $image->storeAs('public/' . $user->id . '/certificate/' . $file_name);

        $certificate = new Certificate();
        $certificate->certificate_path = $file_path;
        $certificate->name = $request->get('certiName');
        $certificate->user_id = $user->id;
        $certificate->save();

        return redirect()->route('user.certificates');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        $certificate->delete();
        return redirect()->route('certificate.index');
    }
}
