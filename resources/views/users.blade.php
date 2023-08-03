<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title> Submit User </title>
</head>
<body>
   <x-header data="The header is access through th users page"/>
   <main class="h-full bg-emerald-300 ">
    <h1>USER PAGE</h1>

    {{-- @if($user == "Neila")
     <h3>Hello {{$user}}</h3>
    @else
     <h3>Hello Visitor</h3>
    @endif


    @for($i = 0; $i <= 10; $i++)
     <h2>NUMBER IS {{$i}}</h2>
    @endfor --}}



    
    @foreach ($users as $user)
     <h2>{{$user}}</h2>   
    @endforeach


    @foreach($persons as $key => $value)
    Key: {{ $key }}, Value: {{ $value }}
    @endforeach

   
    

   </main>
   
   <x-footer/>
</body>
</html>
