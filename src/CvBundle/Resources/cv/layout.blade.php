{{--https://certy.px-lab.com/developer/--}}
        <!DOCTYPE html>
<html lang="en-US" xmlns:fb="http://ogp.me/ns/fb#" xmlns:addthis="http://www.addthis.com/help/api-spec" class="crt">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Веб-разработчик</title>
    <link type="text/css" rel="stylesheet" href={{@asset('css/f26a4.css')}}>
    <link type="text/css" rel="stylesheet" href={{@asset('css/kir.css')}} />
    <link type="text/css" rel="stylesheet" href={{@asset('css/home.css')}} />
    <link type="text/css" rel="stylesheet" href={{asset('css/style.min.css')}}>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src={{@asset('js/contacts.js')}}></script>

</head>
<body class="home page-template-default page page-id-90 wp-custom-logo crt crt-layers-1 crt-nav-on crt-nav-type2 crt-main-nav-on crt-side-box-on crt-sidebar-on"
      data-color="#1FA184">
<div class="crt-wrapper">
    @include('cv.header')
    <div id="crtContainer" class="crt-container">
        @include('cv.sidebar')
        @include('cv.menu')
        <div class="crt-container-sm">
          @yield('content')
        </div>
    </div>
    <div id="crtSidebar">
        <button id="crtSidebarClose" class="btn btn-icon btn-light btn-shade"><span
                    class="crt-icon crt-icon-close"></span></button>
        <div id="crtSidebarInner">
            <nav id="crtMainNavSm" class="hidden-lg hidden-md text-center">
                <ul class="clear-list">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-90 current_page_item menu-item-148">
                        <a href="https://certy.px-lab.com/developer/">Home</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147"><a
                                href="https://certy.px-lab.com/developer/blog/">Blog</a></li>
                </ul>
            </nav>
        </div>
    </div>
    @include('cv.footer')
    <button id="crtBtnUp" class="btn btn-icon btn-primary"><span class="crt-icon crt-icon-arrow-page-up"></span>
    </button>
    <svg id="crtBgShape1" class="hidden-sm hidden-xs" height="519" width="758">
        <polygon class="pol" points="0,455,693,352,173,0,92,0,0,71"/>
    </svg>
    <svg id="crtBgShape2" class="hidden-sm hidden-xs" height="536" width="633">
        <polygon points="0,0,633,0,633,536"/>
    </svg>
</div>
</body>
</html>