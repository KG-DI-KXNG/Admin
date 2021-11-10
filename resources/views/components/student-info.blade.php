<div class="">
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
    <div class="flex p-4">
                    <div class=" w-3/4 truncate overflow-hidden">
                        <table>
                            <tr>
                                <th class="font-extrabold  text-md te">Student Name</th>
                                <th class="font-extrabold text-lg">D.O.B.</th>
                                <th class="font-extrabold w-16 text-lg">Action</th>
                            </tr>
                            @foreach ($students as $student)
                            <tr>
                                <td class="truncate">{{$student->name}}</td>
                                <td class="truncate  font-serif">{{$student->dob}}</td>
                                <td><a href="/edit/{{$student->id}}" class="mr-2 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                    <a href="/delete/{{$student->id}}" class="text-sm bg-red-600 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</a></td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">{{$students->links()}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
</div>

