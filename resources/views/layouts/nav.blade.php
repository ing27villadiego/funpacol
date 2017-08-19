<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Funpacol</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('home')}}">Inicio</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proceso Operativo <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('employees')}}">Empleados</a></li>
                        <li><a href="{{route('promoters')}}">Promotores</a></li>
                        <li><a href="{{route('advisers')}}">Asesores</a></li>
                        <li><a href="{{route('postmens')}}">Mensajeros</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Beneficiarios Benefactores <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('datafamilies')}}">Datos Familiares</a></li>
                        <li><a href="{{route('godchildrens')}}">Ahijados</a></li>
                        <li><a href="{{route('godfathers')}}">Afiliciones</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cartera <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('list_collections')}}">Lista de cobros</a></li>
                        <li><a href="#">Asignacion de cobros</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a target="_blank" href="{{route('dashboard')}}">Dashboard Admin <span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

