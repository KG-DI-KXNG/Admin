<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg justify-center flex">
      
        <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Component Form</h1>
            <form action="{{route('addStudent')}}" method="post">@csrf
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">First Name</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Last Name</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
                    <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="class">Class</label>
                    <input class="border py-2 px-3 text-grey-800" type="class" name="class" id="class">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="Date">Date of Birth</label>
                    <input class="border py-2 px-3 text-grey-800" type="date" name="date" id="date">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="contact">Contact #</label>
                    <input class="border py-2 px-3 text-grey-800" type="number" name="contact" id="contact">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Select Gender</label>
                    <select class="border py-2 px-3 text-grey-800" name="gender">
                        <option></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Save</button>
            </form>
        </div>
    </div>
        </div>
    </div>
</x-app-layout>