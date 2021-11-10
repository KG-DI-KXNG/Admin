<div>
    @isset($successMsg)
    <div class="container bg-green-300 text-black text-center text-2xl p-2 ">{{$successMsg}}</div>
    @endisset
    <div class="bg-gray-100 flex ">
        <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
          <div class="py-12 p-10 bg-white rounded-xl">
            <div class="mb-6">
              <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Name</label>
              <input 
                type="text" 
                wire:model.lazy="name"
                class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded" 
                placeholder="Enter name" />
                <span class="text-red-500">@error('name'){{ $message }}@enderror</span>
            </div>
            <div class="">
              <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Email</label>
              <input 
                type="email" 
                wire:model.lazy="email"
                class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded" 
                />
                <span class="text-red-500">@error('email'){{ $message }}@enderror</span>
            </div>

            <div class="">
              <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">User Type</label>
              <select wire:model.lazy="usertype" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded">
                <option hidden selected>--Select Type--</option>
                <option value="1">Admin</option>
                <option value="0">Student</option>
                <option value="2">Teacher</option>
              </select>
                 
                <span class="text-red-500">@error('usertype'){{ $message }}@enderror</span>
            </div>

            @if ($usertype === "0" || $usertype === "2")

            <div class="">
              <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Assign Group to @if ($usertype === "0")
                {{"Student"}}
              @else
                {{"Teacher"}}
              @endif</label>
              <select wire:model.lazy="assignGroup" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded">
                <option hidden selected>--Groups--</option>
                @foreach ($groups as $group)
                  
                <option value="{{$group->id}}">{{$group->group_nm}}</option>
                @endforeach
              </select>
                 
                <span class="text-red-500">@error('assignGroup'){{ $message }}@enderror</span>
            </div>

              
            @endif

            <div class="">
              <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Password</label>
              <input 
                type="password" 
                wire:model.lazy="password"
                class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded" 
                />
                <span class="text-red-500">@error('password'){{ $message }}@enderror</span>
            </div>

            <div class="">
                <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Confirm Password</label>
                <input 
                    type="password" 
                    wire:model.lazy="password_confirmation"
                    class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded" />
                    <span class="text-red-500">@error('password_confirmation'){{ $message }}@enderror</span>
            </div>
          
            <button 
                wire:click="submit()"
                class="w-full mt-6 text-indigo-50 font-bold bg-indigo-600 py-3 rounded-md hover:bg-indigo-500 transition duration-300">Add New</button>
          </div>
        </div>
      </div>
</div>
