<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .register-box {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .register-box h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .register-box form {
            display: flex;
            flex-direction: column;
        }

        .register-box label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .register-box input {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .register-box input:focus {
            border-color: #006699;
            outline: none;
        }

        .register-box button {
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #006699;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .register-box button:hover {
            background-color: #004d66;
        }

        .register-box .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .register-box .login-link a {
            color: #006699;
            text-decoration: none;
        }

        .register-box .login-link a:hover {
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

    <div class="register-box">
        <h2>Create Account</h2>
    
      
        @if($errors->any())
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name"  required placeholder="Enter your name">
    
            <label for="email">Email</label>
            <input type="email" name="email"  required placeholder="Enter your email">
    
            <label for="password">Password</label>
            <input type="password" name="password"  required placeholder="Enter your password">
    
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation"  required
                placeholder="Confirm your password">
    
            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </div>
    </div>


</body>

</html>