<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    @auth

    <p>Already Logged In</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>

    </form>

    @else
    <div style="border: 4px solid black;">
        <h1>Register Here</h1>
        <form action="/register" method="POST">
            @csrf

            <input name='name' type="text" placeholder="name">
            <input name='email' type="text" placeholder ="email">
            <input name ='password' type="password" placeholder ="password">
            <button>Register</button>

        </form>
        <div>
            <h1> [Name must be atleast 4 characters]</h1>
        </div>
    </div>
    <div style="border: 4px solid black;">
        <h1>Login Here</h1>
        <form action="/login" method="POST">
            @csrf

            <input name='loginname' type="text" placeholder="name">
            <input name ='loginpassword' type="password" placeholder ="password">
            <button>Login</button>

        </form>
    </div>
        
    @endauth
    
</body>
</html>