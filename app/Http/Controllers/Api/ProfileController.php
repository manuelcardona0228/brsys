<?php

namespace App\Http\Controllers\Api;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends BaseApiController
{
    public function index()
    {
        $profiles = Profile::orderBy('id','asc')->get();

        return $this->sendResponse(
            $profiles, 'Profiles retrieved successfully.'
        );
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $profile = Profile::create($input);

        return $this->sendResponse(
            $profile, 'Profile created successfully'
        );
    }

    public function show(Profile $profile)
    {
        return $this->sendResponse(
            $profile, 'Profile retrieved successfully'
        );
    }

    public function update(Request $request, Profile $profile)
    {
        $input = $request->all();

        $profile -> fill($input);
        $profile -> save();

        return $this->sendResponse(
            $profile,'Profile updated successfully'
        );
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();

        return $this->sendResponse(
            $profile, 'Profile deleted successfully'
        );
    }




}
