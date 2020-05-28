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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/update-profile.css') }}" />
    </head>
    <body>
        
        @include('includes.header')
        <br>
        <h2 style="text-align: center;color:#1b294a"><b>Update Your Profile</b></h2>
        <br>

        <form action="/action_page.php">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                    <div class="card-1">
                        <div class="row">
                            <div class="col-12">
                                <h3 style="color:#1b294a;"> Sertification </h3>
                                <input type="text" id="serti1" class="form-control"  placeholder="your newest sertification"><br>
                                <input type="text" id="serti2" class="form-control" placeholder="your newest sertification"><br>
                                <input type="text" id="serti3" class="form-control"  placeholder="your newest sertification"><br>
                                <input type="text" id="serti4" class="form-control" placeholder="your newest sertification"><br>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12">
                                <h3 style="color:#1b294a;"> Skills </h3>
                                <input type="text" id="skill1" class="form-control" placeholder="your newest Skills"><br>
                                <input type="text" id="skill2" class="form-control" placeholder="your newest Skills"><br>
                                <input type="text" id="skill3" class="form-control" placeholder="your newest Skills"><br>
                                <input type="text" id="skill4" class="form-control" placeholder="your newest Skills"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 style="color:#1b294a;"> Educations</h3>
                                <input type="text" id="edu1" class="form-control" placeholder="your newest Educations" ><br>
                                <input type="text" id="edu2" class="form-control" placeholder="your newest Educations" ><br>
                                <input type="text" id="edu3" class="form-control" placeholder="your newest Educations" ><br>
                                <input type="text" id="edu4" class="form-control" placeholder="your newest Educations" ><br>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-6">
                                <h3 style="color:#1b294a;"> Organizations </h3>
                                <input type="text" id="org1" class="form-control" placeholder="your newest organization"><br>
                                <input type="text" id="org2" class="form-control" placeholder="your newest organization"><br>
                                <input type="text" id="org3" class="form-control" placeholder="your newest organization"><br>
                                <input type="text" id="org4" class="form-control" placeholder="your newest organization"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3 style="color:#1b294a;"> Achievement </h3>
                                <input type="text" id="ach1" class="form-control" placeholder="your newest Achievement"><br>
                                <input type="text" id="ach2" class="form-control" placeholder="your newest Achievement"><br>
                                <input type="text" id="ach3" class="form-control" placeholder="your newest Achievement"><br>
                                <input type="text" id="ach4" class="form-control" placeholder="your newest Achievement"><br>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="card-2">
                            <img src={{asset('image/avatar.png')}} style="width: 150px;height:150px;margin-left:25%;margin-top:5%;">
                            <br>
                            <br>
                            <h5 style="color:#1b294a;"> Upload Your Image </h5>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <br><br>
                            <input type="text" id="name" class="form-control" placeholder="Name"><br>
                            <input type="text" id="name" class="form-control" placeholder="Higlight"size="30">
                            <h5 style="color:#1b294a;"> Description </h5>
                            <textarea rows="4" cols="30" class="form-control" name="comment" form="usrform"> Your Description...</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <button type="button" class="btn btn-info" href="/profile" style="margin-left:75%;">Update My Informations</button>
        </form> 
        <br>
        <br>
    </div>
</div>
    @include('includes.footer')
    </body>
</html>