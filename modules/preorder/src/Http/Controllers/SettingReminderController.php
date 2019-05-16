<?php
namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Preorder\SettingReminder;

class SettingReminderController extends Controller
{
    /**
     *
     * @param   Request  $request
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'repeat'=> 'required',
            'interval'=>'required|lte:12'
        ]);
        $setting_exist = SettingReminder::first();
        
        if (!is_null($setting_exist)) {
            $setting_exist->update($request->except('_token'));
        } else {
            $request->request->add(['user_id'=> Auth::user()->id ]);
            $setting = SettingReminder::create($request->all());
        }
        return redirect()->route('setting-preorder.index');
    }
}
