<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #2c2b37;
}
.box{
    position: relative;
    width: 380px;
    height: 450px;
    background: #1c1c1c;
    border-radius: 10px;
    overflow: hidden;
}
.box::before{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 400px;
    background: linear-gradient(0deg,transparent,transparent,#019da8,#019da8,#019da8);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}
.box::after{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 400px;
    background: linear-gradient(0deg,transparent,transparent,#019da8,#019da8,#019da8);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}
.border-line{
    position: absolute;
    top: 0;
    inset: 0;
}
.border-line::before{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 400px;
    background: linear-gradient(0deg,transparent,transparent,#b7023e,#b7023e,#b7023e);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -1.5s;
}
.border-line::after{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 400px;
    background: linear-gradient(0deg,transparent,transparent,#b7023e,#b7023e,#b7023e);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -4.5s;
}
@keyframes animate {
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}
.box form{
    position: absolute;
    inset: 4px;
    background: #222;
    padding: 50px 40px;
    border-radius: 10px;
    z-index: 2;
    display: flex;
    flex-direction: column;
}
.box form h2{
    color: #fff;
    font-size: 26px;
    font-weight: 500;
    text-align: center;
    letter-spacing: 1px;
}
.input-box{
    position: relative;
    width: 300px;
    margin-top: 35px;
}
.input-box input{
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    box-shadow: none;
    color: #23242a;
    font-size: 16px;
    letter-spacing: 1px;
    transition: 0.5s;
    z-index: 10;
}
.input-box span{
    position: absolute;
    left: 0;
    padding: 20px 0px 10px;
    pointer-events: none;
    color: #8f8f8f;
    font-size: 16px;
    letter-spacing: 1px;
    transition: 0.5s;
    z-index: 10;
}
.input-box input:valid ~ span,
.input-box input:focus ~ span{
    color: #fff;
    font-size: 12px;
    transform: translateY(-34px);
}
.input-box i{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #fff;
    border-radius: 4px;
    overflow: hidden;
    transition: 0.5s;
    pointer-events: none;
}
.input-box input:valid ~ i,
.input-box input:focus ~ i{
    height: 44px;
}
.imp-links{
    display: flex;
    justify-content: space-between;
}
.imp-links a{
    color: #ececec;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}
.imp-links a:hover{
    color: #fff;
}
.btn{
    width: 40%;
    border: none;
    outline: none;
    padding: 10px;
    border-radius: 45px;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-top: 10px;
    cursor: pointer;
}
.btn:active{
    opacity: 0.8;
}

</style>
<body>
    <div class="box">
        <div class="border-line"></div>
        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <h2>Register</h2>
            @if(session('success'))
                <div class="alert success">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="error-messages">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color:red;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="input-box">
                <input type="text" name="name" required="required">
                <span>Nama</span>
                <i></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" required="required">
                <span>Email</span>
                <i></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="imp-links">
                <a href="#">Forget Password</a>
                <a href="{{ route('login') }}">Login</a>
            </div>
            <input type="submit" value="Register" class="btn">
        </form>
    </div>
</body>
</html>
