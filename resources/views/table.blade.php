<table class="table" style="width:100%" >
  <thead>
    <tr>
      <th scope="col" style="text-align: left;">SL</th>
      <th scope="col" style="text-align: left;">Name</th>
      <th scope="col" style="text-align: left;">Email</th>
      <th scope="col" style="text-align: left;">Phone</th>
    </tr>
  </thead>
  <tbody>
      @foreach($agents as $agent)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$agent->name}}</td>
      <td>{{$agent->email}}</td>
      <td>{{$agent->phone}}</td>
    </tr>
    @endforeach
  </tbody>
</table>