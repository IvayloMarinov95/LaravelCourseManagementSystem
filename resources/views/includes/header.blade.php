<header>
<div id="back-top" style="opacity: 0.7;">
</div>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('index')}}">FDIBA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li  {{Request::is('/')? 'class=active' : '' }}><a href="{{route('index')}}">Начало <span class="sr-only">(current)</span></a></li>
        <li {{Request::is('registration*')? 'class=active' : '' }}><a href="{{route('registration')}}">Регистрация</a></li>
        <li  {{Request::is('contact*')? 'class=active' : '' }}><a href="{{route('contact')}}">Контакти</a></li>
        <li class="dropdown">
          <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><img src="img/bg.png" style="width:28px; height: 18px;"/> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li style="text-align: left"><a href="#"><img src="img/bg.png" class="lang"/>BG</a></li>
            <li role="separator" class="divider"></li>
            <li style="text-align: left"><a href="#"><img src="img/de.png" class="lang"/>DE</a></li>
            <li role="separator" class="divider"></li>
            <li style="text-align: left"><a href="#"><img src="img/en.png" class="lang"/>EN</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{asset('img\FDIBA_nova_sgrada_template.jpg')}}" alt="...">
    
    </div>
    <div class="item">
      <img src="{{asset('img\Biblioteka.jpg')}}" alt="...">
     
    </div>
    <div class="item">
      <img src="{{asset('img\Diplomirane.jpg')}}" alt="...":>
    </div>
  </div>
  <div>
  </div>
</div>
</header>