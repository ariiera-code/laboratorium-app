@extends('errors::layout')

@section('title', __('Unauthorized'))
<div class="flex flex-col items-center justify-center h-screen bg-gray-800">
  <div class="text-indigo-600 font-bold leading-none tracking-normal mb-8" style="font-size: 13rem;">401
  </div>
  <div class="text-white text-2xl font-bold mb-3 tracking-wide">No authorization found.</div>
  <div class="text-white text-sm">This page is not publically available.</div>
  <div class="text-white text-sm">To access it please <a href="." class="text-indigo-400">login</a>first
  </div>
</div>
