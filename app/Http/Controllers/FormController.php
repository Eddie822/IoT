<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormularioRequest;
use App\Models\Form;
use Illuminate\Http\RedirectResponse;
use Carbon\Carbon;

class FormController extends Controller
{
    public function store(FormularioRequest $request): RedirectResponse
    {

        try {
            Form::create($request->validated());

            return redirect('/contactanos')->with('success', '¡Mensaje enviado con éxito!');

        } catch (\Exception $e) {
            return redirect('/contactanos')->with('error', 'Hubo un problema al enviar el mensaje. Intenta nuevamente.');
        }
    }

    public function showForm()
{
    $latestEntry = Form::latest()->first();

    return view('contactanos', compact('latestEntry'));
}

}

