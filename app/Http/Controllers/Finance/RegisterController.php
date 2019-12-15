<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use DB;
use Exception;
use App\User;
use App\Mail\RegisterEmail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    //
    public function register(RegisterRequest $request)
    {
        
        $request->validated();

        DB::beginTransaction();
        try {
            $code = uniqid();
            $data = $request->toArray();
            $data['code_activation'] = $code;
            $user = User::create($data);
            Mail::to($user->email)->send(new RegisterEmail($user));
            // DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
