<?php

namespace App\Http\Controllers;

use App\Models\ManagementPengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ManagementpenggunaController extends Controller
{
    public function index()
    {
        $managementpengguna = ManagementPengguna::latest()->get();

        return view(
            'dashboard.managementpengguna.index',
            compact('managementpengguna')
        );
    }

    public function create()
    {
        return view(
            'dashboard.managementpengguna.create'
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
            ],

            'role' => [
                'required',
                'array',
                'min:1',
            ],

            'role.*' => [
                'string',
                Rule::in([
                    'keuangan',
                    'administrator',
                    'entry_data',
                    'nasabah',
                ]),
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ], [
            'role.required' => 'Minimal pilih satu role.',
            'role.min' => 'Minimal pilih satu role.',
            'email.unique' => 'Email sudah digunakan.',
            'password.min' => 'Password minimal 8 karakter.',
        ]);

        // Role pertama = primary role
        $role = $validated['role'];

        $primaryRole = $role[0];

        ManagementPengguna::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),

            'role' => $role,
            'primary_role' => $primaryRole,

            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()
            ->route('management-pengguna.index')
            ->with('success', 'Account berhasil dibuat.');
    }

    public function edit($id)
    {
        $managementpengguna = ManagementPengguna::findOrFail($id);

        return view(
            'dashboard.managementpengguna.edit',
            compact('managementpengguna')
        );
    }

    public function update(Request $request, $id)
    {
        $user = ManagementPengguna::findOrFail($id);

        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email,' . $user->id,
            ],

            'password' => [
                'nullable',
                'string',
                'min:8',
            ],

            'role' => [
                'required',
                'string',
                Rule::in([
                    'keuangan',
                    'administrator',
                    'entry_data',
                    'nasabah',
                ]),
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ]);

        $role = $validated['role'];

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];
        $user->is_active = $request->boolean('is_active');

        // Password hanya diubah kalau diisi
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()
            ->route('management-pengguna.index')
            ->with('success', 'Account berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = ManagementPengguna::findOrFail($id);

        $user->delete();

        return redirect()
            ->route('management-pengguna.index')
            ->with('success', 'Account berhasil dihapus.');
    }
}
