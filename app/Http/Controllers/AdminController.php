<?php

namespace App\Http\Controllers;

use App\Models\Admin\AvailablePositions;
use App\Models\User\JobHistory;
use App\Models\User\Profile;
use App\Services\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public $service;

    public function __construct(AdminService $adminService)
    {
        $this->service = $adminService;
    }

    public function showProfile($id)
    {
        $service = $this->service->showProfile(new Profile(), new JobHistory(), $id);
        return view('admin.user_profile',[
            'data' => $service
        ]);

    }

    public function hireApplicant($id)
    {

        DB::beginTransaction();
        try {
            $response = $this->service->hireApplicant(new Profile(), $id);
            DB::commit();
            toast('Transaction Success with','success')->autoClose(3000);
            return back();
        }catch (\Exception $e){
            DB::rollBack();
            toast('Error! Code:' . $e->getCode(),'error')->autoClose(5000);
            return back();
        }

    }

    public function showAvailablePositions()
    {
        $response = $this->service->getAvailablePosition(new AvailablePositions());

        return view('admin.position',[
           'datas' => $response
        ]);
    }

    public function updateAvailablePosition($id)
    {
        DB::beginTransaction();
        try {
            $response = $this->service->updateAvailablePosition(new AvailablePositions(), $id);
            DB::commit();
            toast('Update Successfully','success')->autoClose(3000);
            return back();
        }catch (\Exception $e){
            DB::rollBack();
            toast('Error! Code:' . $e->getCode(),'error')->autoClose(5000);
            return back();
        }
    }

    public function saveAvialablePosition(Request $request)
    {
        DB::beginTransaction();
        try {
            $response = $this->service->saveAvailablePosition(new AvailablePositions(), $request);
            DB::commit();
            toast('Data Successfully Saved!','success')->autoClose(3000);
            return back();
        }catch (\Exception $e){
            DB::rollBack();
            toast('Error! Code:' . $e->getCode(),'error')->autoClose(5000);
            return back();
        }
    }

    public function showCV(Request $request)
    {
        $filename = $this->service->showProfilePdf(new Profile(), $request->id);
//        var_dump($path);die;
        return response()->json($filename);
    }

    public function showAudio(Request $request)
    {
        $filename = $this->service->showProfileAudio(new Profile(), $request->id);

        return response()->json($filename);
    }
}
