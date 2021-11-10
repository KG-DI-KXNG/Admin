<div class="flex justify-center">

<div class="mt-20">
    <x-label value="Student Name" class=" font-extrabold text-3xl"/>
    <select name="student" id="" 
    class="mt-1 block w-72 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
    wire:change="change($event.target.value)">
        <option value='' selected>{{'--'}}</option>
        @foreach ($studentInfo as $student)       
        <option value="{{$student['id']}}">{{$student['name']}}</option>
        @endforeach
    </select>
    <div>

@forelse ($number as $number)
    <li>{!! $number->numbers !!}</li>
@empty
    <p>No Record</p>
@endforelse

</div>
</div>
</div>
