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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/article.css') }}" />
    </head>
    <body>
        @include('includes/header')

        <!-- Carousel  -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('image/certification.png')}}" alt="First slide" style="widht:100px;height:400px">
                <div class="carousel-caption d-none d-md-block">
                        <h4 style="color:black"><b>See Common Resume</b></h4>
                        <p style="color:black">Improve your skills and compare with others</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('image/interview.jpg.jpg')}}" alt="Second slide"  style="height:400px;widht:100px;">
                <div class="carousel-caption d-none d-md-block">
                        <h4 style="color:white"><b>Learn Company Background</b></h4>
                        <p style="color:white">It's so important before you take the interview</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('image/cv.svg')}}" alt="Third slide" style="widht:100px;height:400px">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 style="color:black"><b>Make a Creative Resume</b></h4>
                        <p style="color:black">Sometimes HR loves a creative person through resume or cv</p>
                    </div>   
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <br>
        <h2 style="text-align: center;color:#1b294a"><b>See and Learn Some Usefull Tips and Tricks</b></h2>
        <br>
        
        <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('image/jobhunt.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/article-pick" class="btn btn-primary">See More</a>
                </div>
                </div>
            </div>
            </div>
        </div>

        </div>
        
        
        
        <br>
        <h2 style="text-align: center;color:#1b294a"><b>Tips and Tricks</b></h2>
        <br>
        
        <div class="card-columns" style="margin-left:30px;margin-right:30px;margin-bottom:30px;">
            <div class="card">
                <img class="card-img-top" src="{{asset('image/sound.png')}}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Make Some Connections</h5>
                <p class="card-text">Get useful information especially for your career and the background of the company you are looking for. Follow the latest information to prepare for your future career. Just Focus on social media (Linked.in, Kalibrr, Job.id, or something else.)</p>
                </div>
            </div>
            <div class="card p-3">
                <blockquote class="blockquote mb-0 card-body">
                <p>“Slow down and enjoy life. It’s not only the scenery you miss by going too fast – you also miss the sense of where you are going and why.”</p>
                <footer class="blockquote-footer">
                    <small class="text-muted"> <cite title="Source Title"> Eddie Cantor</cite>
                    </small>
                </footer>
                </blockquote>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('image/test.jpg')}}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Make an Interesting Resume</h5>
                <p class="card-text">Make a resume that is short, good and interesting. It doesn't need to be too long and too colorful. Prepare yourself for a tighter world of work with your best certification and skills</p>
                <p class="card-text"><small class="text-muted">with love from certiv</small></p>
                </div>
            </div>
            <div class="card bg-primary text-white text-center p-3">
                <blockquote class="blockquote mb-0">
                <p>“Success is a little like wrestling a gorilla. You don't quit when you're tired. You quit when the gorilla is tired.”</p>
                <footer class="blockquote-footer" style="color:white;">
                    <small> <cite title="Source Title" style="color:white;">Robert Strauss</cite>
                    </small>
                </footer>
                </blockquote>
            </div>
            <div class="card text-center">
                <div class="card-body">
                <h5 class="card-title">Don't be Underestimate</h5>
                <p class="card-text">Being at the bottom is not the worst person. we only struggle with big and brilliant steps to have a happy future</p>
                <p class="card-text"><small class="text-muted">with love from certiv</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="{{asset('image/select.jpg')}}" alt="Card image">
            </div>
            <div class="card p-3 text-right">
                <blockquote class="blockquote mb-0">
                <p>“The greatest day in your life and mine is when we take total responsibility for our attitudes. That's the day we truly grow up.”</p>
                <footer class="blockquote-footer">
                    <small class="text-muted"><cite title="Source Title">Jhon Maxwell</cite>
                    </small>
                </footer>
                </blockquote>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Make a Good Connections</h5>
                <p class="card-text">Make connections with alumni or people who you think are experienced. Because there are many people who are experienced in the career world who can provide you with helpful information</p>
                <p class="card-text"><small class="text-muted">with love from certiv</small></p>
                </div>
            </div>
        </div>

      @include('includes.footer')
    </body>
</html>