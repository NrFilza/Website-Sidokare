<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class AkunController extends Controller
{
  
    public function index()
    {
        $users = Users::all();
        return view('users.index', compact('users'));
    }
    
    public function create()
    {
        return view('users.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
        ]);
    
        $existingUser = Users::where('email', $validatedData['email'])->first();
    
        if ($existingUser) {
            // Email sudah ada dalam database, berikan respons atau lakukan tindakan lainnya
            // ...
        } else {
            // Mengenkripsi password
            $encryptedPassword = bcrypt($validatedData['password']);
    
            // Menyimpan data ke database
            $user = new Users;
            $user->email = $validatedData['email'];
            $user->password = $encryptedPassword;
            $user->name = $validatedData['name'];
            $user->save();
    
            // Lanjutkan dengan tindakan lainnya atau respon yang sesuai
            // ...
        }
    
    
        return redirect()->route('users.index')->with('success', 'Akun berhasil ditambahkan.');
    }
    
    public function edit(string $id)
    {
        $users = Users::findOrFail($id);
        return view('users.edit', compact('users'));
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
            
        ]);
        $users = Users::findOrFail($id);
    
        return redirect()->route('users.index')->with('success', 'Akun berhasil diperbarui.');
    }
    
    public function destroy(string $id)
    {
        $users = Users::findOrFail($id);
        $users->delete();
    
        return redirect()->route('users.index')->with('success', 'Akun berhasil dihapus.');
    }
    
}
