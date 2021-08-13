<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Place;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
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
    $backurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
    return view('places.create', compact('backurl'));
  }

  public function store(Request $request)
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $file = $request->file('place_photo');
    if (file_exists($file)) {
      $filename = $file->getClientOriginalName();
      $folder = uniqid() . '-' . now()->timestamp;
      $file->storeAs('public/placeimages/' . $folder, $filename);
      $photo_url = $folder . '/' . $filename;
    } else {
      $photo_url = '';
    }

    // $filename = time() . '.' . $request->place_photo->extension();
    // $request->file('place_photo')->storeAs('public', $filename);
    // dd($photo_url);
    Place::create([
      'place_name' => $request->place_name,
      'place_desc' => $request->place_desc,
      'user_id' => $request->user_id,
      'place_photo' => $photo_url,
      'slug' => Str::slug($request->place_name, '-')
    ]);

    return redirect()->route('places.index');
  }

  public function show($slug)
  {
    abort_if(Gate::denies('place_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $place = Place::where('slug', $slug)->first();
    $lab = Lab::where('slug', $slug)->first();
    return view('places.show', compact('place', 'lab', 'slug'));
  }

  public function edit($slug)
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $place = Place::where('slug', $slug)->first();
    $backurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
    return view('places.edit', compact('place', 'backurl', 'slug'));
  }

  public function update(Request $request, $id)
  {

    $places = Place::whereId($id)->first();

    $file = $request->file('place_photo');
    if (file_exists($file)) {
      if (\File::exists('storage/placeimages/' . $places->place_photo)) {
        \File::delete('storage/placeimages/' . $places->place_photo);
      }
      $file = $request->file('place_photo');
      $filename = $file->getClientOriginalName();
      $folder = uniqid() . '-' . now()->timestamp;
      $file->storeAs('public/placeimages/' . $folder, $filename);
      $photo_url = $folder . '/' . $filename;
      $places->update([
        'place_name' => $request->place_name,
        'place_desc' => $request->place_desc,
        'place_photo' => $photo_url
      ]);
    } else {
      $places->update([
        'place_name' => $request->place_name,
        'place_desc' => $request->place_desc
      ]);
    }

    return redirect()->route('places.index');
  }

  public function destroy(Place $place)
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $place->delete();

    return redirect()->route('places.index');
  }
}
