<!Doctype HTML>
<html>
    <head>
        <title>
            Welcome! - Certiv
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" />
    </head>
    <body>
        @include('includes.header')
        
        <div class="profile-top">
        <h5 style="color:#ffcc24; text-align: center;margin-left:900px;"> Your Newest Emblem</h5>
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src={{asset('image/marcell.jpg')}} style="width: 150px;height:150px;border-radius: 100%; text-align : center;margin-left:40%;margin-top:5%;">
                    </div>
                    <div class="col-7" style="padding-left:10%;">
                        <h3 style="color:white;"><b>{{$user->name}}</b></h3>
                        <h6 style="color:white;">{{$userDetails->workplace}}</h6>
                        <p style="color:#f5f5f5;font-size:12px;">{{$userDetails->bio}}</p>
                    </div>
                    <div class="col-3">
                        <img src={{asset('image/emblem.png')}} style="width: 130px;height:130px;border-radius: 100%; text-align : center;margin-left:30%;margin-top:5%  ;">  
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h2 style="text-align: center;color:#1b294a"><b>My Resume</b></h2>
        <br>

        <div class="profile-1">
        <div class="container">
            <h3 style="color:#1b294a;">Sertification </h3><br>
            <div class="row">
                <div class="col-6">
                    <img src={{asset('image/cisco.png')}} alt="Avatar" style="width:100px;height:100px;border-radius:100%">
                </div>
                <div class="col-6">
                    <h5>{{$certif->certif_name}}</h5>
                </div>
            </div>
            <br>
        </div>
        </div>
        
        <div class="profile-0" >
        <div class="container">
            <h3 style="color:#1b294a;"> Achievement </h3><br>
            <div class="row">
                <div class="col-6">
                    <h5>Lomba Invention 2020</h5>
                </div>
                <div class="col-4">
                    <p>2017-2021</p>
                </div>
            </div>
        </div>
        </div>
        <div class="profile-1" >
        <div class="container">
            <h3 style="color:#1b294a;"> Education </h3><br>
            <div class="row">
                <div class="col-6">
                    <h5>{{$userDetails->education}}</h5>
                </div>
                <div class="col-4">
                    <p>2017-2021</p>
                </div>
            </div>
        </div>
        </div>
        
        <div class="profile-0" >
        <div class="container">
            <h3 style="color:#1b294a;"> Skills </h3><br>
            <div class="row">
                <div class="col-6">
                    <h5>Coding</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5>Coding</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5>Coding</h5>
                </div>
            </div>
        </div>
        </div>

        <div class="profile-1">
        <div class="container">
            <h3 style="color:#1b294a;"> Organisations </h3><br>
            <div class="row">
                <div class="col-6">
                    <img src={{asset('image/cisco.png')}} alt="Avatar" style="width:100px;height:100px;border-radius:100%">
                </div>
                <div class="col-6">
                    <h5>{{$userDetails->organization}}</h5>
                </div>
            </div>
            <br>
        </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <button type="button" class="btn btn-info" href="/update-profile" style="margin-left:85%;">Update My Skills</button>
            </div>
            <br>
        </div>
        
        
       @include('includes/footer')
    </body>
</html>