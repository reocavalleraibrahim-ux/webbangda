<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apbd;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ApbdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = 'Apbd';
        $apbd = Apbd::all();
        return view('dashboard.apbd.main',compact('page','apbd'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = 'Apbd';
        $apbd = Apbd::where(['id' => $id])->first();
        return view('dashboard.apbd.form',compact('page','apbd'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dat = $request->validate([
            'perangkat_daerah'          => 'required|string',
            'anggaran_pendapatan'       =>  'required|numeric',
            'realisasi_pendapatan'      =>  'required|numeric',
            'anggaran_belanja'          =>  'required|numeric',
            'realisasi_belanja'         =>  'required|numeric',
        ]);

        $data = Apbd::where(['id' => $id]);
        $data->update($dat);

        return redirect('/apbd')->with('success','Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function upload(Request $request)
    {
        $request->validate([
            'excel' =>  'required|mimes:xlsx,xls'
        ]);

        $file = $request->file('excel');
        $spreadsheet = IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        foreach(array_slice($rows,7) as $row){
            $apbd = [
                'id'                    =>  $row[1],
                'perangkat_daerah'      =>  $row[2] ?? 0,
                'anggaran_pendapatan'   =>  $row[3] ?? 0,
                'realisasi_pendapatan'  =>  $row[4] ?? 0,
                'anggaran_belanja'      =>  $row[6] ?? 0,
                'realisasi_belanja'     =>  $row[7] ?? 0
            ];

            Apbd::create($apbd);
        }

        return redirect('/apbd')->with('success','Berhasil Upload File');
    }

    public function updateData(Request $request)
    {
        $request->validate([
            'excel' =>  'required|mimes:xlsx,xls'
        ]);

        $file = $request->file('excel');
        $spreadsheet = IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        foreach(array_slice($rows,7) as $row){
            $data = Apbd::where(['id' => $row[1]]);
            $apbd = [
                'anggaran_pendapatan'   =>  $this->cleanNumber($row[3]),
                'realisasi_pendapatan'  =>  $this->cleanNumber($row[4]),
                'anggaran_belanja'      =>  $this->cleanNumber($row[6]),
                'realisasi_belanja'     =>  $this->cleanNumber($row[7])
            ];

            $data->update($apbd);
        }

        return redirect('/apbd')->with('success','Berhasil Update Data');
    }

    private function cleanNumber($value)
    {
    if ($value === null || $value === '' || trim($value) === '-') {
        return 0;
    }

    $value = preg_replace('/[^0-9]/', '', $value);

    return $value === '' ? 0 : $value;
    }
}
