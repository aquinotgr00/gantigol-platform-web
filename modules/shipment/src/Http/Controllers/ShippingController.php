<?php

namespace Modules\Shipment\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use \rizalafani\rajaongkirlaravel\RajaOngkir;
use \GuzzleHttp\Client;

use Modules\Shipment\Traits\OrderTrait;
use Validator;

class ShippingController extends Controller
{
    use OrderTrait;
    /**
     *
     * @var mixed $shipping
     */
    private $shipping;
    /**
     * [__construct description]
     *
     * @return void
     */
    public function __construct()
    {
        $this->shipping = new RajaOngkir();
    }
    /**
     *
     * @param   Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function cost(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'o' => 'required',
            'd' => 'required',
            'w' => 'required',
            'c' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 403);
        }

        $origin         = $request->query("o");
        $destination    = $request->query("d");
        $weight         = $request->query("w");
        $courier        = $request->query("c");

        $cost = $this->shipping->Cost([
            'origin'=>$origin,
            'originType'=>'city',
            'destination'=>$destination,
            'destinationType'=>'city',
            'weight'=>$weight,
            'courier'=>$courier
        ])->get();

        return response($cost);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return  mixed
     */
    public function province(Request $request) {
        
        return \Modules\Shipment\Province::all()->makeHidden(['created_at','updated_at']);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return  mixed
     */
    public function city(Request $request) {
        $query = $request->query("q");
        
        if($query) {
            return $this->shipping->Kota()->search('city_name', $name = $query)->get();
        }
        else {
            return $this->shipping->Kota()->all();
        }
    }
    /**
     *
     * @param   int  $provinceId
     *
     * @return  mixed
     */
    public function cityByProvince(int $provinceId) {
      
        return \Modules\Shipment\City::where('province_id',$provinceId)->get()->makeHidden(['city_type','province_id','created_at','updated_at']);
    }
    /**
     *
     * @param   int $cityId
     *
     * @return  mixed
     */
    public function subdistrictByCity(int $cityId) {
        return \Modules\Shipment\Subdistrict::where('city_id',$cityId)->get()->makeHidden(['city_id','created_at','updated_at']);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return  mixed
     */
    public function subdistrict(Request $request) {
        $subdistricts = \Modules\Shipment\Subdistrict::with('city.province');
        
        $term = $request->query('q');
        if($term) {
            $subdistricts->where('name','like','%'.$term.'%');
        }
        return $subdistricts->paginate(10);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function shipmentOptions(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'd' => 'required|numeric',
            'w' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 403);
        }

        $destinationSubdistrictId = $request->query('d');
        $totalWeight = $request->query('w');
        
        if($destinationSubdistrictId) {
            if($totalWeight>0) {
                $courier_services = $this->getShipmentOptions($destinationSubdistrictId, $totalWeight, $request->is('api*'));
                return jsend_success($courier_services);
            }
        }
    }
}
