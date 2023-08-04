<h1>User Login</h1>


{{-- 
{{$errors}}
@if ($errors->any())
  @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
  @endforeach
    
@endif --}}

<form action="users-data" method="POST">
 @csrf
  <input type="text" name="username" placeholder="enteru user id"  value= "{{old('username')}} ">
  <span style="color:red">@error('username'){{$message}}@enderror</span>
  <br/> 
  <input type="password" name="password" placeholder="enter user password" value="{{old('password')}} ">
  <span style="color:red">@error('password'){{$message}}@enderror</span>
  <br/>
  <br/>
  <button type="submit">Login</button>
</form>