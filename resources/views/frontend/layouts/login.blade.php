@extends('frontend.master')
    @push('style')
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        *{

            box-sizing: border-box;
            font-family: 'Poppins' , sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #23242a;
        }
        .box{
            position:relative;
            width: 380px;
            height: 420px;
            background: #1c1c1c;
            border-radius : 8px;
            overflow: hidden;
        }
        .box::before{
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
            transform-origin: bottom right;
            z-index: 1;
            animation: animate 6s linear infinite;
        }
        .box::after{
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
            transform-origin: bottom right;
            z-index: 1;
            animation: animate 6s linear infinite;
            animation-delay: -3s;
        }
        .borderLine {
            position: absolute;
            top: 0;
            inset: 0;
        }
        .borderLine::before{
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
            transform-origin: bottom right;
            z-index: 1;
            animation: animate 6s linear infinite;
            animation-delay: -1.5s;

        }
        .borderLine::after{
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
            transform-origin: bottom right;
            z-index: 1;
            animation: animate 6s linear infinite;
            animation-delay: -4.5s;
        }
        @keyframes animate{
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
            border-radius : 8px;
            z-index: 2;
            display: flex;
            flex-direction: column;
        }
        .box form h2{
            color: #fff;
            font-weight: 500;
            text-align: center;
            letter-spacing: 0.1em;
        }
        .box form .inputBox{
            position: relative;
            width: 300px;
            margin-top: 35px;
        }
        .box form .inputBox input{
            position: relative;
            width: 100%;
            padding: 20px 10px 10px ;
            background: transparent;
            outline: none;
            border: none;
            box-shadow: none;
            color: #23242a;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            z-index: 10;
        }
        .box form .inputBox span{
            position: absolute;
            left: 0;
            padding: 20px 10px 10px;
            pointer-events: none;
            color: #8f8f8f;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }
        .box form .inputBox input:valid ~ span,
        .box form .inputBox input:focus ~ span{
            color: #fff;
            font-size: 0.75em;
            transform: translateY(-34px);
        }
        .box form .inputBox i{
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
        .box form .inputBox input:valid ~ i,
        .box form .inputBox input:focus ~ i{
            height: 44px;
        }
       .box form .links{
        display: flex;
        justify-content: space-between;
       }
       .box form .links a{
        margin: 10px 0;
        font-size: 0.75em;
        color:#8f8f8f;
        text-decoration: none;
       }
       .box form .links a:hover,
       .box form .links a:nth-child(2){
        color: #fff;
       }
       .box form .inputBox input[type="submit"]{
        border: none;
        outline: none;
        padding: 9px 25px;
        background: #fff;
        cursor: pointer;
        font-size: 0.9em;
        border-radius: 4px;
        font-weight: 600;
        width: 100px;
        margin-top: 10px;
       }
       .box form .inputBox input[type="submit"]:active{

        }
    </style>
    @endpush
@section('content')
<div class="box">
    <span class="borderLine"></span>
    <form action="">
        <h2>Sign in</h2>
        <div class="inputBox">
            <input type="text" required>
            <span>Email:</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" required>
            <span>Password:</span>
            <i></i>
        </div>
        <div class="links">
            <a href="#">Forgot Password</a>
            <a href="#">Signup</a>
        </div>
        <input type="submit" value="Login">
    </form>
</div>
@endsection
