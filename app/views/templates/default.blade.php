
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home Igniter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <!-- {{ HTML::style("assets/css/bootstrap.css")}} -->
    {{ HTML::style("assets/css/app.v1.css")}}
    {{ HTML::style("assets/css/sidebar.css")}}
    {{ HTML::style("assets/css/style3.css")}}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      {{ HTML::script("assets/js/html5shiv.js")}}
    <![endif]-->

    @yield('style')

  </head>

  <body>

          @if( Auth::check() )

      <div id="sidebar-wrapper">

         <div class=" nav-user"> 
            <div class="nav-avatar"> 
              <a href="#" id="user_photo" class="avatar animated rollIn"> 
              {{HTML::image('assets/images/avatar_default.jpg','Home Igniter',array('style'=>'width:150px'))}}
              </a>
              <div id="user-tools">
                <a href="#">
                  <i class="icon-cogs"></i>
                </a>
              </div>
            </div>
          </div>  

          <div class="sidebar-menus">
            <ul class="ca-menu">
                <li>
                    <a href="#">
                        <span class="ca-icon">p</span>
                        <div class="ca-content">
                            <h2 class="ca-main">Tasks</h2>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ca-icon">E</span>
                        <div class="ca-content">
                            <h2 class="ca-main">Events</h2>
                        </div>  
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ca-icon">c</span>
                        <div class="ca-content">
                            <h2 class="ca-main">Reminders</h2>
                        </div>  
                    </a>
                </li>
                <li>
                  {{HTML::decode(HTML::link('user/logout','
                    <span class="ca-icon">X</span>
                      <div class="ca-content">
                        <h2 class="ca-main">
                          logout
                        </h2>
                      </div>  
                  ',array("class" => "ca-main")))}}
                </li>
            </ul>
          </div>

      </div>
          @endif
      
    @yield('conteudo')

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script("assets/js/jquery.js")}}
    {{ HTML::script("assets/js/transition.js")}}
    {{ HTML::script("assets/js/alert.js")}}
    {{ HTML::script("assets/js/modal.js")}}
    {{ HTML::script("assets/js/dropdown.js")}}
    {{ HTML::script("assets/js/scrollspy.js")}}
    {{ HTML::script("assets/js/tab.js")}}
    {{ HTML::script("assets/js/tooltip.js")}}
    {{ HTML::script("assets/js/popover.js")}}
    {{ HTML::script("assets/js/button.js")}}
    {{ HTML::script("assets/js/collapse.js")}}
    {{ HTML::script("assets/js/carousel.js")}}
    {{ HTML::script("assets/css/app.v1.js")}}

    <script type="text/javascript">
      
      // $("#animate").click(function(){
      //   $("#sidebar-wrapper").animate(
      //       {
      //         "width":"1px"
      //       }, {"queue":false, "duration":500});
      // });

      window.setTimeout(function(){
        $(".alert-danger").fadeTo(500,0).slideUp(500, function(){
          $(this).remove();
        });
      }, 2000);

    </script>

  @yield('scripts')

  </body>
</html>
