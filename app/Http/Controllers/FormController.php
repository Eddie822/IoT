<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormularioRequest;
use App\Models\Form;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(FormularioRequest $request): RedirectResponse
    {
 
        $validated = $request->validate([
            'nombre' => 'required| max:255',
            'correo' => 'required|unique:formulario',
            'telefono' => 'required|min_digits:10|max_digits:10',
            'mensaje'=> 'required'
        ]);
 
        return redirect('/contactanos');
    }
}
