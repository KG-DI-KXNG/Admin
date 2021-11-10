<div>
    {{-- Stop trying to control. --}}
    <h1 class="text-2xl font-bold mb-0">Edit Info</h1>

    <table>
        <tr>
            <th class="font-extrabold  text-md te">Student Name</th>
            <th class="font-extrabold text-lg">D.O.B.</th>
            <th class="font-extrabold w-16 text-lg">Action</th>
        </tr>
        <tr>
            <td><x-input type="text" value="{{$name}}" wire:model="name" /></td>
            <td><x-input type="date" value="{{$dob}}" wire:model="dob" /></td>
            <td><button 
                    wire:click="submit()"
                    type="button" 
                    class="text-sm bg-green-600 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">update</button></td>
        </tr>
    </table>
</div>
