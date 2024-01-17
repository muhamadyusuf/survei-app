<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use App\Models\Survei;

class FormSurveiController extends Controller
{

    /**
     * Main form survei.
     */
    public function index()
    {
        return view('formSurvei.main');
    }

    public function cekNik(Request $request)
    {
        $request->validate([
            'survei_nik' => 'required|numeric|digits:16'
        ]);

        $survei_nik = $request->input('survei_nik');
        $survei = Survei::where('survei_nik', $survei_nik)->first();

        if ($survei)
            return response()->json([
                'status' => [
                    'http_status_code' => 409,
                    'http_status_message' => 'Conflict'
                ],
                'message' => "NIK sudah pernah mengisi survei",
            ], 409);

        return response()->json([
            'status' => [
                'http_status_code' => 200,
                'http_status_message' => 'OK'
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'survei_nik' => 'required|numeric|digits:16',
            'survei_nama' => 'required|string|max:50',
            'survei_telp' => 'required|numeric|digits_between:10,15',
            'survei_emoney' => 'required|string|max:20',
            'survei_prov_kode' => 'required|string|max:50',
            'survei_kab_kode' => 'required|string|max:50',
            'survei_kec_kode' => 'required|string|max:50',
            'survei_kel_kode' => 'required|string|max:50',
            'survei_pilih' => 'required|string|max:2'
        ]);

        $survei_nik = $request->input('survei_nik');
        $survei = Survei::where('survei_nik', $survei_nik)->first();

        if ($survei)
            return response()->json([
                'status' => [
                    'http_status_code' => 409,
                    'http_status_message' => 'Conflict'
                ],
                'message' => "Maaf Bos. NIK sudah pernah mengisi survei",
            ], 409);

        $inp = $request->only(['survei_nik', 'survei_nama', 'survei_telp', 'survei_emoney', 'survei_prov_kode', 'survei_kab_kode', 'survei_kec_kode', 'survei_kel_kode', 'survei_pilih']);
        $inp['survei_alamat'] = " ";
        Survei::create($inp);
        
        return response()->json([
            'status' => [
                'http_status_code' => 200,
                'http_status_message' => 'OK'
            ],
            'message' => "Terima kasih sudah mengisi survei"
        ]);
    }
}
