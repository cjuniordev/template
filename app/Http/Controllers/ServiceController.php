<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = Service::all();

        return view('admin.service.index', compact('services'));
    }

    public function show(int $id): View
    {
        $service = Service::findOrFail($id);

        return view('admin.service.show', compact('service'));
    }

    public function edit(int $id)
    {
        $service = Service::findOrFail($id);

        return view('admin.service.edit', compact('service'));
    }

    public function update(ServiceRequest $request, $id)
    {
        $attributes = $request->validated();

        $service = Service::findOrFail($id);
        $service->update($attributes);

        return redirect()->route('services.index')->with('success', 'Serviço atualizado com sucesso!');
    }
}
