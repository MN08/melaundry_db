<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function all(Request $request)
    {
        $shops = Shop::all();
        return ResponseFormatter::success($shops, 'Data Shops berhasil diambil');
    }

    public function shopRecommendationLimit(Request $request)
    {
        $shops = Shop::orderBy('rate', 'desc')->limit(5)->get();
        if (count($shops)) {
            return ResponseFormatter::success($shops, 'Data Shops berhasil diambil');
        } else {
            return ResponseFormatter::error(null, 'Data Shop tidak ditemukan');
        }
    }

    public function shopByCity($name)
    {
        $shops = Shop::where('city', 'like', '%' . $name . '%')->orderBy('name')->get();
        if (count($shops)) {
            return ResponseFormatter::success($shops, 'Data Shops berhasil diambil');
        } else {
            return ResponseFormatter::error(null, 'Data Shop tidak ditemukan');
        }
    }
}
