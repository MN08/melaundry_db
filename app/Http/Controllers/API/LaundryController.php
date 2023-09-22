<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function all(Request $request)
    {
        $laundries = Laundry::with('user', 'shop')->get();
        return ResponseFormatter::success($laundries, 'Data Laundries berhasil diambil');
    }

    public function getLaundryByUser($userID)
    {
        $userLaundries = Laundry::where('user_id', $userID)->orderBy('created_at')->get();
        if (count($userLaundries)) {
            return ResponseFormatter::success($userLaundries, 'Data User Laundries berhasil diambil');
        } else {
            return ResponseFormatter::error(null, 'Data User Laundries tidak ditemukan');
        }
    }

    public function claimUserLaundry(Request $request)
    {
        $laundry = Laundry::where([
            ['id', '=', $request->id],
            ['claim_code', '=', $request->claim_code],
        ])->first();

        if (!$laundry) {
            return ResponseFormatter::error(null, 'Data Laundry Code tidak ditemukan');
        }
        if ($laundry->user_id != 0) {
            return ResponseFormatter::error(null, 'Data Laundry Code sudah diKlaim');
        }

        $laundry->user_id = $request->user_id;
        $updateLaundryCode = $laundry->save();

        if ($updateLaundryCode) {
            return ResponseFormatter::success($updateLaundryCode, 'Update Laundry berhasil');
        } else {
            return ResponseFormatter::error(null, 'Update Laundry gagal');
        }
    }
}
