<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;

class LokasiController extends Controller 
{
    public function states() {
        $states = lokasi::states();

        return response()->json( [
            'status' => [
                'http_status_code' =>200,
                'http_status_message' => 'OK'
            ],
            'result' => $states
        ] );
    }

    public function cities( $lokasi_kode ) {
        $cities = lokasi::cities( $lokasi_kode );

        return response()->json( [
            'status' => [
                'http_status_code' =>200,
                'http_status_message' => 'OK'
            ],
            'result' => $cities
        ] );
    }

    public function districts( $lokasi_kode ) {
        $districts = lokasi::districts( $lokasi_kode );

        return response()->json( [
            'status' => [
                'http_status_code' =>200,
                'http_status_message' => 'OK'
            ],
            'result' => $districts
        ] );
    }

    public function villages( $lokasi_kode ) {
        $villages = lokasi::villages( $lokasi_kode );

        return response()->json( [
            'status' => [
                'http_status_code' =>200,
                'http_status_message' => 'OK'
            ],
            'result' => $villages
        ] );
    }
}
