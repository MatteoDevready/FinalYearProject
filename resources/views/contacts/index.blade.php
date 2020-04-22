</<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1 align="center">inner join</h1>
<table class= "table table-bordered">
<tr>
<th>Group ID</th>
<th>Contact name</th>
<th>email</th>
</tr>
@foreach ($data as $row)
<tr>
<td> {{ $row->id}} </td>
<td> {{ $row->name}} </td>
<td> {{ $row->email}} </td>
</tr>
@endforeach
</table>
</body>
</html>