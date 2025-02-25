<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobApplicationController extends Controller
{
    public function index()
    {
        $applications = JobApplication::all();
        return view('admin_theme.job-application', compact('applications'));
    }

    public function show(JobApplication $application)
    {
        return view('admin_theme.show-application', compact('application'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'cnic_number' => 'required|string|max:15',
            'ntn_number' => 'nullable|string|max:15',
            'blood_group' => 'nullable|string|max:5',
            'permanent_address' => 'required|string|max:255',
            'mailing_address' => 'required|string|max:255',
            'facebook_profile' => 'nullable|url',
            'employment_type' => 'required|string|in:Full Time,Part Time',
            'position_applied' => 'required|string|max:255',
            'education_level' => 'nullable|array',
            'education_level.*' => 'nullable|string|max:255',
            'education_institute' => 'nullable|array',
            'education_institute.*' => 'nullable|string|max:255',
            'education_location' => 'nullable|array',
            'education_location.*' => 'nullable|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $education = [];
        if ($request->filled('education_level')) {
            foreach ($request->education_level as $index => $level) {
                $education[] = [
                    'level' => $level,
                    'institute' => $request->education_institute[$index] ?? '',
                    'location' => $request->education_location[$index] ?? '',
                ];
            }
        }

        $photoPath = $request->file('photo')->store('uploads', 'public');

        JobApplication::create([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'cnic_number' => $request->cnic_number,
            'ntn_number' => $request->ntn_number,
            'blood_group' => $request->blood_group,
            'permanent_address' => $request->permanent_address,
            'mailing_address' => $request->mailing_address,
            'facebook_profile' => $request->facebook_profile,
            'employment_type' => $request->employment_type,
            'position_applied' => $request->position_applied,
            'education' => $education,
            'photo' => $photoPath,
        ]);

        return redirect()->back()->with('success', 'Your job application has been successfully submitted!');
    }    public function destroy(JobApplication $application)
    {
        $application->delete();
        return redirect()->route('application.index')->with('success', 'Job application deleted successfully.');
    }
}
