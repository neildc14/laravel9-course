<h1>User Login</h1>


<form action="users-data" method="POST">
 @csrf
  <input type="text" name="username" placeholder="enteru user id">
  <br/> <br/>
  <input type="password" name="password" placeholder="enter user password">
  <button type="submit">Login</button>


</form>