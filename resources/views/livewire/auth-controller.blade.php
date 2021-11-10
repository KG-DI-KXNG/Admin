<div>
       <div class="flex items-center justify-center">
        <div class="w-full max-w-md">
          @if (session('email'))
            {{session('email')}}
          @endif
          <form wire:submit.prevent="login" class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4">
            <!-- @csrf -->
            <div
              class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4"
            >
              <i> Kevando's Connexion</i>
            </div>
            <div class="mb-4">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for="username"
              >
                Email
              </label>
              <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                wire:model="email" 
                id="email"
                name="email"
                type="email"
                required
                autofocus
                placeholder="Email"
              />
              <span class="text-red-500">@error('email'){{ $message }}@enderror</span>
            </div>
            <div class="mb-6">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for="password"
              >
                Password
              </label>
              <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                wire:model.lazy="password" 
                id="password"
                type="password"
                placeholder="Password"
                name="password"
                required
                autocomplete="current-password"
              />
              <span class="text-red-500">@error('password'){{ $message }}@enderror</span>
            </div>
            <div class="mb-2">
                <input wire:model.lazy="remember" id="remember_me" type="checkbox">
                <label for="remember_me">Remember me</label>
        
            </div>
            <div class="flex items-center justify-between">
              <button class="px-4 py-2 rounded text-white inline-block shadow-lg bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit">Sign In</button>
              <a
                class="inline-block align-baseline font-normal text-sm text-blue-500 hover:text-blue-800"
                href="#"
              >
                Forgot Password?
              </a>
            </div>
            
          </form>
          <p class="text-center text-gray-500 text-xs">
            &copy;2021 KG LTD. All rights reserved.
          </p>
        </div>
      </div>
</div>
