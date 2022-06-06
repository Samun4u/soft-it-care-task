<!DOCTYPE html>
<html>
<head>
    <style>
        html {
            font-family: sans-serif;
        }
        table {
  border-collapse: collapse;
  border: 2px solid rgb(200,200,200);
  letter-spacing: 1px;
  font-size: 0.8rem;
}
td, th {
  border: 1px solid rgb(190,190,190);
  
}
</style>
    <meta charset="utf-8">
    <title>Task Two</title>
</head>

<body>

<h6>Current Month: {{date('F, Y')}}</h6>
    <table style="width: 100%;">
        <tr>  
            <td>ID</td>
            <td>Name</td>
            @foreach($days as $value)
            <td @if($value->format('w') == 5) style="background-color: coral;"@endif">{{$value->format('d')}}</td>
            @endforeach
        </tr>
        <tr>
            <td>58428</td>
            <td>Samun Mollik</td>
            @foreach($days as $key => $value)
            <td></td>
            @endforeach
        </tr>
    </table>

</body>

</html>