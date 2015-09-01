<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/assets/css/style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'/>
        <link href='https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="/assets/css/design/dev.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/design/styles.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/design/rwd.css" rel="stylesheet" type="text/css" />
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>        
    </head>

    <body class="@yield('body_class')">
            <nav class='navbar navbar-inverse main_menu' id="navBar">
                <div class='navbar-header @if (Auth::guest()) login_page_style @endif'>
                    <button class='navbar-toggle collapsed' data-target='#main_navbar' data-toggle='collapse' type='button'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <div>
                        {{-- <a href="/widgets"><img class='navbar-brand img-responsive' id="imgLogo" src="{{url('/assets/img/voiceStackLogo.png')}}"></a> --}}
                    </div>
                </div>
                <div class='collapse navbar-collapse' id='main_navbar'>
                    @if (!Auth::guest())
                        <ul class='nav navbar-nav navbar-right pull-right'>
                            <li class="dropdown">
                                <a aria-expanded='false' class='dropdown-toggle' data-toggle='dropdown' href='#' role='button'>
                                  @if(Auth::user()->image)
                                    <img class='avatar' src='{{ Auth::user()->image }}'>  
                                  @else  
                                    <div class="hide">
                                        {!! $path = "http://www.gravatar.com/avatar/".md5( strtolower( trim( Auth::user()->email ) ) ); 
                                            $d = urlencode(url()."/assets/img/default_avatar.jpg");
                                        !!}
                                    </div>
                                    <img src="{!! $path.'?d='.$d !!}" class="avatar"/>
                                  @endif
                                  {{ Auth::user()->name }}
                                  <span class='caret'></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    @if( Auth::user()->role == "user"  )                         
                                        <li @if(Request::is('account*')) class="active" @endif><a href="{{ action('AccountController@getIndex') }}">My Account</a></li>
                                        <li @if(Request::is('settings*')) class="active" @endif><a href="{{ url('/settings') }}">Integrations</a></li>
                                    @endif
                                    <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                                    <li><a href="{{ url('/account') }}">My Account</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class='nav navbar-nav navbar-right pull-right divider'>
                            @if (!Auth::guest())
                                <li @if(Request::is('messages*')) class="active" @endif><a href="{{ url('/messages/') }}">
                                Inbox
                                    <span class="unread-messages" id="unreadMessages">
                                        
                                    </span></a></li>
                                <li @if(Request::is('personal-messages*')) class="active" @endif><a href="{{ url('/personal-messages') }}">Messages</a></li>
                                <li @if(Request::is('widgets*')) class="active" @endif><a href="{{ url('/widgets') }}">Widgets</a></li>
                                <li @if(Request::is('reports*')) class="active" @endif><a href="{{ url('/reports') }}">Reports</a></li>
                            @endif
                        </ul>
                    @else <a href="/auth/register">Registration</a>
                    @endif
                </div>
            </nav>
            <div class="container-fluid">
            
            @yield('content')
            @yield('scripts')
        </div>
    </body>
</htnl>