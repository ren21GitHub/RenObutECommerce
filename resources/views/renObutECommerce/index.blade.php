@include('partials._header')
    <div {{-- class="bg-white" --}}>
        <header class="absolute inset-x-0 top-0 z-50">
          <nav class="flex items-center justify-between p-6 sm:px-8" aria-label="Global">
            <div class="flex sm:flex-1">
              <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <x-logo/>
              </a>
            </div>
            <div class="flex sm:hidden">
              <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
            </div>
            <div class="hidden sm:flex sm:gap-x-12">
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-green-500">About</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-green-500">Samples</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-green-500">Services</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-green-500">Contact Us</a>
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:justify-end">
              <a href="/login" class="text-sm font-semibold leading-6 text-gray-900 hover:text-green-500">Log in <span aria-hidden="true">&rarr;</span></a>
            </div>
          </nav>
          <!-- Mobile menu, show/hide based on menu open state. -->
          <div class="sm:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
              <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                  <span class="sr-only">Your Company</span>
                  <x-logo/>
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 hover:text-green-500">
                  <span class="sr-only">Close menu</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
              <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                  <div class="space-y-2 py-6">
                    <a href="#" class="-mx-3 block rounded-sm px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:text-green-500 hover:bg-green-50">About</a>
                    <a href="#" class="-mx-3 block rounded-sm px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:text-green-500 hover:bg-green-50">Samples</a>
                    <a href="#" class="-mx-3 block rounded-sm px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:text-green-500 hover:bg-green-50">Services</a>
                    <a href="#" class="-mx-3 block rounded-sm px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:text-green-500 hover:bg-green-50">Contact Us</a>
                  </div>
                  <div class="py-6">
                    <a href="#" class="-mx-3 block rounded-sm px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:text-green-500 hover:bg-green-50">Log in</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
      
        <div class="relative isolate px-6 pt-14 sm:px-8">
          {{-- <x-bgTop/> --}}
          <div class="mx-auto max-w-2xl py-32 sm:py-48 sm:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
              <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                Announcing our next round of funding. <a href="#" class="font-semibold text-green-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
              </div>
            </div>
            <div class="text-center">
              <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Use Ren Obut E-Commerce to enrich your online business</h1>
              <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
              <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Get started</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
              </div>
            </div>
          </div>
          {{-- <x-bgBottom/> --}}
        </div>
      </div>
      
@include('partials._footer')