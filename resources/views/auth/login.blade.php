{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- <link rel="stylesheet" href="SeventhAss1.css"> -->

</head>
<style>
    
    *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
.Back{
border-radius: 15px;
width: 750px;
background-color:lightblue;
display:flex;
margin-top: 50px;
margin-left: 400px;
}
.Left{
    background-color: aqua;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
    height: 500px;
    width: 350px;
    margin-left: 30px;
    margin-top: 30px;    
}
.Write{
    display: grid;
    margin-left: 25px;
}

.T{
    font-size: xx-large;
    font-weight: 30px;
    margin-top: 40px;
    margin-left: 25px;
}

input{
    border-radius: 5px;
    width: 300px;
    height: 40px;
    margin-bottom: 20px;
}
label{
    font-size: larger;
}
img{
    max-width: 90%;
    height: 500px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    margin-top: 30px;
    margin-bottom: 30px;
}
button{
    margin-top: 15px;
    border-radius: 15px;
    width: 100px;
    height: 50px;
    margin-left: 95px;
    background-color: blue;
    color: white;
    cursor: pointer;
}
button.enter:hover{
    background-color: green;
}
.Fill{
    margin-top: 15px;
}


</style>

<body>
    <div class="Back">
    <div class="Left">
        <div class="T">
            <h3>Login Form</h3>
        </div>


        <div class="Fill">
            <form class="Write" method="POST" action="{{ route('login') }}">
                @csrf

                <label for="Email"> Email </label>
                <input  id="email" type="email" placeholder="Email" name="email" required>

                <label for="Password">Password</label>
                <input id="password" type="password" placeholder=" Password"  name="password" required>

                
                
                <button class="enter">Login</button>
                
            </form>
        </div>
    </div>

    <div >
        <figure>
            <img src="com 2.jpg" alt="">
        </figure>
    </div>
</div>

</body>

</html>