<?php

namespace App\Http\Controllers;

use App\Models\MasterBank;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MasterBankController extends Controller
{
    public function index()
    {
        $masterBanks = MasterBank::latest()->get();

        return view(
            'dashboard.masterdata.bank.index',
            compact('masterBanks')
        );
    }

    public function create()
    {
        return view(
            'dashboard.masterdata.bank.create'
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => [
                'required',
                'string',
                'max:20',
                'unique:master_banks,kode',
            ],

            'nama' => [
                'required',
                'string',
                'max:255',
            ],

            'deskripsi' => [
                'nullable',
                'string',
            ],
        ]);

        MasterBank::create($validated);

        return redirect()
            ->route('master-bank.index')
            ->with('success', 'Bank berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $masterBank = MasterBank::findOrFail($id);

        return view(
            'dashboard.masterdata.bank.edit',
            compact('masterBank')
        );
    }

    public function update(Request $request, $id)
    {
        $masterBank = MasterBank::findOrFail($id);

        $validated = $request->validate([
            'kode' => [
                'required',
                'string',
                'max:20',
                Rule::unique('master_banks', 'kode')
                    ->ignore($masterBank->id),
            ],

            'nama' => [
                'required',
                'string',
                'max:255',
            ],

            'deskripsi' => [
                'nullable',
                'string',
            ],
        ]);

        $masterBank->update($validated);

        return redirect()
            ->route('master-bank.index')
            ->with('success', 'Bank berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $masterBank = MasterBank::findOrFail($id);

        $masterBank->delete();

        return redirect()
            ->route('master-bank.index')
            ->with('success', 'Bank berhasil dihapus.');
    }
}