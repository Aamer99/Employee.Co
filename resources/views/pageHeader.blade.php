@extends('layout')
@section('content') 


  <div class="py-1" style="min-height: 100vh" >
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-7">
      <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-150 pb-10 sm:mt-16 sm:pt-5 lg:mx-0 lg:max-w-none lg:grid-cols-3 group-hover:text-gray-500">
        <h2 class="text-2xl font-bold tracking-tight text-gray-800 sm:text-4xl"> @yield('pageTitle')</h2>
      </div>
      
      @yield('pageContent')
    </div>
  </div>
  @endsection