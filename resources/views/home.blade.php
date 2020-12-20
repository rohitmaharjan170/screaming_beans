@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, innital-scale=1.0">
    <title>SCREAMING BEAN'S CAFE</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/animate.css">

</head><body>

    <header >
        <nav class="navbar navbar-expand-lg">
            <a href="#" class="navbar-brand animate rubberBand"><img src="../image/logo.png" class="logogg" width="10px" height="10px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"></div>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item "><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item "><a href="#reservation" class="nav-link">Reservation</a></li>
                    <li class="nav-item "><a href="#menu" class="nav-link">Menu</a></li>
                    <li class="nav-item "><a href="#shop" class="nav-link">Shop</a></li>
                    <li class="nav-item "><a href="#contact" class="nav-link">Contact</a></li>
                    <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Accounts</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="nav-link" href="#accounts">View your profile</a>
       <a class="nav-link " href="#accounts">Sign Up for account</a>
       <a class="nav-link " href="#accounts">Log In </a>
        @if(Auth::user())<div class="dropdown-divider"> </div>
        <a class="nav-link" href="#"><a class="b" href="{{ url('/logout') }}"> logout </a></a>@endif
    </div>

     @if(Auth::user())
     @if(Auth::user()->is_admin)
      <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="nav-link" href="{{ route('members.index') }}">Members</a>
       <a class="nav-link " href="{{ url('/items/create') }}">Items</a>
        <a class="nav-link " href="{{ url('/reservations/viewres') }}">Reservation</a>
       </div>
       @endif
        @endif

</li>


                </ul>   
                </div>

      

        </nav>
    </header>   
<main>
        <div class="site-content">
    <div class="container-fluid p-0">
            <div class="d-flex justify-content-center">
                <div class="d-flex flex-column">
                <h1 class="site-title">SCREAMING BEAN'S CAFE</h1>
                <p class="site-desc">Experience LOVE At Very FIRST SIP </p>

                <div class="d-flex flex-row">
                  <a href="#workshopdd">  <input type="button" value="VISIT WORKSHOP" class="btn site-btn1 px-4 py-3 mr-4 brn-dark"></a>
                  @if(Auth::user())
                   <a href="pick.html">  <input type="button" value="PICK GRAB & GO" class="btn site-btn2 px-4 py-3 mr-4 brn-light"></a>
                   @else
                   <a href="pick.html">  <input disabled type="button" value="PICK GRAB & GO" class="btn site-btn2 px-4 py-3 mr-4 brn-light"></a>
                   @endif
                </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="section-1">
        <a name="about">
        <div class="container text-center">
            <h1 class="heading-1"> VALLEY'S BEST COFFEE SHOP</h1>
            <p class="para-1">
                Screaming bean's cafe is located at one of the core city of kathmandu valley at Tribhuvan mall. It serves the best coffee with well-being services. Come and visit us and try the new taste of Coffee for free and become a free membership of Screaming Beans's Cafe. <br><br> The cofffee we serve are made from the finest beans produced and grinded in the land of Nepal<br><br>
            </p>
            <div class="row justify-content-center text-center">
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <img src="../image/shop.jpg" alt="location" class="card-img-top" >
                        <div class="card-body"><h4>Tribhuvan Mall</h4>
                            <p class="../image/-text"> Opening Hours 05:00 AM - 11:00 PM</p></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <img src="../image/tastee.jpg" alt="taste" class="card-img-top" height="172px">
                            <div class="card-body"><h4>Coffee Taste</h4>
                                <p class="card-text">Try new taste of coffee for free</p></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width:20rem;">
                        <img src="../image/family.jpg" alt="fam" class="card-img-top" height="172px">
                            <div class="card-body"><h4>Become a free membership</h4>
                                <p class="card-text">Great Hospitality for family</p></div>
                    </div></div>

    </div></div></a></div>

    <div class="section-2">
        <a name="reservation">
        <div class="container-fluid">
            <div class=" d-flex justify-content-end">
                <div class="d-flex flex-column">
                    <h1 class="heading-1">Great place to get<br> your stuff done with <span style="color: #d82958">warm coffee</span></h1>
                    <p class="para" >Enjoy your day with fast internet  served with a cup of Coffee </p>
                    @if(Auth::user())
                    <a href="{{ URL::to('reserv/') }}">
                    <input type="button" value="Reservation: Book a Table" class="btn btn-danger"></a>
                    @else
                    <input disabled type="button" value="Login first to make a Reservation" class="btn btn-danger">
                    @endif
                </div>

            </div>
        </div></a>
    </div>

