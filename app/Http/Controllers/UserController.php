<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // ✅ Tampilkan user ke halaman (Blade view)
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // ✅ Mendapatkan data pengguna (format JSON - API)
    public function getUser($id)
    {
        $user = User::find($id);

        if ($user) {
            return response()->json([
                'status' => 'success',
                'data' => $user
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'User not found'
        ], 404);
    }

    // ✅ Membuat pengguna baru (format JSON - API)
    public function createUser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $user
        ]);
    }

    // ✅ Mengambil data pesanan dari service lain (format JSON - API)
    public function getOrderFromService($userId)
    {
        $response = Http::get('http://localhost:8001/api/orders/user/' . $userId);

        if ($response->successful()) {
            return response()->json([
                'status' => 'success',
                'data' => $response->json()
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Unable to fetch order data'
        ], 500);
    }
}
