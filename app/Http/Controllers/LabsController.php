<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLabRequest;
use App\Http\Requests\UpdateLabRequest;
use App\Models\Lab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;


class LabsController extends Controller
{
  public function index()
  {
    abort_if(Gate::denies('lab_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $labs = Lab::all();

    return view('labs.index', compact('labs'));
  }

  public function create()
  {
    abort_if(Gate::denies('lab_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    return view('labs.create');
  }

  public function store(StoreLabRequest $request)
  {
    Lab::create($request->validated());

    return redirect()->route('labs.index');
  }

  public function show(Lab $lab)
  {
    abort_if(Gate::denies('lab_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    return view('labs.show', compact('lab'));
  }

  public function edit(Lab $lab)
  {
    abort_if(Gate::denies('lab_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    return view('labs.edit', compact('lab'));
  }

  public function update(UpdateLabRequest $request, Lab $lab)
  {
    $lab->update($request->validated());

    return redirect()->route('labs.index');
  }

  public function destroy(Lab $lab)
  {
    abort_if(Gate::denies('lab_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $lab->delete();

    return redirect()->route('labs.index');
  }
}
