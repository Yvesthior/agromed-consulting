<!DOCTYPE html>

@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            

<html style="font-size: 16px;" lang="fr-SN" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Votre Test PCR à Domicile., Avoid close contact, Cover your mouth, Clean your hands">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Agromed Consulting</title>


    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Accueil.css') }}" media="screen">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    {{-- <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" /> --}}
    {{-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" /> --}}
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />


@yield('styles')
   
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i">
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Agromed Consulting",
		"logo": "images/logo1.PNG"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"
  ><header class="u-clearfix u-header u-sticky u-sticky-1e50 u-white u-header" id="sec-df5d"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://agromedconsulting.com" class="u-image u-logo u-image-1" data-image-width="416" data-image-height="102">
          <img src="images/logo1.PNG" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-position="menu">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Accueil.html" style="padding: 10px 0px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Accueil.html#carousel_8619" data-page-id="79523360" style="padding: 10px 0px;">A Propos du Test PCR</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Accueil.html#carousel_266d" data-page-id="79523360" style="padding: 10px 0px;">Prendre Un Rendez Vous</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html" style="padding: 10px 20px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html#carousel_8619" data-page-id="79523360" style="padding: 10px 20px;">A Propos du Test PCR</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html#carousel_266d" data-page-id="79523360" style="padding: 10px 20px;">Prendre Un Rendez Vous</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_834f" data-image-width="1900" data-image-height="1086">
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-26-xl u-size-27-lg u-size-28-md u-size-28-sm u-size-28-xs u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-palette-1-base u-text-1" data-animation-name="slideIn" data-animation-duration="2250" data-animation-delay="750" data-animation-direction="Left">Votre Test PCR à Domicile.<br>
                </h1>
                <p class="u-text u-text-2" data-animation-name="fadeIn" data-animation-duration="2500" data-animation-delay="1500" data-animation-direction="">Vous
souhaitez faire un test RT-PCR pour la COVID-19 mais vous ne voulez pas
att​​endre des heures devant un laboratoire, pas besoin de vous déplacer&nbsp;! AgroMed
Consulting, travaillant avec différents laboratoires agréés par le Ministère de
la Santé, vous propose un prélèvement à domicile (maison, hôtel ou bureau). 
&nbsp;
Ce
concept a été initié pour éviter les difficultés et contraintes associées à la
réalisation des tests COVID-19 au niveau des centres médicaux agréées.</p>
                <a href="" class="u-align-left u-btn u-button-style u-custom-font u-font-roboto-condensed u-text-body-alt-color u-btn-1" data-animation-name="bounceIn" data-animation-duration="1500" data-animation-delay="2750" data-animation-direction="">EN SAVOIR PLUS</a>
              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-right-cell u-size-32-md u-size-32-sm u-size-32-xs u-size-33-lg u-size-34-xl u-image-1" data-animation-name="slideIn" data-animation-duration="2250" data-animation-delay="0" data-animation-direction="Right">
              <div class="u-container-layout u-valign-bottom"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-2">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-palette-1-base u-size-20 u-layout-cell-3" data-animation-name="slideIn" data-animation-duration="1500" data-animation-delay="0" data-animation-direction="Left">
              <div class="u-container-layout u-container-layout-3"><span class="u-icon u-icon-circle u-spacing-20 u-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="-38 0 511 511.99956" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9d77"></use></svg><svg class="u-svg-content" viewBox="-38 0 511 511.99956" id="svg-9d77"><g id="surface1"><path d="M 413.476562 341.910156 C 399.714844 379.207031 378.902344 411.636719 351.609375 438.289062 C 320.542969 468.625 279.863281 492.730469 230.699219 509.925781 C 229.085938 510.488281 227.402344 510.949219 225.710938 511.289062 C 223.476562 511.730469 221.203125 511.96875 218.949219 512 L 218.507812 512 C 216.105469 512 213.691406 511.757812 211.296875 511.289062 C 209.605469 510.949219 207.945312 510.488281 206.339844 509.9375 C 157.117188 492.769531 116.386719 468.675781 85.289062 438.339844 C 57.984375 411.6875 37.175781 379.277344 23.433594 341.980469 C -1.554688 274.167969 -0.132812 199.464844 1.011719 139.433594 L 1.03125 138.511719 C 1.261719 133.554688 1.410156 128.347656 1.492188 122.597656 C 1.910156 94.367188 24.355469 71.011719 52.589844 69.4375 C 111.457031 66.152344 156.996094 46.953125 195.90625 9.027344 L 196.246094 8.714844 C 202.707031 2.789062 210.847656 -0.117188 218.949219 0.00390625 C 226.761719 0.105469 234.542969 3.007812 240.773438 8.714844 L 241.105469 9.027344 C 280.023438 46.953125 325.5625 66.152344 384.429688 69.4375 C 412.664062 71.011719 435.109375 94.367188 435.527344 122.597656 C 435.609375 128.386719 435.757812 133.585938 435.988281 138.511719 L 436 138.902344 C 437.140625 199.046875 438.554688 273.898438 413.476562 341.910156 Z M 413.476562 341.910156 " style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,86.666667%,50.196078%);fill-opacity:1;"></path><path d="M 413.476562 341.910156 C 399.714844 379.207031 378.902344 411.636719 351.609375 438.289062 C 320.542969 468.625 279.863281 492.730469 230.699219 509.925781 C 229.085938 510.488281 227.402344 510.949219 225.710938 511.289062 C 223.476562 511.730469 221.203125 511.96875 218.949219 512 L 218.949219 0.00390625 C 226.761719 0.105469 234.542969 3.007812 240.773438 8.714844 L 241.105469 9.027344 C 280.023438 46.953125 325.5625 66.152344 384.429688 69.4375 C 412.664062 71.011719 435.109375 94.367188 435.527344 122.597656 C 435.609375 128.386719 435.757812 133.585938 435.988281 138.511719 L 436 138.902344 C 437.140625 199.046875 438.554688 273.898438 413.476562 341.910156 Z M 413.476562 341.910156 " style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,66.666667%,38.823529%);fill-opacity:1;"></path><path d="M 346.101562 256 C 346.101562 326.207031 289.097656 383.355469 218.949219 383.605469 L 218.5 383.605469 C 148.144531 383.605469 90.894531 326.359375 90.894531 256 C 90.894531 185.644531 148.144531 128.398438 218.5 128.398438 L 218.949219 128.398438 C 289.097656 128.648438 346.101562 185.796875 346.101562 256 Z M 346.101562 256 " style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;"></path><path d="M 346.101562 256 C 346.101562 326.207031 289.097656 383.355469 218.949219 383.605469 L 218.949219 128.398438 C 289.097656 128.648438 346.101562 185.796875 346.101562 256 Z M 346.101562 256 " style=" stroke:none;fill-rule:nonzero;fill:rgb(88.235294%,92.156863%,94.117647%);fill-opacity:1;"></path><path d="M 276.417969 237.625 L 218.949219 295.101562 L 206.53125 307.519531 C 203.597656 310.453125 199.75 311.917969 195.90625 311.917969 C 192.058594 311.917969 188.214844 310.453125 185.277344 307.519531 L 158.578125 280.808594 C 152.710938 274.941406 152.710938 265.4375 158.578125 259.566406 C 164.4375 253.699219 173.953125 253.699219 179.820312 259.566406 L 195.90625 275.652344 L 255.175781 216.382812 C 261.042969 210.511719 270.558594 210.511719 276.417969 216.382812 C 282.285156 222.25 282.285156 231.765625 276.417969 237.625 Z M 276.417969 237.625 " style=" stroke:none;fill-rule:nonzero;fill:rgb(70.588235%,82.352941%,84.313725%);fill-opacity:1;"></path><path d="M 276.417969 237.625 L 218.949219 295.101562 L 218.949219 252.605469 L 255.175781 216.382812 C 261.042969 210.511719 270.558594 210.511719 276.417969 216.382812 C 282.285156 222.25 282.285156 231.765625 276.417969 237.625 Z M 276.417969 237.625 " style=" stroke:none;fill-rule:nonzero;fill:rgb(43.529412%,64.705882%,66.666667%);fill-opacity:1;"></path>
</g></svg></span>
                <h2 class="u-align-center u-custom-font u-font-roboto-condensed u-text u-text-3">Sécurité</h2>
                <p class="u-align-center u-text u-text-4"> Résultats qui vous seront rendus ont
authentifiés avec un QR code. Vous pouvez aussi contacter directement le
laboratoire pour vérifier l’authenticité de votre résultat.&nbsp; </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-layout-cell u-palette-4-base u-size-20 u-layout-cell-4" data-animation-name="zoomIn" data-animation-duration="1000" data-animation-delay="1000" data-animation-direction="Down">
              <div class="u-container-layout u-container-layout-4"><span class="u-align-center u-icon u-icon-circle u-spacing-20 u-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.992 511.992" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d54a"></use></svg><svg class="u-svg-content" viewBox="0 0 511.992 511.992" x="0px" y="0px" id="svg-d54a" style="enable-background:new 0 0 511.992 511.992;"><g id="XMLID_806_"><g id="XMLID_1434_"><rect id="XMLID_1457_" x="275.641" y="68.262" style="fill:#D5F5FB;" width="68.414" height="39.476"></rect><path id="XMLID_1456_" style="fill:#FF7480;" d="M273.848,68.262h72c13.255,0,24-10.745,24-24v0c0-13.255-10.745-24-24-24h-72    c-13.255,0-24,10.745-24,24v0C249.848,57.517,260.593,68.262,273.848,68.262z"></path><circle id="XMLID_1452_" style="fill:#5DDEF5;" cx="310.001" cy="299.738" r="192"></circle><circle id="XMLID_2618_" style="fill:#FFFFFF;" cx="310.001" cy="299.738" r="145.129"></circle><circle id="XMLID_2592_" style="fill:#FF838E;" cx="310.001" cy="299.738" r="21.074"></circle>
</g><g id="XMLID_386_"><path id="XMLID_389_" d="M511.005,279.646c-4.597-46.238-25.254-89.829-58.168-122.744    c-28.128-28.127-62.556-46.202-98.782-54.239V77.255c14.796-3.681,25.794-17.074,25.794-32.993c0-18.748-15.252-34-34-34h-72    c-18.748,0-34,15.252-34,34c0,15.918,10.998,29.311,25.793,32.993v25.479c-36.115,8.071-70.429,26.121-98.477,54.169    c-6.138,6.138-11.798,12.577-16.979,19.269c-0.251-0.019-0.502-0.038-0.758-0.038H78.167c-5.522,0-10,4.477-10,10s4.478,10,10,10    h58.412c-7.332,12.275-13.244,25.166-17.744,38.436H10c-5.522,0-10,4.477-10,10s4.478,10,10,10h103.184    c-2.882,12.651-4.536,25.526-4.963,38.437H64c-5.522,0-10,4.477-10,10s4.478,10,10,10h44.54    c0.844,12.944,2.925,25.82,6.244,38.437H50c-5.522,0-10,4.477-10,10s4.478,10,10,10h71.166    c9.81,25.951,25.141,50.274,45.999,71.132c32.946,32.946,76.582,53.608,122.868,58.181c6.606,0.652,13.217,0.975,19.819,0.975    c39.022,0,77.548-11.293,110.238-32.581c4.628-3.014,5.937-9.209,2.923-13.837s-9.209-5.937-13.837-2.923    c-71.557,46.597-167.39,36.522-227.869-23.957c-70.962-70.962-70.962-186.425,0-257.388c70.961-70.961,186.424-70.961,257.387,0    c60.399,60.4,70.529,156.151,24.086,227.673c-3.008,4.632-1.691,10.826,2.94,13.833c4.634,3.008,10.826,1.691,13.833-2.941    C504.367,371.396,515.537,325.241,511.005,279.646z M259.849,44.263c0-7.72,6.28-14,14-14h72c7.72,0,14,6.28,14,14s-6.28,14-14,14    h-1.794h-68.413h-1.793C266.129,58.263,259.849,51.982,259.849,44.263z M285.642,99.296V78.263h48.413v20.997    C317.979,97.348,301.715,97.36,285.642,99.296z"></path><path id="XMLID_391_" d="M445.77,425.5c-2.64,0-5.21,1.07-7.069,2.93c-1.87,1.86-2.931,4.44-2.931,7.07    c0,2.63,1.061,5.21,2.931,7.07c1.859,1.87,4.43,2.93,7.069,2.93c2.63,0,5.2-1.06,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    c0-2.63-1.069-5.21-2.93-7.07C450.97,426.57,448.399,425.5,445.77,425.5z"></path><path id="XMLID_394_" d="M310.001,144.609c-85.538,0-155.129,69.59-155.129,155.129s69.591,155.129,155.129,155.129    s155.129-69.59,155.129-155.129S395.539,144.609,310.001,144.609z M310.001,434.867c-74.511,0-135.129-60.619-135.129-135.129    s60.618-135.129,135.129-135.129S445.13,225.228,445.13,299.738S384.512,434.867,310.001,434.867z"></path><path id="XMLID_397_" d="M373.257,222.34l-49.53,49.529c-4.142-2.048-8.801-3.205-13.726-3.205c-4.926,0-9.584,1.157-13.726,3.205    l-22.167-22.167c-3.906-3.905-10.236-3.905-14.143,0c-3.905,3.905-3.905,10.237,0,14.142l22.167,22.167    c-2.049,4.142-3.205,8.801-3.205,13.726c0,17.134,13.939,31.074,31.074,31.074s31.074-13.94,31.074-31.074    c0-4.925-1.157-9.584-3.205-13.726l48.076-48.076v0l1.453-1.453c3.905-3.905,3.905-10.237,0-14.142    S377.164,218.435,373.257,222.34z M310.001,310.812c-6.106,0-11.074-4.968-11.074-11.074s4.968-11.074,11.074-11.074    s11.074,4.968,11.074,11.074S316.107,310.812,310.001,310.812z"></path><path id="XMLID_398_" d="M416.92,289.86h-9.265c-5.522,0-10,4.477-10,10s4.478,10,10,10h9.265c5.522,0,10-4.477,10-10    S422.442,289.86,416.92,289.86z"></path><path id="XMLID_399_" d="M212.346,289.616h-9.264c-5.522,0-10,4.477-10,10s4.478,10,10,10h9.264c5.522,0,10-4.477,10-10    S217.868,289.616,212.346,289.616z"></path><path id="XMLID_400_" d="M310.123,212.083c5.522,0,10-4.477,10-10v-9.264c0-5.523-4.478-10-10-10s-10,4.477-10,10v9.264    C300.123,207.606,304.601,212.083,310.123,212.083z"></path><path id="XMLID_424_" d="M309.879,387.393c-5.522,0-10,4.477-10,10v9.264c0,5.523,4.478,10,10,10s10-4.477,10-10v-9.264    C319.879,391.87,315.401,387.393,309.879,387.393z"></path><path id="XMLID_425_" d="M10,351.44c-2.63,0-5.21,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07c0,2.64,1.069,5.21,2.93,7.07    s4.44,2.93,7.07,2.93s5.21-1.07,7.069-2.93c1.86-1.86,2.931-4.44,2.931-7.07s-1.07-5.21-2.931-7.07    C15.21,352.51,12.63,351.44,10,351.44z"></path>
</g>
</g></svg></span>
                <h2 class="u-custom-font u-font-roboto-condensed u-text u-text-5">rapidité</h2>
                <p class="u-text u-text-6"> Votre résultat sera disponible entre 12 et 48
heures maximum à compter de l’heure de prélèvement</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-color-2 u-layout-cell u-right-cell u-size-20 u-layout-cell-5" data-animation-name="slideIn" data-animation-duration="1500" data-animation-delay="500" data-animation-direction="Right">
              <div class="u-container-layout u-container-layout-5"><span class="u-icon u-icon-circle u-spacing-20 u-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c65d"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-c65d" style="enable-background:new 0 0 512 512;"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="244.609" y1="248.3229" x2="502.949" y2="-10.0171" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#FFFFFF"></stop><stop offset="1" style="stop-color:#C3C3C3"></stop>
</linearGradient><path style="fill:url(#SVGID_1_);" d="M435.477,258.476c0,20.617-3.142,40.513-8.992,59.204c-0.633,2.086-1.316,4.148-2.049,6.197  c-2.31,6.682-4.992,13.19-7.998,19.524c-2.521,5.341-5.279,10.544-8.271,15.599c-5.961,10.147-12.792,19.71-20.418,28.59  c-7.973,9.302-16.792,17.86-26.33,25.56c-34.042,27.41-77.325,43.829-124.445,43.829c-109.628,0-198.503-88.875-198.503-198.503  S127.344,59.973,236.973,59.973S435.477,148.848,435.477,258.476z"></path><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="315.9182" y1="251.5286" x2="103.7421" y2="275.3482" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#C3C3C3;stop-opacity:0"></stop><stop offset="0.267" style="stop-color:#A4A4A4;stop-opacity:0.267"></stop><stop offset="0.542" style="stop-color:#8B8B8B;stop-opacity:0.542"></stop><stop offset="0.794" style="stop-color:#7C7C7C;stop-opacity:0.794"></stop><stop offset="1" style="stop-color:#777777"></stop>
</linearGradient><path style="fill:url(#SVGID_2_);" d="M236.973,123.992c-7.789,0-14.104,112.592-14.104,120.381c0,4.963,2.57,9.32,6.446,11.833  l145.297,145.297c24.512-23.594,42.967-53.429,52.82-86.949C394.987,282.345,236.973,123.992,236.973,123.992z"></path><linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="235.8586" y1="262.5425" x2="235.8586" y2="229.1925" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#F18D00"></stop><stop offset="1" style="stop-color:#ED7103"></stop>
</linearGradient><circle style="fill:url(#SVGID_3_);" cx="236.976" cy="258.479" r="11.218"></circle><linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="271.2131" y1="279.83" x2="281.0432" y2="248.87" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#A7F3CE"></stop><stop offset="1" style="stop-color:#61DB99"></stop>
</linearGradient><path style="fill:url(#SVGID_4_);" d="M236.973,100.82c-1.362,0-2.595,0.552-3.488,1.445c-0.892,0.892-1.445,2.125-1.445,3.488  v36.167c0,1.021,0.31,1.97,0.842,2.757c0.354,0.525,0.807,0.978,1.332,1.332c0.262,0.178,0.543,0.33,0.838,0.455  c0.59,0.249,1.239,0.388,1.919,0.388c1.362,0,2.595-0.552,3.488-1.445c0.892-0.893,1.445-2.125,1.445-3.488v-36.167  C241.905,103.028,239.696,100.82,236.973,100.82z"></path><linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="193.8578" y1="255.2691" x2="203.6878" y2="224.3091" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#A7F3CE"></stop><stop offset="1" style="stop-color:#61DB99"></stop>
</linearGradient><path style="fill:url(#SVGID_5_);" d="M236.973,370.102c-2.724,0-4.932,2.209-4.932,4.932v36.167c0,0.47,0.086,0.915,0.209,1.345  c0.588,2.065,2.469,3.587,4.722,3.587c0.681,0,1.33-0.139,1.919-0.388c1.77-0.749,3.013-2.502,3.013-4.545v-36.167  C241.905,372.31,239.696,370.102,236.973,370.102z"></path><linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="349.604" y1="270.827" x2="395.454" y2="239.867" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#A7F3CE"></stop><stop offset="1" style="stop-color:#61DB99"></stop>
</linearGradient><path style="fill:url(#SVGID_6_);" d="M389.697,253.545H353.53c-2.724,0-4.932,2.208-4.932,4.932c0,2.724,2.208,4.932,4.932,4.932  h36.167c2.724,0,4.932-2.208,4.932-4.932C394.63,255.753,392.421,253.545,389.697,253.545z"></path><linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="81.3745" y1="270.8276" x2="127.2245" y2="239.8676" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#A7F3CE"></stop><stop offset="1" style="stop-color:#61DB99"></stop>
</linearGradient><path style="fill:url(#SVGID_7_);" d="M125.348,258.476c0-1.021-0.31-1.971-0.842-2.758c-0.354-0.525-0.807-0.978-1.332-1.332  c-0.787-0.532-1.736-0.842-2.758-0.842H84.248c-1.362,0-2.595,0.552-3.488,1.445c-0.892,0.893-1.445,2.125-1.445,3.488  c0,2.724,2.208,4.932,4.932,4.932h36.167c1.362,0,2.595-0.552,3.488-1.445S125.348,259.839,125.348,258.476z"></path><linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="362.7839" y1="323.7611" x2="398.0839" y2="292.8011" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#A7F3CE"></stop><stop offset="1" style="stop-color:#61DB99"></stop>
</linearGradient><path style="fill:url(#SVGID_8_);" d="M322.879,179.545l25.574-25.574c1.926-1.926,1.926-5.049,0-6.975  c-1.926-1.927-5.049-1.926-6.975,0l-25.574,25.574c-1.927,1.927-1.927,5.049,0,6.975  C317.83,181.471,320.953,181.471,322.879,179.545z"></path><linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="79.0972" y1="216.568" x2="114.3872" y2="185.608" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#A7F3CE"></stop><stop offset="1" style="stop-color:#61DB99"></stop>
</linearGradient><path style="fill:url(#SVGID_9_);" d="M158.041,337.408c-1.926-1.926-5.049-1.926-6.975,0l-25.574,25.574  c-1.661,1.661-1.881,4.209-0.677,6.116c0.153,0.242,0.336,0.468,0.535,0.686c0.051,0.056,0.087,0.119,0.142,0.174l0,0l0,0  c0.94,0.94,2.165,1.414,3.397,1.436c0.03,0.001,0.06,0.009,0.09,0.009c1.262,0,2.524-0.482,3.488-1.445l0,0l25.574-25.574  c0.722-0.722,1.174-1.612,1.354-2.545c0.06-0.311,0.09-0.626,0.09-0.942C159.486,339.633,159.005,338.37,158.041,337.408z"></path><linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="268.7621" y1="216.5879" x2="304.0421" y2="185.6279" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#A7F3CE"></stop><stop offset="1" style="stop-color:#61DB99"></stop>
</linearGradient><path style="fill:url(#SVGID_10_);" d="M348.453,362.981l-25.574-25.574c-0.602-0.602-1.326-0.993-2.088-1.219  c-0.733-0.217-1.501-0.275-2.251-0.145c-0.965,0.169-1.89,0.617-2.635,1.362c-1.927,1.927-1.927,5.049,0,6.975l25.574,25.574  c0.289,0.289,0.61,0.52,0.945,0.722c1.896,1.146,4.393,0.916,6.031-0.722c0.785-0.785,1.233-1.772,1.377-2.793  C350.041,365.681,349.594,364.123,348.453,362.981z"></path><linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="173.1179" y1="323.7658" x2="208.4179" y2="292.8058" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#A7F3CE"></stop><stop offset="1" style="stop-color:#61DB99"></stop>
</linearGradient><path style="fill:url(#SVGID_11_);" d="M132.467,146.997c-0.963-0.963-2.226-1.445-3.488-1.445c-0.315,0-0.631,0.03-0.942,0.09  c-0.933,0.181-1.823,0.631-2.545,1.354c-0.963,0.963-1.445,2.226-1.445,3.488c0,0.315,0.03,0.631,0.09,0.942  c0.181,0.933,0.631,1.823,1.354,2.545l25.574,25.574l0,0l0,0c0.044,0.044,0.096,0.073,0.142,0.115  c0.45,0.418,0.951,0.749,1.49,0.968c0.593,0.241,1.225,0.361,1.856,0.361c1.262,0,2.525-0.482,3.488-1.445  c0.722-0.722,1.174-1.613,1.354-2.545c0.06-0.311,0.09-0.626,0.09-0.942c0-1.262-0.482-2.525-1.445-3.488L132.467,146.997z"></path><linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="313.9106" y1="211.3143" x2="227.5306" y2="306.1943" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#C3C3C3;stop-opacity:0"></stop><stop offset="0.267" style="stop-color:#A4A4A4;stop-opacity:0.267"></stop><stop offset="0.542" style="stop-color:#8B8B8B;stop-opacity:0.542"></stop><stop offset="0.794" style="stop-color:#7C7C7C;stop-opacity:0.794"></stop><stop offset="1" style="stop-color:#777777"></stop>
</linearGradient><path style="fill:url(#SVGID_12_);" d="M416.438,343.402c-2.521,5.341-5.279,10.544-8.271,15.599  c-5.961,10.147-12.792,19.71-20.418,28.59c-7.973,9.302-16.792,17.86-26.33,25.56L221.771,273.679  c-8.408-8.396-8.408-22.008,0-30.404c0.372-0.372,0.745-0.721,1.142-1.056c8.047-7.004,20.07-7.004,28.118,0  c0.398,0.335,0.77,0.683,1.142,1.056c0.372,0.372,0.745,0.77,1.068,1.168h0.012c0.248,0.012,0.497,0.025,0.77,0.037  c0.472,0.037,0.994,0.062,1.552,0.099c2.931,0.186,6.943,0.497,11.6,0.919c1.391,0.124,2.844,0.261,4.347,0.41  c1.08,0.111,2.186,0.211,3.316,0.335c0.957,0.099,1.926,0.199,2.918,0.298c0.72,0.074,1.453,0.162,2.186,0.236  c1.168,0.124,2.335,0.261,3.515,0.398c5.614,0.646,11.426,1.378,16.977,2.199c0.758,0.111,1.515,0.224,2.261,0.347  c0.111,0.012,0.236,0.025,0.347,0.05c0.869,0.137,1.727,0.273,2.571,0.398c0.844,0.149,1.677,0.286,2.497,0.422  c0.546,0.099,1.093,0.187,1.639,0.286c0.832,0.149,1.664,0.298,2.484,0.46c0.41,0.074,0.82,0.149,1.217,0.224  c0.844,0.174,1.651,0.335,2.447,0.497c0.248,0.05,0.485,0.099,0.721,0.149c0.323,0.074,0.646,0.15,0.957,0.211  c0.149,0.025,0.298,0.062,0.447,0.099c0.46,0.111,0.919,0.211,1.353,0.31c0.31,0.074,0.608,0.15,0.894,0.211  c1.155,0.298,2.236,0.583,3.254,0.869c0.236,0.074,0.472,0.149,0.696,0.211c0.187,0.05,0.36,0.111,0.534,0.162  c0.261,0.087,0.509,0.174,0.758,0.249c0.087,0.025,0.174,0.049,0.261,0.087c0.497,0.174,0.957,0.335,1.391,0.509  c0.037,0.012,0.074,0.037,0.124,0.049c0.236,0.099,0.472,0.199,0.696,0.286c0.534,0.236,1.006,0.46,1.429,0.696  c0.187,0.111,0.347,0.211,0.509,0.31c0.521,0.335,0.919,0.671,1.18,1.006c0.087,0.087,0.149,0.187,0.199,0.273  c0.012,0.025,0.025,0.037,0.025,0.05c0.062,0.111,0.111,0.224,0.137,0.347c0.037,0.111,0.049,0.224,0.049,0.335L416.438,343.402z"></path><linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="303.5925" y1="262.181" x2="0.3025" y2="232.171" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#FFB92D"></stop><stop offset="1" style="stop-color:#F59500"></stop>
</linearGradient><path style="fill:url(#SVGID_13_);" d="M251.077,272.58c-7.789,0-14.104-6.315-14.104-14.104c0-7.789,6.315-14.104,14.104-14.104  c7.789,0,80.429,6.315,80.429,14.104C331.507,266.266,258.866,272.58,251.077,272.58z"></path><linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="264.1326" y1="199.9339" x2="294.1426" y2="86.7139" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#FFB92D"></stop><stop offset="1" style="stop-color:#F59500"></stop>
</linearGradient><path style="fill:url(#SVGID_14_);" d="M251.077,244.372c0,7.789-6.315,14.104-14.104,14.104s-14.104-6.315-14.104-14.104  c0-7.789,6.315-120.381,14.104-120.381C244.762,123.992,251.077,236.583,251.077,244.372z"></path><linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="235.8586" y1="267.0425" x2="235.8586" y2="236.0825" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#A7F3CE"></stop><stop offset="1" style="stop-color:#61DB99"></stop>
</linearGradient><circle style="fill:url(#SVGID_15_);" cx="236.976" cy="258.479" r="21.504"></circle><linearGradient id="SVGID_16_" gradientUnits="userSpaceOnUse" x1="307.8288" y1="98.3728" x2="189.9988" y2="216.2028" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#C3C3C3;stop-opacity:0"></stop><stop offset="0.267" style="stop-color:#A4A4A4;stop-opacity:0.267"></stop><stop offset="0.542" style="stop-color:#8B8B8B;stop-opacity:0.542"></stop><stop offset="0.794" style="stop-color:#7C7C7C;stop-opacity:0.794"></stop><stop offset="1" style="stop-color:#777777"></stop>
</linearGradient><path style="fill:url(#SVGID_16_);" d="M227.108,428.649c-6.123,8.057-9.184,16.304-9.184,24.739v2.678  c6.269,0.597,12.621,0.914,19.048,0.914c47.12,0,90.403-16.419,124.445-43.829c9.538-7.7,18.357-16.258,26.33-25.56  c3.221-3.751,6.291-7.63,9.222-11.616l-75.603-75.549c-11.729-10.459-25.944-15.687-42.644-15.687  c-15.763,0-29.321,4.644-40.672,13.932c-11.355,9.288-17.029,21.251-17.029,35.887c0,7.248,1.943,12.106,5.801,14.61l42.835,43.049  l-19.926,14.504C240.773,413.284,233.23,420.592,227.108,428.649z"></path><g><linearGradient id="SVGID_17_" gradientUnits="userSpaceOnUse" x1="277.8646" y1="173.7625" x2="277.8646" y2="54.8725" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#62E1FB"></stop><stop offset="1" style="stop-color:#00A2F3"></stop>
</linearGradient><path style="fill:url(#SVGID_17_);" d="M217.925,480.656v-27.268c0-8.436,3.061-16.681,9.184-24.739   c6.121-8.057,13.664-15.366,22.623-21.928l27.021-19.668c9.008-6.554,16.651-13.766,22.941-21.634   c6.285-7.863,9.429-15.732,9.429-23.6c0-7.863-2.581-14.747-7.74-20.649c-5.163-5.897-12.714-8.848-22.659-8.848   c-8.444,0-15.296,2.331-20.546,6.987c-5.257,4.659-7.882,11.55-7.882,20.676c0,2.983-1.456,5.594-4.363,7.829   c-2.91,2.235-6.711,3.352-11.4,3.352c-9.007,0-13.51-5.534-13.51-16.608c0-14.636,5.674-26.598,17.029-35.887   c11.351-9.288,24.909-13.932,40.672-13.932c16.699,0,30.915,5.227,42.644,15.686c11.724,10.459,17.592,23.973,17.592,40.553   c0,11.241-3.144,21.775-9.429,31.608c-6.29,9.834-13.889,18.169-22.8,25.003c-8.915,6.839-17.829,13.299-26.739,19.386   c-8.915,6.087-16.513,12.222-22.799,18.402c-6.29,6.184-9.429,12.178-9.429,17.983v10.674h82.752c2.626,0,4.925,1.267,6.896,3.8   c1.971,2.534,2.957,5.587,2.957,9.149c0,3.567-0.981,6.711-2.938,9.429c-1.957,2.723-4.24,4.083-6.848,4.083h-99.519   c-2.982,0-5.92-0.938-8.804-2.811C219.368,485.81,217.925,483.47,217.925,480.656z"></path><linearGradient id="SVGID_18_" gradientUnits="userSpaceOnUse" x1="406.4156" y1="173.7625" x2="406.4156" y2="54.8725" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#62E1FB"></stop><stop offset="1" style="stop-color:#00A2F3"></stop>
</linearGradient><path style="fill:url(#SVGID_18_);" d="M341.493,433.183c0-2.058,0.563-4.12,1.69-6.183l68.116-134.108   c2.815-5.435,7.129-8.152,12.948-8.152c3.187,0,6.474,1.124,9.851,3.377c3.377,2.253,5.067,4.973,5.067,8.163   c0,1.125-0.472,2.629-1.409,4.504l-57.982,115.683h41.376v-39.066c0-6.607,4.969-9.909,14.918-9.909   c4.125,0,7.643,0.853,10.555,2.551c2.907,1.698,4.363,4.151,4.363,7.359v39.066h13.792c3.188,0,5.672,1.395,7.458,4.183   c1.781,2.788,2.674,6.039,2.674,9.75c0,3.342-1.034,6.456-3.097,9.332c-2.066,2.88-4.411,4.319-7.036,4.319h-13.792v36.529   c0,3.026-1.504,5.432-4.504,7.227c-3.005,1.793-6.474,2.688-10.415,2.688c-4.129,0-7.648-0.893-10.555-2.688   c-2.912-1.795-4.363-4.201-4.363-7.227v-36.529h-69.241c-3.005,0-5.489-0.972-7.458-2.924   C342.479,439.174,341.493,436.526,341.493,433.183z"></path>
</g><linearGradient id="SVGID_19_" gradientUnits="userSpaceOnUse" x1="303.0963" y1="189.7602" x2="416.3163" y2="76.5402" gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5599)"><stop offset="0" style="stop-color:#FFB92D"></stop><stop offset="1" style="stop-color:#F59500"></stop>
</linearGradient><path style="fill:url(#SVGID_19_);" d="M495.309,224.493h-22.755h-1.056C454.964,109.869,356.102,21.505,236.973,21.505  C106.305,21.505,0,127.809,0,258.476c0,53.917,18.597,106.688,52.365,148.591c33.259,41.272,79.869,70.515,131.243,82.344  c1.406,0.325,2.811,0.479,4.196,0.479c8.483,0,16.153-5.834,18.138-14.453c2.308-10.027-3.948-20.025-13.976-22.333  c-43.272-9.964-82.546-34.615-110.59-69.414c-28.862-35.815-44.117-79.112-44.117-125.212c0-110.123,89.591-199.713,199.714-199.713  c98.54,0,180.628,71.738,196.808,165.729H414.13c-14.841,0-22.273,17.943-11.779,28.436l40.59,40.59  c6.505,6.505,17.053,6.505,23.558,0l40.59-40.59C517.582,242.436,510.149,224.493,495.309,224.493z"></path></svg></span>
                <h2 class="u-custom-font u-font-roboto-condensed u-text u-text-body-alt-color u-text-7">horaires</h2>
                <p class="u-text u-text-body-alt-color u-text-8"> Du
