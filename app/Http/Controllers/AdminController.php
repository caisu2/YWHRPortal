<?php

namespace App\Http\Controllers;

use App\Models\User\JobHistory;
use App\Models\User\Profile;
use App\Services\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

//        $this->service->hireApplicant(new Profile(), $id);
//        toast('Update Successfully','success')->autoClose(10000);
//        return back();
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

//        DB::beginTransaction();
//
//        try {
//            $payeService = new PayeInformationService();
//            $response = $payeService->insertInformation($request);
//            DB::commit();
//            return response()->json($response);
//        } catch (\Exception $e) {
//            DB::rollBack();
//            // return response()->json("Insert Information Error!", [$e->getMessage(), $e->getCode()]);
//            return response()->json(false);
//        }
    }
}
