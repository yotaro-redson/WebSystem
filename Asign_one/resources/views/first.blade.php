<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>First</title>
</head>
<body>
  @csrf
  <div>
    <h1>This is the first page</h1>
  </div>
  <div class="links">
    <a href="{{url('second')}}" style="color: blue">Second page</a>
    <a href="{{url('third')}}" style="color: green">Third page</a>
    
  </div>

</body>
</html>