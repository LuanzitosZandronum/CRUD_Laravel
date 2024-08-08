<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $clientes = User::all();
        return view('index', ['clientes' => $clientes]);
    }

    public function register(Request $request) {
        $incomingFields = $request->validate([
            'nome' => ['required', 'min:3', 'max:150'],
            'nascimento' => ['required', 'date'],
            'telefone' => ['required', 'int'],
            'observacao' => ['nullable']
        ]);

        User::create($incomingFields);

        return redirect('/');
    }

    public function edit($id) {
        $cliente = User::findOrFail($id);
        return view('edit', compact('cliente'));
    }

    public function update(Request $request, $id) {
        $cliente = User::findOrFail($id);

        $incomingFields = $request->validate([
            'nome' => ['required', 'min:3', 'max:150'],
            'nascimento' => ['required', 'date'],
            'telefone' => ['required', 'int'],
            'observacao' => ['nullable']
        ]);

        $cliente->update($incomingFields);
        return redirect('/');
    }

    public function destroy($id) {
        $cliente = User::findOrFail($id);
        $cliente->delete();
        return redirect('/');
    }
}
