<table>
    @foreach($array as $value)
              <tr>
                  @foreach($value as $item)
                  <td>
                    {{$item}}
                  </td>
                  @endforeach
              </tr>
    @endforeach
</table>

