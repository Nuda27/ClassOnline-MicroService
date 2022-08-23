<?php

namespace App\Http\Controllers;

use App\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MentorController extends Controller
{
    public function create(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'profile' => 'required|url',
            'email' => 'required|email',
            'profession' => 'required|string'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'Error',
                'message' => $validator->errors()
            ], 400);
        }

        $mentor = Mentor::create($data);

        return response()->json(['status' => 'Success', 'data' => $mentor]);
    }
}
