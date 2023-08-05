<h1>Members of the Organization</h1>

<table border="1">
<thead>
 <tr>
  <td>ID</td>
  <td>Name</td>
  <td>Email</td>
  <td>Address</td>
 </tr>
</thead>
<tbody>
 @if(count($users) !== 0)

   @foreach ($users as $user)
     <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->address}}</td>
     </tr>
   @endforeach
 @endif
</tbody>
</table>