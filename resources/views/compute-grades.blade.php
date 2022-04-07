<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title> Average Grades </title>
</head>
<body>
    <div class="container-sm">
        <h1> Students Grades </h1>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col"> Student </th>
            <th scope="col"> Midterm Grades </th>
            <th scope="col"> Final Grades </th>
            <th scope="col"> Average </th> 
            <th scope="col"> Remarks </th>
</tr>
</thead>
<tbody>
    <tr>
        <td>{{ $student_1 }} </td>
        <td>{{ $s1_attempt1 }} </td>
        <td>{{ $s1_attempt2 }} </td>
        <td>{{ $s1_average }} </td>
        <td>{{$s1_remarks}} </td>
</tr>
<tr>
        <td>{{ $student_2 }} </td>
        <td>{{ $s2_attempt1 }} </td>
        <td>{{ $s2_attempt2 }} </td>
        <td>{{ $s2_average }} </td>
        <td>{{$s2_remarks}} </td>
</tr>
<tr>
        <td>{{ $student_3 }} </td>
        <td>{{ $s3_attempt1 }} </td>
        <td>{{ $s3_attempt2 }} </td>
        <td>{{ $s3_average }} </td>
        <td>{{$s3_remarks}} </td>
</tr>
<tr>
        <td>{{ $student_4 }} </td>
        <td>{{ $s4_attempt1 }} </td>
        <td>{{ $s4_attempt2 }} </td>
        <td>{{ $s4_average }} </td>
        <td>{{$s4_remarks}} </td>
</tr>
<tr>
        <td>{{ $student_5 }} </td>
        <td>{{ $s5_attempt1 }} </td>
        <td>{{ $s5_attempt2 }} </td>
        <td>{{ $s5_average }} </td>
        <td>{{$s5_remarks}} </td>
</tr>
</tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>