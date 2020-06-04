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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/certification.css') }}" />
    </head>
    <body>
        @include('includes.header')
        @foreach($details as $detail)
       <div class="container">
            <div class="row">
                <div class="col-4">
                    <image src={{asset('image/cisco.png')}} style="widht: 16%; height: 16%; margin-top:30%;margin-left:5%;">
                    <h3 style="text-align:center;margin-top:20%;padding-right:5%"> {{$detail->judul}} </h3>
                    <h5 style="text-align:center;padding-right:5%;"> {{$detail->category}} </h5>
                    <br>
                    <form action="" method="">
                    @csrf
                        <input type="hidden" value="#" name="url">
                        <a href="https://api.whatsapp.com/send?phone=62895401011469&text=Halo saya ingin mendaftar dalam sertifikasi ini!."  target="_blank">
                        <button class="btn btn-primary"  style="color : white; border-radius: 10px; background-color: #1b294a;width:90%;margin-left:5%;"> Apply </button>
                        </a>
                    </form>
                   </div>
                <div class="col-8">
                    <h1 style="color : #1b294a; padding-top:10%;"> {{$detail->judul}} </h1>
                    <br>
                    <p style="text-align:justify;">Halo Fellas ! Wah saatnya kita memotivasi diri kita untuk menjadi lebih baik yuk!. Sudah bosan dan khawatir tentunya dengan masa dengan yang begitu-begitu saja atau berada pada ambang kekhawatiran?. Untuk menjawab itu semua , Ayo ikuti sertifikasi untuk menghadapi kekhawatiran berikut. Ikuti ujian sertifiasi {{$detail->judul}} pada bulan <b>{{$detail->tanggal}}</b> dan dapatkan sertifikasi mu , jika <span style="color:green">LOLOS</span> yaaa ! hihihihi</p>
                    <br>
                    <p style="text-align:justify;">Untuk menata masa depanmu , harganya cukup Rp.<span style="color:green"><b> {{$detail->harga}},00</b> </span> Saja, Murah bukannn? dan sangat sebanding dengan apa yang kamu harapkan kedepannya hihihihi!. Caranya juga cukup mudah, dan bila ada pertanyaanpun kamu bisa menghubungi melalui icon WA di pojok kanan bawah berikut ini yaa Fellasss ! </p>
                    <br>
                    <br>
                    <h3 style="text-align:center"> Don't Miss it ! </p>
                </div>
            </div>
        </div>
        <!-- Floating action -->
        <a href="https://api.whatsapp.com/send?phone=62895401011469&text=Halo saya ingin mendaftar dalam sertifikasi ini!." class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
        @endforeach
       @include('includes/footer')
    </body>
</html>