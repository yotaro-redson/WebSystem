<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    
        <div style="border : 4px solid black;">
        <h2>Register</h2>

        <form action= "/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name='password' type="password" placeholder="password">
            <button>Register</button>
        </form>
        </div>
        <div style="border : 4px solid rgb(255, 75, 75); padding :6px"> 
            <h4> | Name and Password must be a minimum of 4 characters | </h4>

        </div>
    
    </body>
</html>