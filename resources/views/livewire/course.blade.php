<div class="w-full ">

  <div class=>
    @if(session('error'))
      <div class="container bg-green-300 text-black text-center text-2xl p-2 ">{{session('error')}}</div>
      @endif
      <div class=" flex bg-gray-50 p-6">
          <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
            <div class="py-12 p-10 bg-white rounded-xl">
              <div class="mb-6">
                <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Course Name</label>
                <input type="text" wire:model.lazy="courseName" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded">
                  <span class="text-red-500">@error('courseName'){{ $message }}@enderror</span>
              </div>
  

              <div class="grid grid-cols-2 gap-2">
                <div class="">
                      <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Choose a</label>
                      <select wire:model.lazy="teacher" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded">
                          <option hidden selected>--Select Type--</option>
                          @foreach ($teachers as $teacher)
                          
                            <option value="{{$teacher->id}}">{{$teacher->user->name}}</option>
                          @endforeach
                   
                            </select>
                            <span class="text-red-500">@error('teacher'){{ $message }}@enderror</span>
              </div>
            
              <button 
                  wire:click="submit()"
                  class="w-full mt-6 text-indigo-50 font-bold bg-indigo-600 py-3 rounded-md hover:bg-indigo-500 transition duration-300">Assign</button>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-10 bg-gray-100" >

        <table>
          <tr>
            <th>
              Course Name
            </th>
            <th>
              Assign Teacher  
            </th>
          </tr>
          @foreach ($courses as $course)
              
          <tr>
            <td>{{$course['course_nm']}}</td>
            <td>{{$course['teacher']['user']['name'] ?? null}}</td>
          </tr>
          @endforeach
        </table>
    
      </div>
  </div>
  