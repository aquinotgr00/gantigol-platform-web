<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Preorder\SettingReminder;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Settings'
        ];
        $couriers           = config('shipment.couriers');
        $shipment_adapters  = config('shipment.adapter.rajaOngkir.supported');
        $settingReminder    = SettingReminder::first();
        return view('admin::setting-dashboard', compact(
            'data',
            'couriers',
            'settingReminder',
            'shipment_adapters'
        ));
    }

    public function store(Request $request)
    {

        if ($request->has('interval')) {
            $settingReminder = SettingReminder::first();
            if (is_null($settingReminder)) {
                SettingReminder::create([
                    'interval' => $request->interval,
                    'repeat' => $request->repeat
                ]);
            } else {
                $settingReminder->update([
                    'interval' => $request->interval,
                    'repeat' => $request->repeat
                ]);
            }
        }
        return back();
    }
}
