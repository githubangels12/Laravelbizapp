 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg. Form</title>
    <!-- <link rel="stylesheet" href="SeventhAss2.css"> -->
  
</head>

<style>
    *{
    margin: 0px;
    padding-left: 0px;
    box-sizing: border-box;
}
.All{
    background-color:rgb(215, 247, 247);
    display: flex;

}
.Back{
display: flex;
margin-left: 300px;
background-color: lightgray;
border-radius: 15px;
margin-top: 15px;
margin-bottom: 20px;
height: 630px;
width: 900px;
}
label{
    font-size:large;

}
input{
    border-radius: 5px;
    height: 40px;
    width: 200px;
    margin-right: 10px;
}
.Alpha, .Beta, .Gamma, .Delta{
    margin-top: 15px;
}
/* .alpha, .Beta, .Gamma, .Delta, .Eee{ */
.inputfields{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    margin-bottom: 20px;
    width: 150px;  
}
.pix1{
    height: 570px;
    width: 400px;
    margin-top: 30px;
    margin-left: 30px;
    margin-bottom: 10px;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
   }
.Right{
    margin-top: 30px;
    margin-left: 20px;   
}
.register{
    border-radius: 15px;
    width: 150px;
    height: 50px;
    margin-left: 140px;
    background-color: blue;
    color: white;
    cursor: pointer;
}
.register:hover{
    background-color: darkcyan;

}
</style>
<body>
    <div class="All">
        <div class="Back">


            <figure class="pix">
                <img class="pix1" src="com.jpg">
            </figure>
            <div class="Right">
                <h1>Registration Form</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
            
                    <div class="inputfields">
                    <div class="Alpha">
                        <div>
                            <label>Name</label>
                            <input  id="name" type="text" name="name" placeholder="Name" required>
                        </div>
                        
                    </div>
                    <div class="Beta">
                        <div>
                            <label>Email</label>
                            <input id="email" type="email" name="email" placeholder="e-mail">
                        </div>
                       
                    </div>
                    <div class="Gamma">
                        <div>
                            <label>Password</label>
                            <input id="password" type="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="Delta">
                        <label>Password comfirmation</label>
                        <input id="password_comfirmation" type="password"
                        name="password_confirmation" placeholder="Comfirm password"></p>
                    </div>
                    </div>
                   <a href="{{route('login')}}"></a>
                   
                    {{-- <div class="register"> --}}
                        <input class="register" type="submit" value="register">
                    {{-- </div> --}}
            </div>

            </form>
        </div>
    </div>
    </div>
</body>

</html>
