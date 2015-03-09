<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sve Nagrade</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
     <link href="/css/welcome.css" rel="stylesheet">

     


    @yield('topcss')

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                     <a href="{{ url('/')}}"><img src="/images/logo.png" class="img-responsive"></a>
                </div>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">

                                      
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="#" class="btn btn-social-icon btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li @if($current_page === '/')class="active"@endif>
                        <a href="{{ url('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                    </li>
                    <li @if($current_page === 'contacts.show')class="active"@endif>
                        <a href="{{ url('contacts/show') }}">Kontakt & Marketing</a>
                    </li>                  
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    @if(!($current_page === 'contacts.show'))
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-2">
                <ul class="nav navbar-nav pull-left">
                    @foreach($categories as $category)
                    <li>
                        <a href="{{ route('categories.show', [$category->id]) }}">{{ $category->name }}</a>
                    </li>
                    @endforeach
                    <li>
                        <a href="{{ route('pops.index') }}">Najpopularnije</a>
                    </li>            
                </ul> 

                <form class="nav navbar-form pull-right" method="GET" role="search" action="{{ route('search.index') }}">
                    <div class="input-group add-on">
                      <input type="text" class="form-control" placeholder="Trazi igre" name="query">
                      <div class="input-group-btn">
                        <button class="btn btn-info" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                      </div>
                    </div>
                </form>
            </div>            
        </div>
    </nav>
    @endif

        @yield('content')

       


    <div class="container">
        <hr>

        <!-- Footer -->
        <footer class="footer">
            <div class="row text-center">
                <div class="col-lg-12">
                    <img src="/images/logo1.png" class="img-responsive" style="margin: 0 auto;">
                </div>

                <div class="col-lg-12">
                    <p>Powered by <a href="http://thegraymonkey.com">TheGrayMonkey</a></p>
                </div>
                <div class="col-lg-12">
                    <p>2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    @yield('bottomjs')

</body>

</html>
