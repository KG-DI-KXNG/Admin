<x-app-layout>
    <x-slot name="header">
        {{__('Student Details')}}
    </x-slot>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
            <div class="container text-white font-semibold rounded-md bg-green-400 p-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li >{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full flex justify-center bg-gray-200 ">
                <div class="rounded-xl bg-white my-10 border-8 w-full md:w-2/3 lg:w-2/3">
                    <div class="px-5 py-3 flex items-center justify-between text-blue-400 border-b">
                    {{-- <i class="fas fa-times text-xl"></i> --}}
                        <p class="text-black text-lg font-extrabold">Student Name: </p><span class="font-serif ml-4">{{$info['first_nm']." ".$info['last_nm']}}</span>
                    <a href="{{route('viewStudent')}}" class="inline hover:bg-blue-100 ml-auto px-4 py-3 rounded-full font-bold cursor-pointer">Cancel</a>
                    </div>

                    <div class="flex p-4">
                    <div class=" w-3/4 truncate overflow-hidden">
                        <table>
                            {{-- <tr>
                                <td class="font-extrabold text-md te">Student Name:</td>
                                <td class="truncate max-w-0">{{$info['first_nm']." ".$info['last_nm']}}</td>
                            </tr> --}}
                            <tr>
                                <td class="font-extrabold text-lg">D.O.B.:</td>
                                <td class="truncate max-w-0 font-serif">{{$info['dob']}}</td>
                            </tr>
                            <tr>
                                <td class="font-extrabold text-lg">Class:</td>
                                <td class="truncate max-w-0 font-serif">{{$info['class']}}</td>
                            </tr>
                            <tr class="w-1">
                                <td class="font-extrabold text-lg">Email:</td>
                                <td class="truncate max-w-xs font-serif">{{$info['email']}} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                    <div class="ml-3 flex flex-col justify-end w-full">
                        <div class="w-full text-sm border-2 outline-none h-32">
                        <ol>
                            <li class="w-full bg-gray-300 mb-2 text-center"> Added Subjects (max:5)</li>
                            @forelse ($info['choice'] as $course)
                            <li class=" list-disc ml-5" >{{$course['subject']['subject_nm']}}</li>
                                
                            @empty
                                No records
                            @endforelse
                        </ol>
                    </div>
                        <div class="cursor-pointer text-blue-400 -ml-4">
                        <button type="button" class="inline hover:bg-blue-100 mt-6 px-4 py-3 rounded-full" onclick="addSubject()">Add Subject</button>
                        </div>
                    </div>
                    </div>
                    <form action="{{route('postStudent')}}" method="post">@csrf
                    <div class="items-center text-blue-400 justify-between py-6 px-4 border-t hidden" id="addSub">
                    <div class="flex text-2xl pl-12">
                        <input type="number" name="id" hidden value="{{$info['id']}}" >
                        <table>
                            <tr>
                                <th><x-label value="Subject"/> </th>
                                <th><x-label value="Year Of Exam" /> 
                                   
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <select name="subject" id="subject" class="w-72 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        @foreach ($subject as $item)
                                        <option value="{{$item->id}}">{{$item->subject_nm}}</option>      
                                        @endforeach
                                    </select>           
                                </td>
                                <td>
                                  <x-input type="number" class="ml-2" name="year" required onkeydown="limit(this);" onkeyup="limit(this);" />
                                </td>
                            </tr>
                        </table>
                        

                      
                    </div>

                    <div>
                        <button class="inline px-4 py-3 rounded-full font-bold text-white bg-blue-300 hover:bg-blue-400 cursor-pointer">
                            Add</button>
                    </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addSubject(){
            let addSub = document.getElementById('addSub');
            addSub.classList.remove("hidden");
            addSub.classList.add("flex");
        }
        function limit(element)
        {
            var max_chars = 4;
            if(element.value.length > max_chars) {
                element.value = element.value.substr(0, max_chars);
            }
        }
    </script>
    
</x-app-layout>