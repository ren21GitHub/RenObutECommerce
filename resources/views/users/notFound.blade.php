<!--
  This example requires updating your template:

  ```
  <html class="h-full">
  <body class="h-full">
  ```
-->
@include('partials._header')
{{-- <x-bgTop/> --}}
<main class="{{-- grid --}} flex flex-col min-h-full place-items-center justify-center {{-- bg-white --}} px-6 py-2 sm:py-32 lg:px-8">
    <x-logo1/>
    <div class="text-center">
      <p class="text-3xl font-semibold mt-10 text-green-600">404</p>
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-200 sm:text-5xl">Page not found</h1>
      <p class="mt-6 text-base leading-7 text-gray-400">Sorry, we couldn’t find the page you’re looking for.</p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="/" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Go back home</a>
        <a href="#" class="text-sm font-semibold text-gray-400">Contact support <span aria-hidden="true">&rarr;</span></a>
      </div>
    </div>
  </main>
  {{-- <x-bgBottom/> --}}
  @include('partials._footer')