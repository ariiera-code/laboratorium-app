<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
  public function index()
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $data = [
      'title' => 'User List'
    ];

    $users = User::with('roles')->get();

    return view('users.index', compact('users', 'data'));
  }

  public function create()
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $backurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
    $roles = Role::pluck('title', 'id');
    $data = [
      'title' => 'Create User'
    ];

    return view('users.create', compact('roles', 'data', 'backurl'));
  }

  public function store(Request $request)
  {
    Validator::make($request->all(), [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', new Password, 'confirmed'],
    ])->validate();

    $user = User::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => Hash::make($request['password']),
    ]);

    $user->roles()->sync($request->input('roles', []));

    return redirect()->route('users.index');
  }

  public function show(User $user)
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $data = [
      'title' => $user['name'] . "'s Profile"
    ];
    return view('users.show', compact('user', 'data'));
  }

  public function edit(User $user)
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $backurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
    $roles = Role::pluck('title', 'id');
    $user->load('roles');
    $data = [
      'title' => 'Edit Profile'
    ];

    return view('users.edit', compact('user', 'roles', 'backurl', 'data'));
  }

  public function update(Request $request, User $user)
  {
    // $user->update($request->validated());
    Validator::make($request->all(), [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
    ])->validate();

    $user->forceFill([
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => Hash::make($user['password']),
    ])->save();

    $user->roles()->sync($request->input('roles', []));

    return redirect()->route('users.index');
  }

  public function destroy(User $user)
  {
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $user->delete();

    return redirect()->route('users.index');
  }
}
