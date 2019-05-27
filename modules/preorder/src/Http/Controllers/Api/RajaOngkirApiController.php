<?php

namespace Modules\Preorder\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use GuzzleHttp\Client;
use Modules\Preorder\Http\Resources\RajaOngkirResource;

class RajaOngkirApiController extends Controller
{
    /**
     *
     * @var mixed
     */
    protected $client;
    /**
     *
     * @var string
     */
    protected $key;
    /**
     *
     * @return  void
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://pro.rajaongkir.com/api/'
        ]);
        $this->key      = 'd985e449666dc41df8683c05e10d3289';
    }
    /**
     *
     * @return \Modules\Preorder\Http\Resources\RajaOngkirResource
     */
    public function getProvinces()
    {
        $req = $this->client->request('GET', 'province', [
            'headers' => [
                'Accept'   => 'application/json',
                'key'      => $this->key
            ]
        ]);
        $response   = $req->getBody()->getContents();
        $collection = json_decode($response);
        return new RajaOngkirResource($collection->rajaongkir);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return \Modules\Preorder\Http\Resources\RajaOngkirResource
     */
    public function getCityByProvinceID(Request $request)
    {
        $request->validate([
            'province' => 'required'
        ]);
        $req = $this->client->request('GET', 'city', [
            'headers' => [
                'Accept'   => 'application/json',
                'key'      => $this->key
            ],
            'query' => $request->all()
        ]);
        $response   = $req->getBody()->getContents();
        $collection = json_decode($response);
        return new RajaOngkirResource($collection->rajaongkir);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return \Modules\Preorder\Http\Resources\RajaOngkirResource
     */
    public function getSubdistrict(Request $request)
    {
        $request->validate([
            'city' => 'required'
        ]);
        $req = $this->client->request('GET', 'subdistrict', [
            'headers' => [
                'Accept'   => 'application/json',
                'key'      => $this->key
            ],
            'query' => $request->all()
        ]);
        $response   = $req->getBody()->getContents();
        $collection = json_decode($response);
        return new RajaOngkirResource($collection->rajaongkir);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return \Modules\Preorder\Http\Resources\RajaOngkirResource
     */
    public function getShippingCost(Request $request)
    {
        $request->validate([
            'origin' => 'required', // ID kota/kabupaten atau kecamatan asal
            'originType' => 'required', // Tipe origin: 'city' atau 'subdistrict'.
            'destination' => 'required', // ID kota/kabupaten atau kecamatan tujuan
            'destinationType' => 'required', // Tipe origin: 'city' atau 'subdistrict' tujuan.
            'weight' => 'required',
            'courier' => 'required',
        ]);
        $req = $this->client->request('POST', 'cost', [
            'headers' => [
                'Accept'   => 'application/json',
                'key'      => $this->key
            ],
            'form_params' => $request->all()
        ]);
        $response   = $req->getBody()->getContents();
        $collection = json_decode($response);
        return new RajaOngkirResource($collection->rajaongkir);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return \Modules\Preorder\Http\Resources\RajaOngkirResource
     */
    public function getWayBill(Request $request)
    {
        $request->validate([
            'waybill' => 'required',
            'courier' => 'required'
        ]);
        $req = $this->client->request('POST', 'waybill', [
            'headers' => [
                'Accept'   => 'application/json',
                'key'      => $this->key
            ],
            'form_params' => $request->all()
        ]);
        $response   = $req->getBody()->getContents();
        $collection = json_decode($response);
        return new RajaOngkirResource($collection->rajaongkir);
    }
}
