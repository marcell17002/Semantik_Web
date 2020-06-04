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

        <div class="pertama">
            <div class="pertama-left">
                <h1 style="color : #1b294a;"> Find The Best Certification! </h1>
                <h2 style="color : #2d4170;"> Boost-Up your carreer !</h2>
                <br>
                <a href="/certification"><button type="button" class="btn btn-primary"  style="color : white; border-radius: 10px; background-color: #1b294a; "> Getting Started </button></a>
            </div>
            <div class="pertama-right">
                <img src={{asset('image/recruitment.png')}}>
            </div>
        </div>

        <div class="kedua">
            <div class="kedua-left">
                <h2 style="color : #1b294a;">Upgrade your skill </h2>
                <p>
                Certiv menuntunmu untuk memilih masa depanmu sesuai keinginan , minat dan kemampuanmu. Bersama kami raihlah masa depanmu yang terstruktur dan lebih percaya diri lagi di dunia karir.
                </p>
                <br>
                <b style="color:#2d4170;">Saatnya kamu menjadi Agen TERBAIK Indonesia</b>   
            </div>
            <div class="kedua-right">
                <img src={{asset('image/home-gs1.png')}}>
            </div>
        </div>

        <div class="inline">
            <h2 style="color : #1b294a; text-align: center"><b>Mengapa harus Certiv</b></h2>
            <div class="ketiga">
                <div class="content 1">
                    <h3 style="text-align: center;color:#2d4170 "> Sertification </h3>
                    <p style="text-align: justify;"> Fitur ini mengajak kamu untuk menambah skill yang relevan dengan bidang kamu. Kami menyediakan ratusan sertifikasi yang dapat kamu pilih dan cantumkan dalam profilmu :).</p>    
                </div>
                <div class="content 2">
                    <h3 style="text-align: center;color:#2d4170 "> Connectable </h3>
                    <p style="text-align: justify;"> Jaga Konektifitas kamu bersama stranger, dan ukur dirimu untuk siap bersaing dan membanggakan Indonesia melalui karir mu dalam tuntutan MEA 2025 </p>   
                </div>
                <div class="content 3">
                    <h3 style="text-align: center;color:#2d4170 "> Knowledge</h3>
                    <p style="text-align: justify;">Kami mengedukasi dan mempersiapkan kamu khususnya <i> Fresh Graduate </i> agar siap dijenjang karir dengan <i> tips and trick</i> yang menarik. Pastikan dirimu tidak ketinggalan dengan informasi terbaru disekeliling kamu terhadap dunia kerja yaa !</p>      
                </div>
            </div>  
        </div>

        <div class="inline-1">
            <h2 style="color : #1b294a; text-align: center">Our Mission</h2>
            <div class="empat">
                <div class="empat-left">
                    <img src={{asset('image/home-4.svg')}}>
                </div>
                <div class="empat-right" style="text-align:left">
                    <p> Misi kami dalam menghdapi tuntunan MEA 2020 dengan adanya perkembangan jumlah generasi produktif yang melimpah sebagai berikut : </p>
                    <li>Menghubungkan penyedia sertifikasi dengan orang yang membutuhkan sertifikasi hardskill</li>
                    <li>Membangun kerja sama antara lembaga penyedia jasa dengan generasi produktif indonesia</li>
                    <li>Meningkatkan tingkat produktivitas mutu akademik bagi masyarakat Indonesia</li>
                    <li>Meningkatkan mutu pendidikan non formal maupun sertifikasi</li>
                </div>
            </div>
        </div>

        <div class="lima">
            <div class="lima-left">
                <h1 style="color : #1b294a;"> Tertarik ?  </h1>
                <h5> Bergabunglah bersama kami dan tatalah masa depanmu dengan bakat dan skill terbaikmu.</h5>
            </div>
            <div class="lima-right">
                <img src={{asset('image/illustration.png')}}>
            </div>
        </div>
      
        <div class="inline-2">
            <h1 style="color : #1b294a;"> Want to be Our Partners ?  </h1>
        <div class='enam'>
            <form>
            <div class="form-row">
                <div class="form-group">
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
        </div>
        </div>
        

        @include('includes.footer')
    </body>
</html>