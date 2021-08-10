<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Place;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreLabRequest;
use App\Http\Requests\UpdateLabRequest;
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
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $places = Place::pluck('place_name', 'id');
    return view('labs.create', compact('places'));
  }

  public function store(StoreLabRequest $request)
  {
    abort_if(Gate::denies('lab_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    return view('labs.edit', compact('lab'));
  }

  public function update(UpdateLabRequest $request, Lab $lab)
  {
    $lab->update($request->validated());

    return redirect()->route('labs.index');
  }

  public function destroy(Lab $lab)
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $lab->delete();

    return redirect()->route('labs.index');
  }
}