lundi au dimanche:<br>&nbsp;de 08&nbsp;: 00 à 22&nbsp;: 00
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="carousel_8619">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-4 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-27">
                <div class="u-layout-col">
                  <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <img class="u-expanded-width u-image u-image-default u-image-1" src="images/pcr.jpeg" data-image-width="720" data-image-height="632" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Left">
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-33">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <h4 class="u-text u-text-1">A Propos du Test PCR</h4>
                      <p class="u-align-center u-text u-text-2" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Right">Plus besoin de se rendre à un centre médical! Ce concept a été conçu pour faciliter la vie de ceux, qu’à la veille d’un voyage d’affaires ou d’un départ en vacances, souhaitent éviter tout désagrément associé aux démarches à entreprendre pour effectuer un test auprès d’un centre médical.Ce service comprend:<br>
                        <br>le transport d'un-e infirmier-ère ou, si nécessaire, d'un médecin au domicile / hôtel / bûreau du patient pour effectuer un test PCR les résultats du test dans les 24 heures la disponibilité du test 7/7
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-image u-parallax u-shading u-section-3" id="carousel_266d" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h2 class="u-align-center u-text u-text-custom-color-3 u-text-2">Prendre Rendez-Vous</h2>
        

                    {{-- <form method="POST" action="{{ route("rdv") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('date_rendez_vous') ? 'has-error' : '' }}">
                                    <label class="required" for="date_rendez_vous">{{ trans('cruds.testCovid.fields.date_rendez_vous') }}</label>
                                    <input class="form-control date" type="text" name="date_rendez_vous" id="date_rendez_vous" value="{{ old('date_rendez_vous') }}" required>
                                    @if($errors->has('date_rendez_vous'))
                                        <span class="help-block" role="alert">{{ $errors->first('date_rendez_vous') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.date_rendez_vous_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('date_voyage') ? 'has-error' : '' }}">
                                    <label class="required" for="date_voyage">{{ trans('cruds.testCovid.fields.date_voyage') }}</label>
                                    <input class="form-control date" type="text" name="date_voyage" id="date_voyage" value="{{ old('date_voyage') }}" required>
                                    @if($errors->has('date_voyage'))
                                        <span class="help-block" role="alert">{{ $errors->first('date_voyage') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.date_voyage_helper') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                    <label class="required" for="nom">{{ trans('cruds.testCovid.fields.nom') }}</label>
                                    <input class="form-control" type="text" name="nom" id="nom" value="{{ old('nom', '') }}" required>
                                    @if($errors->has('nom'))
                                        <span class="help-block" role="alert">{{ $errors->first('nom') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.nom_helper') }}</span>
                                </div>
                                
                            </div>
                            <div class="col-lg-6"><div class="form-group {{ $errors->has('prenoms') ? 'has-error' : '' }}">
                                <label for="prenoms">{{ trans('cruds.testCovid.fields.prenoms') }}</label>
                                <input class="form-control" type="text" name="prenoms" id="prenoms" value="{{ old('prenoms', '') }}">
                                @if($errors->has('prenoms'))
                                    <span class="help-block" role="alert">{{ $errors->first('prenoms') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.prenoms_helper') }}</span>
                            </div></div>
                        </div>

                        <div class="col-lg-12">
                            <div class="col-lg-6"> <div class="form-group {{ $errors->has('date_naissance') ? 'has-error' : '' }}">
                                <label class="required" for="date_naissance">{{ trans('cruds.testCovid.fields.date_naissance') }}</label>
                                <input class="form-control date" type="text" name="date_naissance" id="date_naissance" value="{{ old('date_naissance') }}" required>
                                @if($errors->has('date_naissance'))
                                    <span class="help-block" role="alert">{{ $errors->first('date_naissance') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.date_naissance_helper') }}</span>
                            </div></div>
                            <div class="col-lg-6"> <div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                                <label class="required" for="telephone">{{ trans('cruds.testCovid.fields.telephone') }}</label>
                                <input class="form-control" type="number" name="telephone" id="telephone" value="{{ old('telephone', '') }}" step="1" required>
                                @if($errors->has('telephone'))
                                    <span class="help-block" role="alert">{{ $errors->first('telephone') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.telephone_helper') }}</span>
                            </div></div>
                        </div>
                        

                        
                        <div class="col-lg-12">
                            <div class="col-lg-6"><div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email">{{ trans('cruds.testCovid.fields.email') }}</label>
                                <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                @if($errors->has('email'))
                                    <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.email_helper') }}</span>
                            </div></div>
                            <div class="col-lg-6"><div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                                <label for="adresse">{{ trans('cruds.testCovid.fields.adresse') }}</label>
                                <input class="form-control" type="text" name="adresse" id="adresse" value="{{ old('adresse', '') }}">
                                @if($errors->has('adresse'))
                                    <span class="help-block" role="alert">{{ $errors->first('adresse') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.adresse_helper') }}</span>
                            </div></div>
                        </div>

                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('heure_rendez_vous') ? 'has-error' : '' }}">
                                    <label class="required" for="heure_rendez_vous">{{ trans('cruds.testCovid.fields.heure_rendez_vous') }}</label>
                                    <input class="form-control timepicker" type="text" name="heure_rendez_vous" id="heure_rendez_vous" value="{{ old('heure_rendez_vous') }}" required>
                                    @if($errors->has('heure_rendez_vous'))
                                        <span class="help-block" role="alert">{{ $errors->first('heure_rendez_vous') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.heure_rendez_vous_helper') }}</span>
                                </div></div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('destination') ? 'has-error' : '' }}">
                                    <label class="required" for="destination">{{ trans('cruds.testCovid.fields.destination') }}</label>
                                    <input class="form-control" type="text" name="destination" id="destination" value="{{ old('destination', '') }}" required>
                                    @if($errors->has('destination'))
                                        <span class="help-block" role="alert">{{ $errors->first('destination') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.destination_helper') }}</span>
                                </div></div>
                        </div>



                        <div class="col-lg-12">

                            <div class="col-lg-6"><div class="form-group {{ $errors->has('heure_voyage') ? 'has-error' : '' }}">
                                <label for="heure_voyage">{{ trans('cruds.testCovid.fields.heure_voyage') }}</label>
                                <input class="form-control timepicker" type="text" name="heure_voyage" id="heure_voyage" value="{{ old('heure_voyage') }}">
                                @if($errors->has('heure_voyage'))
                                    <span class="help-block" role="alert">{{ $errors->first('heure_voyage') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.heure_voyage_helper') }}</span>
                            </div></div>
                            <div class="col-lg-6"><div class="form-group {{ $errors->has('sexe') ? 'has-error' : '' }}">
                                <label>{{ trans('cruds.testCovid.fields.sexe') }}</label>
                                @foreach(App\Models\TestCovid::SEXE_RADIO as $key => $label)
                                    <div>
                                        <input type="radio" id="sexe_{{ $key }}" name="sexe" value="{{ $key }}" {{ old('sexe', '') === (string) $key ? 'checked' : '' }}>
                                        <label for="sexe_{{ $key }}" style="font-weight: 400">{{ $label }}</label>
                                    </div>
                                @endforeach
                                @if($errors->has('sexe'))
                                    <span class="help-block" role="alert">{{ $errors->first('sexe') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.sexe_helper') }}</span>
                            </div></div>
                        </div>
                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                            <label for="message">{{ trans('cruds.testCovid.fields.message') }}</label>
                            <textarea class="form-control" name="message" id="message">{{ old('message') }}</textarea>
                            @if($errors->has('message'))
                                <span class="help-block" role="alert">{{ $errors->first('message') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.message_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                Valider
                            </button>
                        </div>
                    </form> --}}

                    <div class="col-lg-12">
                        <div class="btn btn-lg btn-info">
                            <span class="glyphicon glyphicon-book"></span>  <a href="{{ route('rendez-vous') }}">Prendre Rendez Vous</a>
                        </div>
                        
                    </div>
                 
      </div>
    </section>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer" id="sec-6127"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://agromedconsulting.com" class="u-image u-logo u-image-1" data-image-width="413" data-image-height="92">
          <img src="images/logo2.PNG" class="u-logo-image u-logo-image-1">
        </a><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.994 511.994" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8f41"></use></svg><svg class="u-svg-content" viewBox="0 0 511.994 511.994" id="svg-8f41"><g><g><path d="m124.939 290.066 97.485 97.485c7.798 7.798 20.493 7.798 28.283.008l15.812-15.812 59.717 25.188 24.134 58.663-15.812 15.812c-54.117 54.117-141.867 54.109-195.984-.008l-97.485-97.485c-54.126-54.126-54.126-141.867-.008-195.984l15.812-15.812 59.19 24.661 24.661 59.19-15.812 15.812c-7.792 7.789-7.792 20.484.007 28.282z" fill="#9dc6fb"></path><path d="m349.373 453.156.998 2.44-15.814 15.814c-54.117 54.117-141.867 54.109-195.984-.008l-97.485-97.485c-54.126-54.126-54.126-141.867-.008-195.984l15.814-15.814 2.432 1.006c-36.777 53.933-31.226 128.074 16.628 175.927l97.485 97.485c47.852 47.854 122.002 53.396 175.934 16.619z" fill="#80b4fb"></path><path d="m59.053 129.754c-9.535 9.535-9.535 24.994 0 34.529l79.528 79.528c9.535 9.535 24.994 9.535 34.529 0 9.535-9.535 9.535-24.994 0-34.529l-79.528-79.528c-9.535-9.535-24.995-9.535-34.529 0z" fill="#f9f6f9"></path><path d="m269.206 339.907c-9.535 9.535-9.535 24.994 0 34.529l79.528 79.528c9.535 9.535 24.994 9.535 34.529 0 9.535-9.535 9.535-24.994 0-34.529l-79.528-79.528c-9.535-9.535-24.994-9.535-34.529 0z" fill="#f9f6f9"></path><g fill="#dddaec"><path d="m339.015 375.186 44.248 44.248c4.771 4.771 7.144 11.018 7.153 17.265 0 6.255-2.39 12.502-7.152 17.265-9.534 9.534-24.996 9.534-34.53 0l-44.248-44.248c9.534 9.534 24.996 9.534 34.53 0 4.763-4.763 7.144-11.018 7.152-17.265-.009-6.247-2.39-12.502-7.153-17.265z"></path><path d="m128.861 165.033 44.248 44.248c4.771 4.771 7.144 11.018 7.153 17.265 0 6.255-2.39 12.502-7.152 17.265-9.534 9.534-24.996 9.534-34.53 0l-44.248-44.248c9.534 9.534 24.996 9.534 34.53 0 4.763-4.763 7.144-11.018 7.152-17.265-.009-6.247-2.39-12.502-7.153-17.265z"></path>
</g>
</g><g><path d="m256.49 91.542c-10.448 0-18.918-8.47-18.918-18.918v-53.706c0-10.448 8.47-18.918 18.918-18.918 10.448 0 18.918 8.47 18.918 18.918v53.706c0 10.448-8.47 18.918-18.918 18.918z" fill="#5e54ac"></path>
</g><g><path d="m351.102 91.139c-9.048-5.224-12.148-16.794-6.924-25.842l13.976-24.207c5.224-9.048 16.794-12.148 25.842-6.924 9.048 5.224 12.148 16.794 6.924 25.842l-13.976 24.207c-5.224 9.048-16.794 12.148-25.842 6.924z" fill="#5e54ac"></path>
</g><g><path d="m420.363 160.4c-5.224-9.048-2.124-20.618 6.924-25.842l24.207-13.976c9.048-5.224 20.618-2.124 25.842 6.924 5.224 9.048 2.124 20.618-6.924 25.842l-24.207 13.976c-9.048 5.224-20.618 2.124-25.842-6.924z" fill="#5e54ac"></path>
</g><g><path d="m419.96 255.012c0-10.448 8.47-18.918 18.918-18.918h53.706c10.448 0 18.918 8.47 18.918 18.918 0 10.448-8.47 18.918-18.918 18.918h-53.706c-10.448 0-18.918-8.47-18.918-18.918z" fill="#5e54ac"></path>
</g><g><path d="m420.363 349.624c5.224-9.048 16.794-12.148 25.842-6.924l24.207 13.976c9.048 5.224 12.148 16.794 6.924 25.842-5.224 9.048-16.794 12.148-25.842 6.924l-24.207-13.976c-9.048-5.223-12.148-16.793-6.924-25.842z" fill="#5e54ac"></path>
</g><g><path d="m128.984 34.165c9.048-5.224 20.618-2.124 25.842 6.924l13.976 24.207c5.224 9.048 2.124 20.618-6.924 25.842-9.048 5.224-20.618 2.124-25.842-6.924l-13.976-24.207c-5.225-9.048-2.125-20.618 6.924-25.842z" fill="#5e54ac"></path>
</g><g><g><path d="m358.353 289.095c-.022 0-.044 0-.067-.001-4.268-.037-7.696-3.526-7.66-7.792.059-6.89.121-14.654.178-22.699h-43.888c-2.733 0-5.264-1.444-6.653-3.798-1.39-2.354-1.433-5.267-.113-7.66 5.793-10.499 34.98-63.232 40.794-70.365 6.285-7.712 12.929-6.7 15.497-5.905 5.442 1.686 9.315 7.063 9.868 13.701.311 3.724.206 33.024.05 58.575h5.433c4.268 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726h-5.536c-.081 11.31-.155 20.135-.178 22.832-.037 4.245-3.489 7.66-7.725 7.66zm-38.319-45.944h30.872c.139-22.947.215-45.216.101-53.829-5.61 8.741-19.676 33.542-30.973 53.829z" fill="#dd5790"></path>
</g><g><path d="m250.863 289.113c-19.718 0-21.128-.47-22.161-.815-2.625-.875-4.584-2.85-5.374-5.417-1.394-4.532.503-7.016 6.787-15.244 5.264-6.892 15.062-19.722 31.473-43.171 5.782-8.629 9.247-14.688 10.093-22.445-.24-10.11-8.538-18.259-18.705-18.259-8.922 0-16.643 6.34-18.358 15.075-.822 4.187-4.883 6.911-9.071 6.092-4.187-.822-6.914-4.884-6.092-9.071 3.136-15.963 17.233-27.548 33.521-27.548 18.837 0 34.162 15.325 34.162 34.162-.043 1.224-.496 4.528-.71 5.741-1.774 7.65-5.871 16.1-12.181 25.114-14.219 20.317-23.542 32.767-29.274 40.307 10.17.037 24.94-.055 38.719-.228 4.273-.098 7.771 3.362 7.823 7.629.054 4.267-3.361 7.769-7.628 7.823-14.596.182-25.238.255-33.024.255zm-18.346-15.734" fill="#dd5790"></path>
</g>
</g>
</g></svg></span>
        <ul class="u-custom-list u-text u-text-1">
          <li>
            <div class="u-list-icon">
              <svg class="u-svg-content" viewBox="0 0 24 24" id="svg-e50a"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
            </div>781824340&nbsp;&nbsp;<br>
          </li>
          <li>
            <div class="u-list-icon">
              <svg class="u-svg-content" viewBox="0 0 24 24" id="svg-e50a"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
            </div>781746058&nbsp;&nbsp;
          </li>
        </ul><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a74b"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-a74b" style="enable-background:new 0 0 512 512;"><rect x="64" y="64" style="fill:#ECEFF1;" width="384" height="384"></rect><polygon style="fill:#CFD8DC;" points="256,296.384 448,448 448,148.672 "></polygon><path style="fill:#F44336;" d="M464,64h-16L256,215.616L64,64H48C21.504,64,0,85.504,0,112v288c0,26.496,21.504,48,48,48h16V148.672  l192,147.68L448,148.64V448h16c26.496,0,48-21.504,48-48V112C512,85.504,490.496,64,464,64z"></path></svg></span>
        <p class="u-small-text u-text u-text-variant u-text-2">
          <a href="mailto:agromedconsulting@gmail.com" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-1">agromedconsulting@gmail.com</a>
        </p>
        <a href="mailto:agromedconsulting@gmail.com" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-2">Tous droits réservés @&nbsp; Agromed Consulting</a>
      </div></footer><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: linear-gradient(#478ac9, #a9c840); right: 20px; bottom: 20px;" class="u-back-to-top u-gradient u-icon u-icon-circle u-opacity u-opacity-95 u-spacing-12" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  </body>
</html>