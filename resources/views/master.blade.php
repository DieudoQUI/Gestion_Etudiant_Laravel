<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />  
        <link rel="stylesheet" href="{{ asset('assets/style.css')}}"/>
    </head>
    <body>
        <div class="header ">
            <div class="container">
                <div class="header__content">
                    <div class="logo">
                        <a href="/">Logo</a> 
                    </div>
                    <div class="navLinks">
                        <a href="#">Ecole 229</a>
                    </div>
                </div>
            </div>
        </div>
        @yield ('content')
        
    </body>
</html>
<script src="{{ asset('js/bootstrap.min.js')}}">

</script>
<style scoped>
    
   
</style>