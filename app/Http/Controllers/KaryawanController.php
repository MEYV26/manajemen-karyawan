<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Inertia\Inertia;

class KaryawanController extends Controller
{
    public function index()
    {
        return Inertia::render('Karyawan/Index', [
            'karyawan' => Karyawan::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return Inertia::render('Karyawan/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email',
            'posisi' => 'required|string|max:100',
            'tanggal_masuk' => 'required|date',
            'gaji' => 'required|numeric',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    public function show(Karyawan $karyawan)
    {
         return Inertia::render('Karyawan/Edit', [
            'karyawan' => $karyawan
        ]);
    }

    public function edit(Karyawan $karyawan)
    {
        return Inertia::render('Karyawan/Edit', [
            'karyawan' => $karyawan
        ]);
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email,' . $karyawan->id,
            'posisi' => 'required|string|max:100',
            'tanggal_masuk' => 'required|date',
            'gaji' => 'required|numeric',
        ]);

        $karyawan->update($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        
        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}