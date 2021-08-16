@extends('errors::layout')

@section('title', __('Not Found'))

<div class="flex flex-col items-center justify-center h-screen bg-gray-800">
  <div class="text-indigo-600 font-bold leading-none tracking-normal mb-8" style="font-size: 13rem;">404
  </div>
  <div class="text-white text-2xl font-bold mb-3 tracking-wide">Looks like you're lost.</div>
  <div class="text-white text-sm">Maybe this page used to exist or you spelled something wrong.</div>
  <div class="text-white text-sm">Chances are you spelled something wrong, so can you double check the URL.</div>
  <div class="text-white text-sm">Go back to <a href="." class="text-indigo-400">previous page</a> that you were
    belong
  </div>
</div>
