<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div style="border: 4px solid black;">
        <h1>Register Here</h1>
        <form action="/register" method="POST">
            @csrf

            <input name='name' type="text" placeholder="name">
            <button>Register</button>

        </form>
    </div>
    <div>
        <h1> [Name must be atleast 4 characters]</h1>
    </div>
    
</body>
</html>