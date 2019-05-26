<?php
namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Preorder\SettingReminder;
use Modules\Preorder\SettingShipping;

class SettingPreorderController extends Controller
{
    /**
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $setting_reminder   = SettingReminder::first();
        $courier            = config('preorder.courier');
        $setting            = SettingShipping::first();
        $data = [
            'courier' => $courier,
            'setting_reminder' => $setting_reminder,
            'setting' => $setting,
            'data' => [
                'title' => 'Setting Preorder'
            ]
        ];
        return view('preorder::setting.index')->with($data);
    }
}
