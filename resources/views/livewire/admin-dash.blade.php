<div class="w-full">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Type of user</th>
            <th colspan="3">Action</th>
        </tr>
        @foreach ($users as $user)
            
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @if ($user->user_type == 0)
                {{"Student"}}
                @elseif ($user->user_type == 1)
                {{"Admin"}}
                @elseif ($user->user_type == 2)
                {{"Teacher"}}
                @endif
            
            
            </td>
            <td><button class="no-underline hover:underline hover:text-blue-600" value="{{$user->id}}" wire:click="editUser($event.target.value)">Edit</button> </td>
            <td>view</td>
            <td><button class="no-underline hover:underline hover:text-red-500" value="{{$user->id}}" wire:click="deleteUser($event.target.value)">Delete</button></td>
        </tr>
        @endforeach
        @if ($edit)
        <tr>
            <td><input type="text" wire:model.lazy="name">
                <span class="text-red-500">@error('name'){{ $message }}@enderror</span>
            </td>
            <td><input type="email" wire:model.lazy="email">
                <span class="text-red-500">@error('email'){{ $message }}@enderror</span>
            </td>
            <td>@if ($user->user_type == 0)
                {{"Student"}}
                @elseif ($user->user_type == 1)
                {{"Admin"}}
                @elseif ($user->user_type == 2)
                {{"Teacher"}}
                @endif</td>
                <td colspan="1"><button wire:click="changeInfo({{$user->id}})">Update</button></td>
                <td colspan="2"><button onclick="window.location.reload();">Cancel</button></td>
        @endif
    </tr>   
        <tr>
            <td colspan="6">{{ $users->links() }}</td>
        </tr>

    </table>
    
</div>
