<div>
    <section class="py-1 bg-blueGray-50">
    
          <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-base text-blueGray-700">Class Schedule</h3>
            </div>
            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
              <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
            </div>
          </div>
        </div>
    
        <div class="block w-full overflow-x-auto">
          <table class="items-center bg-transparent w-full border-collapse ">
            <thead>
              <tr>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                              Course Session
                            </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Group
                            </th>
               <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                              Class Time
                            </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Class Day
                            </th>
             
              </tr>
            </thead>
    
            <tbody>
                {{-- {{dd($student)}} --}}
               @forelse ($schedules as $schedule)
               
               <tr>
                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                  {{$schedule->course->course_nm}} 
                </th>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                  {{$schedule->group->group_nm}} 
                </td>
                <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    @php
                       $return_value = match ($schedule->s_time) {
                        '1' => '1:00',
                        '2' => '2:00',
                        '3' => '3:00',
                        '4' => '4:00',
                        '5' => '5:00',
                        '6' => '6:00',
                    };
                    
                     $return_value1 = match ($schedule->e_time) {
                        '1' => '1:00',
                        '2' => '2:00',
                        '3' => '3:00',
                        '4' => '4:00',
                        '5' => '5:00',
                        '6' => '6:00',
                    };

                    echo $return_value." to ".$return_value1;


                    @endphp

                </td>
               <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$schedule->date}}</td>
                {{-- <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                  {{$schedule->date}}
                </td>  --}}
              </tr>
                @empty
                   <td colspan="4">No Available Class</td>
               @endforelse 
              
              
            </tbody>
    
          </table>
        
    </section>
</div>
