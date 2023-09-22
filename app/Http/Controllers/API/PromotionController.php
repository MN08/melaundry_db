<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function all(Request $request)
    {
        $promotions = Promotion::with('shop')->get();
        return ResponseFormatter::success($promotions, 'Data Promotions berhasil diambil');
    }

    public function promoLimit(Request $request)
    {
        $promotions = Promotion::orderBy('created_at', 'desc')->limit(5)->with('shop')->get();
        if (count($promotions)) {
            return ResponseFormatter::success($promotions, 'Data Promotions berhasil diambil');
        } else {
            return ResponseFormatter::error([
                'message' => 'no promo available',
            ], 'Authentication Failed', 500);
        }
    }
}
