<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        @extends('header')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          

            <div class="content">
                <div class="m-b-md">
                <a href="{{ route('home') }}">Convert Digit to Number</a><br/>
                 <a href="{{ route('player') }}">player list</a>
                </div>
            </div>
        </div>
    </body>
</html>
