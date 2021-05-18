<!DOCTYPE html>
<html lang="en">
<head>
  <title>TeacherController data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" herf="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List teacher</h2>
  @if(session()->has ("success"))
    <div class="alert alert-success">
    {{ session("success") }}
    </div>    
  @endif
  <table class="table" id="tbl_list-students">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($students as $student )
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->mobile }}</td>
        <td>
        <a href="showstudent/{{ $student->id }}" class="btn btn-info">Edit</a>
        <a href="deletestudent/{{ $student->id }}" class="btn btn-primary">Delete</a>
        </td>
      </tr>
    @endforeach
      
    </tbody>
  </table>
</div>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#tbl_list-students').DataTable();
} );
</script>
</body>
</html>
