<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .login-box {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .login-box form {
            display: flex;
            flex-direction: column;
        }

        .login-box label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .login-box input {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .login-box input:focus {
            border-color: #006699;
            outline: none;
        }

        .login-box button {
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #006699;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-box button:hover {
            background-color: #004d66;
        }

        .login-box .register-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-box .register-link a {
            color: #006699;
            text-decoration: none;
        }

        .login-box .register-link a:hover {
            text-decoration: underline;
        }
        .error{
            background: #f8d7da; 
            color: #721c24;
             padding: 10px;
              border-radius: 5px; 
              margin-bottom: 15px;"
        }
        .error ul{
            margin:0; 
            padding-left: 20px;"
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
    
        
        @if($errors->any())
            <div  class="error">
                <ul >
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email"  required placeholder="Enter your email">
    
            <label for="password">Password</label>
            <input type="password" name="password"  required placeholder="Enter your password">
    
            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            Don't have an account? <a href="{{ route('register') }}">Register</a>
        </div>
    </div>


</body>

</html>