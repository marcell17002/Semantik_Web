<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/layout_header_footer.css') }}" />

<div class="topnav">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <a href="/"><img class="logo" src={{asset('image/logo.png')}}></a>
            </div>
            <div class="col" >
                <div class="row">
                <div class="col-3">
                    <a href="/certification">Certification</a>
                </div>
                <div class="col-2" style="margin-right:10px;">
                    <a href="/connection">Network</a>
                </div>
                <div class="col-2"> 
                    <a href="/update-profile">Article</a>
                </div>
                    @guest
                        <div class="col-2">
                            <a class="nav-link" href="/login">{{ __('Login') }}</a>
                        </div>
                    @else
                        <div class="col-2">
                            <a href="/profile/{{ $username->username }}">Profile</a>
                        </div>
                        <div class="col-2">
                        <!-- Logout Button -->
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <!-- end logout button -->
                    @endguest
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

