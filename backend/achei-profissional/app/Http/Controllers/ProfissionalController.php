<?php

namespace App\Http\Controllers;

use App\Models\Profissional;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    public function index() {
        return Profissional::all();
    }

    public function store(Request $request) {
        return Profissional::create($request->all());
    }

    public function show($id) {
        return Profissional::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $profissional = Profissional::findOrFail($id);
        $profissional->update($request->all());

        return $profissional;
    }

    public function destroy($id) {
        $profissional = Profissional::findOrFail($id);
        $profissional->delete();

        return response()->json(['message' => 'Deletado com sucesso']);
    }
}
