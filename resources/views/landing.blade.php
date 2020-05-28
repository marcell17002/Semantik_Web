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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" />
    </head>
    <body>
        @include('includes.header')
        <div class="home-1">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div class="content-home-gs" > 
                            <h1 style="color : #1b294a;"> Find The Best Certification! </h1>
                            <h2 style="color : #2d4170;"> Boost-Up your carreer !</h2>
                            <br>
                            <a href="/certification"><button type="button" class="btn btn-primary"  style="color : white; border-radius: 10px; background-color: #1b294a; "> Getting Started </button></a>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="content-home-img">
                            <img src={{asset('image/recruitment.png')}} style="width: 400px;height:400px; text-align : center;">
                        </div>
                    </div>
                </div>              
            </div>
        </div>
        <div class="home-2">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div class="content-home-2-txt" > 
                            <h2 style="color : #1b294a;">Upgrade your skill </h2>
                            <p>
                            Certiv menuntunmu untuk memilih masa depanmu sesuai keinginan , minat dan kemampuanmu. Bersama kami raihlah masa depanmu yang terstruktur dan lebih percaya diri lagi di dunia karir.
                            </p>
                            <br>
                            <b style="color:#2d4170;">Saatnya kamu menjadi Agen TERBAIK Indonesia</b>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="content-home-img">
                            <img src={{asset('image/home-gs1.png')}} style="width: 500px;height:400px; text-align : center;">
                        </div>
                    </div>
                </div>              
            </div>
        </div>
        <div class="home-3">
            <div class="content-home-3-txt">
                <h2 style="color : #1b294a; text-align: center"><b>Mengapa harus Certiv</b></h2>
                <br>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img>
                        <h3 style="text-align: center;color:#2d4170 "> Sertification </h3>
                        <p style="text-align: justify;"> Fitur ini mengajak kamu untuk menambah skill yang relevan dengan bidang kamu. Kami menyediakan ratusan sertifikasi yang dapat kamu pilih dan cantumkan dalam profilmu :).</p>
                    </div>
                    <div class="col-4">
                        <img>
                        <h3 style="text-align: center;color:#2d4170 "> Connectable </h3>
                        <p style="text-align: justify;"> Jaga Konektifitas kamu bersama stranger, dan ukur dirimu untuk siap bersaing dan membanggakan Indonesia melalui karir mu dalam tuntutan MEA 2025 </p>
                    </div>
                    <div class="col-4">
                        <img>
                        <h3 style="text-align: center;color:#2d4170 "> Knowledge</h3>
                        <p style="text-align: justify;">Kami mengedukasi dan mempersiapkan kamu khususnya <i> Fresh Graduate </i> agar siap dijenjang karir dengan <i> tips and trick</i> yang menarik. Pastikan dirimu tidak ketinggalan dengan informasi terbaru disekeliling kamu terhadap dunia kerja yaa !</p>
                    </div>
                </div>              
            </div>
        </div>
        <div class="home-4">
            <div class="content-home-3-txt">
                <h2 style="color : #1b294a; text-align: center">Our Mission</h2><br>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src={{asset('image/home-4.svg')}} style="width: 500px;height:400px; text-align : center;">
                    </div>
                    <div class="col-6">
                        <br>
                        <p style="text-align : justify;"> Misi kami dalam menghdapi tuntunan MEA 2020 dengan adanya perkembangan jumlah generasi produktif yang melimpah sebagai berikut : 
                        <li>Menghubungkan penyedia sertifikasi dengan orang yang membutuhkan sertifikasi hardskill</li>
                        <li>Membangun kerja sama antara lembaga penyedia jasa dengan generasi produktif indonesia</li>
                        <li>Meningkatkan tingkat produktivitas mutu akademik bagi masyarakat Indonesia</li>
                        <li>Meningkatkan mutu pendidikan non formal maupun sertifikasi</li>
                    </div>
                </div>              
            </div>
        </div>
        <div class="home-5">
            <div class="content-home-5-txt">
                <h2 style="color : #1b294a;"><b>Tentang Kami</b></h2><br>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <img src={{asset('image/marcell.jpg')}} style="width: 100px;height:100px;border-radius: 100%; text-align : center;">
                    </div>
                    <div class="col-9">
                        <h4> Marcell Antonius</h4>
                        <h5 style="color: #bababa;"> Teknik Informatika . 2017 </h5>
                        <p> 'Fokuslah jangan melihat kebelakang dan tampar lawanmu dengan prestasi' </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <img src={{asset('image/marcell.jpg')}} style="width: 100px;height:100px;border-radius: 100%; text-align : center;">
                    </div>
                    <div class="col-9">
                        <h4> Marcell Antonius</h4>
                        <h5 style="color: #bababa;"> Teknik Informatika . 2017 </h5>
                        <p> 'Fokuslah jangan melihat kebelakang dan tampar lawanmu dengan prestasi' </p>
                    </div>
                </div>    
                <br>          
                <div class="row">
                    <div class="col-3">
                        <img src={{asset('image/marcell.jpg')}} style="width: 100px;height:100px;border-radius: 100%; text-align : center;">
                    </div>
                    <div class="col-9">
                        <h4> Marcell Antonius</h4>
                        <h5 style="color: #bababa;"> Teknik Informatika . 2017 </h5>
                        <p> 'Fokuslah jangan melihat kebelakang dan tampar lawanmu dengan prestasi' </p>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="home-6">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="content-home-2-txt" > 
                            <h1 style="color : #1b294a;"> Tertarik ?  </h1>
                            <br>
                            <h5> Bergabunglah bersama kami dan tatalah masa depanmu dengan bakat dan skill terbaikmu.</h5>
                            <br>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="content-home-img">
                            <img src={{asset('image/illustration.png')}} style="width: 480px;height:350px; text-align : center;">
                        </div>
                    </div>
                </div>              
            </div>
        </div>
        
        <div class="home-7">
            <h1 style="color : #1b294a;"> Want to be Our Partners ?  </h1>
            <br>
            <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Your Name">
                </div>
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Phone</label>
                <input type="text" class="form-control" id="inputPhone" placeholder="+62 ..">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Organizations</label>
                <input type="text" class="form-control" id="inputOrganizations" placeholder="Univ./Company/etc">
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputAddress2">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor">
            </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Name of Certification or Skills</label>
                <input type="text" class="form-control" id="inputType" placeholder="CIsco/Microtix/IELTS/TOEFL/etc ...">
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputAddress2">Price</label>
                <input type="text" class="form-control" id="inputPrice" placeholder="Rp. XXXXXXX,-00">
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputAddress">Description</label>
                <textarea rows="4" cols="30" class="form-control" name="comment" form="usrform"> Your Description...</textarea>
            </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="float:right">Collaborate</button>
            </form>
        </div>
        

        @include('includes.footer')
    </body>
</html>