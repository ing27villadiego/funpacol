<div class="sidebar" data-color="purple" data-image="{{asset('assets/img/sidebar-1.jpg')}}">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo">
        <a href="http://www.fundacionpadrinosdecolombia.org/" target="_blank" class="simple-text">
            Funpacol ( Sitio Web )
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard_users')}}">
                    <i class="material-icons">person</i>
                    <p>Usuarios</p>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard_cities')}}">
                    <i class="material-icons">location_on</i>
                    <p>Ciudades</p>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard_positions')}}">
                    <i class="material-icons">event_seat</i>
                    <p>Cargos</p>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard_godfathers')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Afiliaciones</p>
                </a>
            </li>
            <li>
                <a href="{{route('icons')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li>
                <a href="{{route('maps')}}">
                    <i class="material-icons">location_on</i>
                    <p>Maps</p>
                </a>
            </li>
            <li>
                <a href="{{route('notifications')}}">
                    <i class="material-icons text-gray">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="{{route('upgrade')}}">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>