<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function show()
    {
        $settings = Settings::first();

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
                    'site_name'    => 'required',
                    'site_url'     => 'required',
                    'email_from'   => 'required',
                    'email_to'     => 'required',
                ]);

        $settings = Settings::first();
        $settings->site_name = $request->input('site_name');
        $settings->site_url = $request->input('site_url');
        $settings->email_from = $request->input('email_from');
        $settings->email_to = $request->input('email_to');
        $settings->save();

        return redirect()->back()->with('success', 'Settings updated successfully');
    }
}
