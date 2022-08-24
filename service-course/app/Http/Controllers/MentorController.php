<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::all();
        return response()->json([
            'status' => 'Success',
            'data' => $mentors
         ]);
    }

    public function show($id)
    {
        $mentor = Mentor::find($id);
        if(!$mentor){
            return response()->json([
                'status' => 'Error',
                'data' => 'Mentor Not Found'
            ], 404);
        }

        return response()->json(['status' => 'Success', 'data' => $mentor]);
    }

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

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'string',
            'profile' => 'url',
            'email' => 'email',
            'profession' => 'string'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'Error',
                'message' => $validator->errors()
            ], 400);
        }

        $mentor = Mentor::find($id);

        if(!$mentor)
        {
            return response()->json([
                'status' => 'Error',
                'message' => 'Mentor Not Found'
            ], 404);
        }

        $mentor->fill($data);
        $mentor->save();
        return response()->json([
            'status' => 'Success',
            'data' => $mentor
        ]);
    }

    public function destroy($id)
    {
        $mentor = Mentor::find($id);

        if (!$mentor){
            return response()->json([
                'status' => 'Error',
                'message' => 'Mentor Not Found'
            ], 404);
        }

        $mentor->delete();
        return response()->json([
            'status' => 'Success',
            'message' => 'Deleted Mentor Successfully'
        ]);
    }
}
