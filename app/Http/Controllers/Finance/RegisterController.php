<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use DB;
use Exception;

class RegisterController extends Controller
{
    //
    public function register(RegisterRequest $request)
    {
        $request->validated();

        DB::beginTransaction();
        try {
            DB::commit();

        } catch (Exception $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
