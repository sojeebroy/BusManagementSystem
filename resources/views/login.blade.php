@extends('layouts.app')
<html>
  <head>
    <title>Login</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        }
        body {
        background: #fec107;
        padding: 0 10px;
        }
        .wrapper {
        max-width: 350px;
        width: 100%;
        background: #fff;
        margin: 130px auto;
        margin-top:250px;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125);
        padding-left: 20px;
        padding-top: 60px;
        padding-right: 20px;
        padding-bottom: 30px;
        border:1px solid;
        }

        .wrapper .title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #fec107;
        text-transform: uppercase;
        text-align: center;
        }

        .wrapper .inputfield {
        margin-bottom: 15px;
        display: block;
        align-items: center;
        }

        .wrapper .inputfield label {
        display: inline-block;
        width: 200px;
        color: #757575;
        margin-right: 10px;
        font-size: 14px;
        margin-bottom: 5px;
        padding-top: 10px;
        padding-bottom: 5px;
        }

        .wrapper .inputfield .input {
        width: 100%;
        outline: none;
        border: 1px solid #d5dbd9;
        font-size: 15px;
        padding: 8px 10px;
        border-radius: 3px;
        transition: all 0.3s ease;
        }

        .wrapper .inputfield .input:focus {
        border: 1px solid #fec107;
        }

        .wrapper .inputfield .btn {
        width: 100%;
        padding: 8px 10px;
        font-size: 18px;
        border: 0px;
        background: #fec107;
        color: #fff;
        cursor: pointer;
        border-radius: 3px;
        outline: none;
        margin-top: 10px;
        }

        .wrapper .inputfield .btn:hover {
        background: #ffd658;
        }

        .wrapper .inputfield:last-child {
        margin-bottom: 0;
        }

        .wrapper .inputfield p {
        font-size: 14px;
        color: #757575;
        text-align: center;
        margin-top: 10px;
        }
        .wrapper .inputfield a {
        display: block;
        text-align: center;
        margin-top: 10px;
        padding-top: 2px;
        font-size: 19px;
        font-weight: 500;
        color: #fec107;
        text-decoration: none;
        }
        .wrapper .inputfield a:hover {
        font-size: 22px;
        font-weight: 600;
        color: #0000ff;
        text-decoration: underline;
        }
        .wrapper .inputfield small {
        color: #e74c3c;
        visibility: visible;
        text-align: center;
        margin-left: 10px;
        }

    </style>


  </head>
  <body>
    <form action="/login" method="post">
        {{csrf_field()}}
      <div class="wrapper">
        <div class="title">Login</div>

        <div class="inputfield">
          <label>E-Mail</label>
          <input
            type="email"
            value=""
            name="email"
            class="input"
            id="accNum"
            placeholder="Enter Your E-mail"
            required
          />
        </div>

        <div class="inputfield" id="inputfield">
          <label>Password</label>
          <input
            type="password"
            value=""
            name="password"
            class="input"
            id="password"
            placeholder="Enter your password"
            required
          />
          <small id="small"></small>
        </div>

        <div class="inputfield">
          <input
            class="btn"
            type="submit"
            name=""
            value="login"
          />
        </div>
        <div class="inputfield">
          <p>Dont have an account?</p>
          <a href="/driverregistration">SignUp</a>
        </div>
      </div>
    </form>
  </body>
</html>

