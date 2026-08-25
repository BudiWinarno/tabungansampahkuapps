<?php

namespace App\Http\Controllers;

use App\Models\JenisSampah;
use Illuminate\Http\Request;

class JenissampahController extends Controller
{
    public function index()
    {
        $jenisSampah = JenisSampah::latest()->get();

        return view(
            'dashboard.masterdata.jenissampah.index',
            compact('jenisSampah')
        );
    }

    public function create()
    {
        return view(
            'dashboard.masterdata.jenissampah.create'
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'keterangan' => ['nullable', 'string'],
            'satuan' => ['required', 'string', 'max:50'],
            'harga' => ['required', 'numeric', 'min:0'],
            'harga_pengepul' => ['required', 'numeric', 'min:0'],
        ]);

        JenisSampah::create($validated);

        return redirect()
            ->route('jenis-sampah.index')
            ->with('success', 'Jenis sampah berhasil ditambahkan.');
    }

    public function edit(JenisSampah $jenisSampah)
    {
        return view(
            'dashboard.masterdata.jenissampah.edit',
            compact('jenisSampah')
        );
    }

    public function update(Request $request, JenisSampah $jenisSampah)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'keterangan' => ['nullable', 'string'],
            'satuan' => ['required', 'string', 'max:50'],
            'harga' => ['required', 'numeric', 'min:0'],
            'harga_pengepul' => ['required', 'numeric', 'min:0'],
        ]);

        $jenisSampah->update($validated);

        return redirect()
            ->route('jenis-sampah.index')
            ->with('success', 'Jenis sampah berhasil diperbarui.');
    }

    public function destroy(JenisSampah $jenisSampah)
    {
        $jenisSampah->delete();

        return redirect()
            ->route('jenis-sampah.index')
            ->with('success', 'Jenis sampah berhasil dihapus.');
    }
}
