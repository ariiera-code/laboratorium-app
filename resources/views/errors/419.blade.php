@extends('errors::layout')

@section('title', __('Page Expired'))

<div class="flex flex-col items-center justify-center h-screen bg-gray-800">
  <div class="text-indigo-600 font-bold leading-none tracking-normal mb-8" style="font-size: 13rem;">404
  </div>
  <div class="text-white text-2xl font-bold mb-3 tracking-wide">Session Expired.</div>
  <div class="text-white text-sm">Sorry, your session has expired.</div>
  <div class="text-white text-sm">Please refresh and try again or Go to <a href="." class="text-indigo-400">login
      page</a>.</div>
</div>
