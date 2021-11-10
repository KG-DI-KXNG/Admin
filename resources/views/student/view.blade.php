<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student') }}
        </h2>
    </x-slot>
    <div class="text-gray-900 bg-gray-200 min-h-screen">
        @if ($errors->any())
            <div class="container ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="px-3 py-4 flex justify-center">
            
            <form method="post">@csrf
            <table class="text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">First Name</th>
                        <th class="text-left p-3 px-5">Last Name</th>
                        <th class="text-left p-3 px-5">Email</th>
                        <th class="text-left p-3 px-5">Phone</th>
                        <th class="text-left p-3 px-5">Gender</th>
                        <th class="text-left p-3 px-5">DOB</th>
                        <th class="text-left p-3 px-5">Class</th>
                        <th class="text-left p-3 px-5">Action</th>
                    
                    </tr>
                    @forelse ($student as $students)
                 <tr class="border-b hover:bg-orange-100 hover:bg-gray-200 bg-gray-100">
                    <td class="p-3 px-5">{{$students->first_nm}}</td>
                        <td class="p-3 px-5">{{$students->last_nm}}</td>
                        <td class="p-3 px-5">{{$students->email}}</td>
                        <td class="p-3 px-5">{{$students->phone_nbr}}</td>
                        <td class="p-3 px-5">{{$students->gender}}</td>
                        <td class="p-3 px-5">{{$students->dob}}</td>
                        <td class="p-3 px-5">{{$students->class}}</td>

                        <td class="p-3 px-5 flex justify-end">
                            <x-button 
                                formaction="/show/{{$students->id}}"
                                name="_method"
                                value="get"
                                class="mr-2">
                                View</x-button>

                            <a href="/edit/{{$students->id}}" class="mr-2 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                            
                                <button 
                                formaction="/delete/{{$students->id}}"
                                name="_method"
                                value="delete"
                                class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                Delete</button>
                        </td>
                        {{-- <td class="p-3 px-5">
                            <a href="/edit/{{$students->id}}" class="mr-3 text-sm bg-gray-500 hover:bg-gray-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">add</a>
                            <button 
                                formaction="/delete/{{$students->id}}"
                                name="_method"
                                value="delete"
                                class="text-sm bg-gray-500 hover:bg-gray-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                view</button></td> --}}
                        
                    </tr>  
                    
                    @empty
                        <tr>
                            <td colspan="4">No records</td>
                        </tr>
                    @endforelse
                    <tr>
                        <td colspan="6">{{ $student->links() }}</td>
                    </tr>
                    
                    @isset($editStudent)
                        @foreach ($editStudent as $edit)
                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                            <td class="p-3 px-5"><input name="first_name" class="w-24 border-2 focus:border-red-600" selected type="text" value="{{$edit['first_nm']}}"></td>
                            <td class="p-3 px-5"><input name="last_name" class="w-24 border-2" type="text" value="{{$edit['last_nm']}}"></td>
                            <td class="p-3 px-5"><input name="email" class="w-48 border-2" type="email" value="{{$edit['email']}}"></td>
                            <td class="p-3 px-5"><input name="contact" class="w-24 border-2" type="number" value="{{$edit['phone_nbr']}}"></td>
                            <td class="p-3 px-5"><input name="gender" class="w-16 border-2" type="text" readonly value="{{$edit['gender']}}"></td>
                            <td class="p-3 px-5"><input name="date" class="w-34 border-2" type="date" value="{{$edit['dob']}}"></td>
                            <td class="p-3 px-5"><input name="class" class=" border-2" type="text" value="{{$edit['class']}}"></td>
                        

                            <td class="p-3 px-5 flex justify-end">
                                <button 
                                    formaction="/update/{{$edit['id']}}" 
                                    name="_method"
                                    value="put"
                                    class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                    Update</button>
                                <a href="{{route('viewStudent')}}"><button 
                                    type="button" 
                                    class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                    Cancel</button></a>
                            </td>
                        </tr>   
                        @endforeach
                                            
                    @endisset
                    
                </tbody>
            </table>
        </form>

        </div>
    </div>
</x-app-layout>