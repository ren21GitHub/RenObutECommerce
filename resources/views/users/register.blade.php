@include('partials._header')
{{-- <x-bgTop/> --}}
    <div class="flex {{-- h-screen --}} bg-slate-800 min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <x-logo1/>
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-200">Sign up</h2>
        </div>
    
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/store" method="POST">
                @csrf
                <div>
                    <label for="first_name" class="block text-sm font-medium leading-6 text-gray-200">First Name</label>
                    <div class="mt-2">
                        <input id="first_name" name="first_name" type="text" placeholder="Juan" autocomplete="given-name" required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 hover:ring-green-400" value={{old('first_name')}}>
                        @error('first_name')
                            <p class="block text-xs font-normal leading-3 text-red-600">{{$message}}</p>                            
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-medium leading-6 text-gray-200">Last Name</label>
                    <div class="mt-2">
                        <input id="last_name" name="last_name" type="text" placeholder="Dela Cruz" autocomplete="family-name" required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 hover:ring-green-400" value={{old('last_name')}}>
                        @error('last_name')
                            <p class="block text-xs font-normal leading-3 text-red-600">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-200">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" placeholder="sample@gmail.com" autocomplete="email" required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 hover:ring-green-400" value={{old('email')}}>
                        @error('email')
                            <p class="block text-xs font-normal leading-3 text-red-600">{{$message}}</p>
                        @enderror
                    </div>
                </div>
    
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-200">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 hover:ring-green-400">
                        @error('password')
                            <p class="block text-xs font-normal leading-3 text-red-600">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-200">Password Confirmation</label>
                    </div>
                    <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 hover:ring-green-400">
                        @error('password_confirmation')
                            <p class="block text-xs font-normal leading-3 text-red-600">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Sign up</button>
                </div>
            </form>
    
            <p class="mt-10 text-center text-sm text-gray-400">
                Member already?
                <a href="/login" class="font-semibold leading-6 text-green-600 hover:text-green-500">Sign in</a>
            </p>
        </div>
    </div>
{{-- <x-bgBottom/> --}}

@include('partials._footer')