<div class="section-0"> 
     <a name="accounts">
        <h1 class="heading-1"> ACCOUNTS</h1>    

            <div class="container-fluid row">    
              
                          <div class="col-md-4 pb-2">
            <div class="card bg-dark text-white ">
                <div class="card-header">{{ __('Login ') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @if(Auth::user())
                                <button disabled type="submit" class="btn btn-danger">
                                    {{ __('Login') }}
                                </button>
                                @else
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @endif
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div></div>
        
              
                
        <div class="col-md-4 pb-2" style="padding-left:40px">
            <div class=" card bg-dark text-white">
                <div class="card-header">{{ __('Sign up for Free ') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-7">
                               <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required >

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" name="address" required>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Mobile</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" name="mobile" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if(Auth::user())
                                <button disabled type="submit" class="btn btn-danger">
                                    {{ __('Register') }}
                                </button>
                                @else
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <div class="col-md-4 pb-2"style="padding-left:40px">
            <div class=" card bg-dark text-white">
                <div class="card-header">{{ __('YOUR PROFILE') }}</div>
                
            
                <div class="card-body">
                   @if(Auth::user())
                <div class="form-group row">
                          Name: {{ $users->name }} <br>
                          Address: {{ $users->address }} <br>
                          Admin: {{ $users->is_admin  }} <br>
                          Contact no: {{ $users->mobile }} <br>
                          @if(!empty($reserv->tbl_id))
                            Reservation on Table no:{{ $reserv->tbl_id }} <br>
                            Latest reservation time: {{ $reserv->reservation_time }}<br>
                            @else
                            Reservation on Table no: NULL <br>
                            Latest reservation time: NULL<br>
                            @endif
                              @if(!empty($ord->it_id))
                            Your Grab and GO: {{$ord->it_name}}
                              @else
                              Your Grab and GO: NULL
                               @endif
                        <br> 
                        <a class="#" href="{{ url('/logout') }}"> logout </a> 
                        </div>
                        @else
                        <div>
                            You are not logged in!!!
                        </div>
                        @endif





                </div></div></div>


         </div>  </a></div>



    <div class="section-3">
        <a name="menu">
        <div class="container">
        <h1 class="heading-1"> MENU</h1>
        
        <div class="row">
                <div class="col1">
                    <div class="box">
                        <div class="menuimg" >
                        <img src="../image/mochaa.jpg" height="440px" width="740px"> 
                    </div>
                        
                        <div class="detail"></div>
                        <h2>Mocha<br> <span style="color: red">RS 160</span></h2>
                    </div></div>

                <div class="col2">
                    <div class="box">
                        <div class="menuimg">
                        <img src="../image/macchito.png" height="440px" width="741px" > </div>
                       
                        <div class="detail"></div>
                        <h2>Macchito<br> <span style="color: red">RS 160</span></h2>
                    </div></div>
        </div>

        <div class="row">
                <div class="col1">
                    <div class="box">
                        <div class="menuimg">
                        <img src="../image/latte.png" height="440px" width="740px"> </div>
                        
                        <div class="detail"></div>
                        <h2>Latte<br> <span style="color: red">RS 180</span></h2>
                    </div></div>

                <div class="col2">
                    <div class="box">
                        <div class="menuimg">
                        <img src="../image/hotchoclate.png" height="440px" width="740px"> </div>
                        
                        <div class="detail"></div>
                        <h2>Hot Chocolate<br> <span style="color: red">RS 190</span></h2>
                    </div></div>
        </div>

        <div class="row">
                <div class="col1">
                    <div class="box">
                        <div class="menuimg">
                        <img src="../image/amecrino.png" height="440px" width="740px"> </div>
                        
                        <div class="detail"></div>
                        <h2>Americano<br> <span style="color: red">RS 90</span></h2>
                    </div></div>

                <div class="col2">
                    <div class="box">
                        <div class="menuimg">
                        <img src="../image/cappuccino.png" height="440px" width="740px"> </div>
                       
                        <div class="detail"></div>
                        <h2>Cappuchino<br> <span style="color: red">RS 180</span></h2>
                    </div></div>

        </div>
        
        <div class="row">
                <div class="col1">
                    <div class="box">
                        <div class="menuimg">
                        <img src="../image/choclateshake.png" height="440px" width="740px"> </div>
                        
                        <div class="detail"></div>
                        <h2>Chocolate Shake<br> <span style="color: red">RS 200</span></h2>
                    </div></div>

                <div class="col2">
                    <div class="box">
                        <div class="menuimg">
                        <img src="../image/stawberryshake.png" height="440px" width="740px"> </div>
                       
                        <div class="detail"></div>
                        <h2>Stawberry Shake<br> <span style="color: red">RS 200</span></h2>
                    </div></div>
        </div>
            
    </div>
</div></div></a>
</div>


<div class="section-4">
        <a name="shop">
        <div class="container">
        <h1 class="heading-1">SHOP</h1>
            <div class="leftimg" style="background-image:url(../../image/shop7.jpg);" data-text="Espresso Coffee bar &nbsp &nbsp &nbsp &nbsp Rs 230
            Have a powerful day with hard espresso"> </div> 

            <div class="centerimg" style="background-image:url(../../image/shop2.jpg);" data-text="Max Protien coffee bar &nbsp &nbsp &nbsp &nbsp Rs 210
            Gain maximum protien with a cup of coffee"> </div> 

            <div class="rightimg" style="background-image:url(../../image/shop8.jpg);" data-text="Americano Coffee beans &nbsp Rs 210
            Have am Americano coffee in moring for a powerful day"> </div> 

            <div class="leftimg" style="background-image:url(../../image/shop6.jpg);" data-text="Hot Chocolate Beans &nbsp &nbsp &nbsp Rs 250
            Hot Morning with Hot Chocolate coffee"> </div> 

            <div class="centerimg" style="background-image:url(../../image/shop1.jpg);" data-text="Green coffee beans &nbsp &nbsp &nbsp &nbsp &nbsp Rs 210
            Healthy and Tasty"> </div> 

            <div class="rightimg" style="background-image:url(../../image/shop5.jpg);" data-text="Mochha Coffee Beans &nbsp &nbsp &nbsp &nbsp Rs 230
            Make everyday delicious Mochha at home"> </div> 
        </div>
    </a>
</div> 


<div class="section-5">
        <a name="workshopdd">
        <div class="container">
        <h1 class="heading-1">OUR WORKSHOP</h1>
        <div class="workshimg">
            <img src="../../image/worksh.png" height="430px" width="660px">
        <div class="vl"></div>
        <div class="workdesc"> We are proud to showcase our very own workshop; also encourage every coffee passionate person to join us and have fun with us making coffee at its finest. I got a song filled with shit for the strong willed When the world gives you a raw deal Set you off 'til you Scream, "COFFEEEE" When it talks to you like you don't belong Or tells you you're in the wrong field When something's in your mitochondrial 'Cause it latched on to you, like
            <br>
        Hailie I know you miss your mom and I know you miss your dad Well I'm gone but I'm trying to give you the life that I never had I can see you're sad, even when you smile.
        </div>
        

    </div></div>
</a>
</div>



<div class="section-6">
        <div class="jumbotron">
        <h1 class="heading-1">OUR BARISTAs</h1>
            <div class="row justify-content-center text-center">
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <img src="../image/Barista1.jpg" class="card-img-top" >
                        <div class="card-body"><h4>Scralett Doe</h4>
                            <p class="../image/-text"><font size="4" color="red"> Foundation Barista</font><br>I have measured out my life with coffee spoons.... </p></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <img src="../image/barista3.jpg" class="card-img-top" height="172px">
                            <div class="card-body"><h4>Cliff Burton</h4>
                                <p class="card-text"><font size="4" color="red">Coffee Engineer</font> <br> Coffee is a beverage that puts one to sleep when not drank....</p></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <img src="../image/barista2.jpg" class="card-img-top" height="172px">
                            <div class="card-body"><h4>Hanna Yanna</h4>
                                <p class="card-text"><font size="4" color="red">Roaster Master</font> <br> A mathematician is a device for turning coffee into theorems....</p></div>
                    </div></div>

    </div>
</div>
</div>



<footer class="foot"> 
    <a name="contact">
        <div class="row">
            <div class=" col left-foot ">
        <h3 style="text-decoration:underline;"> SCREAMING BEANS</h3><br>
        <p>Bring home the coffee they serve in award winning restaurants.</p>

        <p style="margin-top:2px;">   <i class="fa fa-map-marker" style="padding-right:2px;"></i> Thamel,Kathmandu</p>

        <p>  <i class="fa fa-phone" style="padding-right: 5px;" onclick="enl();"></i>(+01)-5534334, (+977)9899654125 </p>
        
        <img src="../../image/certificate.jpg" height="200px" width="150px">
        <div class="copyr"> Screaming Beans Cafe estd 2018 under the innovative Barista Cliff Burton supported by Rooster Beans for fresh coffee beans. <br><br>
        Copyright under Screaming bean's @2019</div>
    </div>

    <div class=" col middle-foot ">
        <h6 style="text-decoration:underline;"> NEWSLETTER</h6><br><br>     
        <h4> Be the first one to know about us</h4>
        <div id="in2"  v-bind:title="message">
        <input type="text" id="in1" placeholder="Enter your email"/>
            <i class="fa fa-envelope fa-1x"></i>
            <br>
            <br>
            <p>

                <div class="card-body">
                    <h6 style="text-decoration:underline;"> Our SOCIALS</h6><br> <br>
            <div id="social">
            <div class="containersos">
                <a href="https://www.facebook.com/"  class="btn2"> <i class="fa fa-facebook-f"></i>  </a>

               <a href="https://www.twitter.com"  class="btn2 "><i class="fa fa-twitter"></i>  </a>

                <a href="https://www.gmail.com" class="btn2"><i class="fa fa-google"></i>  </a>
                         </div>
                     </div>
    
        </div></p>
     </div>
 </div>
    <div class="colgraph">
        <div class="mapouter"><div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=thamel%2Ckathmandu&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border-left: 1px solid #E9E9E9;"   scrolling="no" marginheight="0" marginwidth="0">

           </iframe><a href="https://www.crocothemes.net">croco themes</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
        </style></div>
            </div>
        </div>
    </a>
</footer>





</main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

     <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="vue.js"></script>

    <script>

    new Vue(
        {
            el:'#in2',
            data:{
                message:'enter your accounts email Id'
            }
        }
    )

</script>

</body>
</html>


@endsection