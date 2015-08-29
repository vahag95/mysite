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
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>        
    </head>

    <body class="@yield('body_class')">
        <div class="container-fluid">
            @extends('layouts.header')

            @yield('content')
        </div>
    </body>
</htnl>