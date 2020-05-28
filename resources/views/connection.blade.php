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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/certification.css') }}" />
    </head>
    <body>
        @include('includes.header')
        <br>
        <h2 style="text-align: center;color : #1b294a;"><b>Find and Compare Your Skill With Others</b></h2>
        
        <!-- Search form -->
        <div class="active-cyan-4 mb-4" style="margin-left: 20%;margin-right:20%;">
            <form action="/action_page.php">
                <input class="form-control" type="text" placeholder="Search..." aria-label="Search">
            </form>
        </div>
        <br>
        <div class ="container">
            <div class ="row">
            <!-- FOREACH LOOP FROM DB -->
                <div class="col-4">
                <div class="img-left">
                </div>
                    <img src={{asset('image/human.png')}} alt="Avatar" style="width:500px;height:450px;">
                    <a href="/profile"><button type="button" class="btn btn-info"  style=" background-color: #1b294a;margin-left:20%;">View My Profile</button></a>
                </div>
                <div class="col-8">
                @foreach($users as $user)
                    <div class="row">
                        <div class="col-3">
                            <img src={{asset('image/marcell.jpg')}} style="width: 110px;height:110px;border-radius: 100%; text-align : center;margin-top:10px;">
                        </div>
                        <div class="col-7">
                            <h3><b>{{$user->name}}</b></h3>
                            <p style="color: #bababa"> Working at {{$user->workplace}}</p>
                            <p style="color: #bababa"> Get 10 Sertification</p>
                        </div>
                        <div class="col-2">
                        <br>
                            <a href="/profile"><button type="button" class="btn btn-primary">Connect</button></a>
                        </div>
                        <br>
                    </div>
                    @endforeach
                </div>
         </div>
        </div>
        <br>
        @include('includes/footer')
    </body>
</html>