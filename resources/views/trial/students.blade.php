<title>Students</title>
<link rel="stylesheet" href={{URL::asset('css/students.css')}}>

<div id="main">
    <table border="0" cellspacing ="5" cellpadding = "5">
        <tr>
            <th>No.</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
        </tr>
        @endforeach
    </table>
</div>