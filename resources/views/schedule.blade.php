<x-app-layout>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>
    <div class="py-12">
      <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden min-h-screen shadow-sm sm:rounded-lg">

                @if (request()->routeIs('schedule'))
                    
                @livewire('schedule')
                @else
                    @livewire("course")
                @endif
          </div>
      </div>
    </div>
               
         


</x-app-layout>