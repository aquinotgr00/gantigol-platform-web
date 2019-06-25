<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\SettingDashboard;
use Modules\Preorder\SettingReminder;
use Validator;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Settings',
        ];
        $couriers = config('shipment.couriers');
        $shipment_adapters = config('shipment.adapter.rajaOngkir.supported');
        $settingReminder = SettingReminder::first();
        $settingDashboard = SettingDashboard::first();
        return view('admin::setting-dashboard', compact(
            'data',
            'couriers',
            'settingReminder',
            'shipment_adapters',
            'settingDashboard'
        ));
    }

    public function store(Request $request)
    {

        if ($request->has('interval')) {
            $settingReminder = SettingReminder::first();
            if (is_null($settingReminder)) {
                SettingReminder::create([
                    'interval' => $request->interval,
                    'repeat' => $request->repeat,
                ]);
            } else {
                $settingReminder->update([
                    'interval' => $request->interval,
                    'repeat' => $request->repeat,
                ]);
            }
        }

        if ($request->has('favicon')) {
            $setting = SettingDashboard::firstOrCreate(
                ['id' => 1],
                [
                    'favicon' => $request->favicon,
                    'logo' => $request->logo,
                ]);
            $setting->update([
                'favicon' => $request->favicon,
                'logo' => $request->logo,
            ]);
        }

        $user = Auth::user();

        if (Hash::check($request->password, $user->password)) {
            
            $request->validate([
                'new_password' => 'confirmed|min:6|different:password',
            ]);
            
            $user->fill([
                'password' => $request->new_password,
            ])->save();
            
            $request->session()->flash('success', 'Password changed');
        }

        return redirect()->route('admin.setting-dashboard');
    }
}
