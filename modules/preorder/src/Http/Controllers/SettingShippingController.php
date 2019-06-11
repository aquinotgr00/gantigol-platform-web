<?php
namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Preorder\SettingShipping;
use PDF;

class SettingShippingController extends Controller
{
    public function preview()
    {
        $setting    = SettingShipping::first();
        $data = [
            'setting' => $setting
        ];
        return PDF::setOptions(['defaultFont' => 'sans-serif'])
        ->setPaper('a4', 'landscape')
        ->loadView('preorder::shipping.preview', $data)
        ->stream('shipping-sticker.pdf');
    }

    public function storeSize(Request $request)
    {
        $request->validate([
            'width' => 'required|numeric|min:10|max:100',
            'height' => 'required|numeric',
        ]);
        $exist      = SettingShipping::first();
        if (is_null($exist)) {
            $shipping   = SettingShipping::create([
                'width' => $request->width,
                'height' => $request->height
            ]);
        } else {
            $exist->update([
                'width' => $request->width,
                'height' => $request->height
            ]);
        }
        return redirect()->route('setting-preorder.index');
    }
}
