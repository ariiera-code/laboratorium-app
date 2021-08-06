<?php

namespace App\Http\Controllers;


use App\Models\Place;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StorePlaceRequest;
use App\Http\Requests\UpdatePlaceRequest;
use Symfony\Component\HttpFoundation\Response;

class PLacesController extends Controller
{
  public function index()
  {
    abort_if(Gate::denies('place_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $places = Place::all();

    return view('places.index', compact('places'));
  }

  public function create()
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    return view('places.create');
  }

  public function store(StorePlaceRequest $request)
  {
    abort_if(Gate::denies('place_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    Place::create($request->validated());

    return redirect()->route('places.index');
  }

  public function show(Place $place)
  {
    abort_if(Gate::denies('place_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $places = Place::all();
    return view('places.show', compact('place'));
  }

  public function edit(Place $place)
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    return view('places.edit', compact('place'));
  }

  public function update(UpdatePlaceRequest $request, Place $place)
  {
    $place->update($request->validated());

    return redirect()->route('places.index');
  }

  public function destroy(Place $place)
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $place->delete();

    return redirect()->route('places.index');
  }
}
