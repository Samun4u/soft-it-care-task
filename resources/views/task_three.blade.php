@php
$array_str = explode(" ", $str);
@endphp
{{$str}}<br>
@foreach($array_str as $value)
@php
array_pop($array_str);
@endphp
{{implode(" ", $array_str)}}<br>
@endforeach
@php
$array_str_two = explode(" ", $str);
$newArray = [];
$i=0;
@endphp
@foreach($array_str_two as $v)
@php
$i++;
array_push($newArray, $v);
@endphp
@if($i>1)
{{implode(" ", $newArray)}}<br>
@endif
@endforeach
