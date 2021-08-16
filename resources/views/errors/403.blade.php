@extends('errors::layout')

@section('title', __('Forbidden'))

<div class="flex flex-col items-center justify-center h-screen bg-gray-800">
  <div class="text-indigo-600 font-bold leading-none tracking-normal mb-8" style="font-size: 13rem;">403
  </div>
  <div class="text-white text-2xl font-bold mb-3 tracking-wide">Access Denied</div>
  <div class="text-white text-sm">Unfortunately, you don't have the permission required to access this page</div>
  <div class="text-white text-sm">Go back to <a href="." class="text-indigo-400">previous page</a> that you were
    belong
  </div>
</div>
