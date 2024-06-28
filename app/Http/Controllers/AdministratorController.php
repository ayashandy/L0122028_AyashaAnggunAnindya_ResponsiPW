<?php

namespace App\Http\Controllers;

use App\Models\Kucing;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function show()
    {
        $kucing = Kucing::all();
        return view('index', compact('kucing'));
    }

    public function formtambah()
    {
        return view('forminsert');
    }

    public function tambah(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'jenis' => 'required|string|max:255',
        ]);

        Kucing::create([
            'nama' => $validatedData['nama'],
            'umur' => $validatedData['umur'],
            'jenis' => $validatedData['jenis'],
        ]);

        return redirect()->route('show')->with('success', 'Data inserted successfully');
    }

    public function formedit($id)
    {
        $kucing = Kucing::findOrFail($id);
        return view('formedit', compact('kucing'));
    }

    public function edit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'jenis' => 'required|string|max:255',
        ]);

        $kucing = Kucing::findOrFail($id);
        $kucing->update($validatedData);

        return redirect()->route('show')->with('success', 'Data updated successfully');
    }

    public function formhapus($id)
    {
        $kucing = Kucing::findOrFail($id);
        return view('formdelete', compact('kucing'));
    }

    public function hapus(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer|exists:kucing,id',
        ]);

        $kucing = Kucing::findOrFail($request->input('id'));
        $kucing->delete();

        return redirect()->route('show')->with('success', 'Data deleted successfully');
    }
}
