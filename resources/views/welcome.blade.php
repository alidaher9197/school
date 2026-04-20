@extends('layout.layout')
@section('main')
    <main>
            <h1>Main content</h1>
            <!-- Button -->
<button onclick="openLogin()">Login</button>

<!-- Modal -->
<div id="loginModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%;
background:rgba(0,0,0,0.5); justify-content:center; align-items:center;">

    <div class="login_alert">
        <h3>Login</h3>

        <form  method="POST" action="/login">
            <input type="email" name="email" placeholder="Email" required style="width:100%; margin-bottom:10px;">
            <input type="password" name="password" placeholder="Password" required style="width:100%; margin-bottom:10px;">

            <button type="submit">Login</button>
            <button type="button" onclick="closeLogin()">Close</button>
        </form>
    </div>
</div>
        </main>
@endsection
        

        