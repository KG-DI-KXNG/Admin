<div class="w-full">
  @if(session('error'))
    <div class="container bg-green-300 text-black text-center text-2xl p-2 ">{{session('error')}}</div>
    @endif
    <div class=" bg-gray-50 flex ">
        <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
          <div class="py-12 p-10 bg-white rounded-xl">
            <div class="mb-6">
              <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Group Name</label>
              <select wire:model.lazy="group" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded">
                <option hidden selected>--Groups--</option>
                @foreach ($groups as $group)
                <option value="{{$group->id}}">{{$group->group_nm}}</option>
                    
                @endforeach
       
              </select>
                <span class="text-red-500">@error('group'){{ $message }}@enderror</span>
            </div>

            <div class="mb-6">
                <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Select a Teacher</label>
                <select wire:model.lazy="teacher" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded">
                  <option hidden selected>--Teacher--</option>
                  @foreach ($teachers as $teacher)
                  <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                      
                  @endforeach
         
                </select>
                   
                  <span class="text-red-500">@error('teacher'){{ $message }}@enderror</span>
              </div>

              <div class="mb-6">
                <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Assign a course</label>
                <select wire:model.lazy="courses" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded">
                  <option hidden selected>--Course--</option>
                  @foreach ($course as $c)
                  <option value="{{$c->id}}">{{$c->course_nm}}</option>
                      
                  @endforeach
         
                </select>
                   
                  <span class="text-red-500">@error('teacher'){{ $message }}@enderror</span>
              </div>

              <div class="grid grid-cols-2 gap-2">
                  <div class="">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Choose a</label>
                        <select wire:model.lazy="starttime" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded">
                            <option hidden selected>--Select Type--</option>
                                <option value="1">1:00</option>
                                <option value="2">2:00</option>
                                <option value="3">3:00</option>
                                <option value="4">4:00</option>
                                <option value="5">5:00</option>
                              </select>
                              <span class="text-red-500">@error('starttime'){{ $message }}@enderror</span>
                </div>
                <div>
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Class Time</label>
                    <select wire:model.lazy="endtime" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded">
                    <option hidden selected>--Select Type--</option>
                        <option value="1">1:00</option>
                        <option value="2">2:00</option>
                        <option value="3">3:00</option>
                        <option value="4">4:00</option>
                        <option value="5">5:00</option>
                      </select>
                      <span class="text-red-500">@error('endtime'){{ $message }}@enderror</span>
            </div>
              </div>

              <div class="">
                <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Date</label>
            <select wire:model="date" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded">
              <option value="monday">Monday </option>
              <option value="tuesday">Tuesday </option>
              <option value="wednesday">Wenesday </option>
              <option value="thursday">Thursday </option>
              <option value="friday">Friday </option>
            </select>
                   
                  <span class="text-red-500">@error('date'){{ $message }}@enderror</span>
              </div>
          
            <button 
                wire:click="submit()"
                class="w-full mt-6 text-indigo-50 font-bold bg-indigo-600 py-3 rounded-md hover:bg-indigo-500 transition duration-300">Assign</button>
          </div>
        </div>
      </div>
</div>
