<nav>
    <div class="container">
        <ul>
            @foreach($menu as $value)
                <li><a class="nav-link">{{ $value }}</a></li>
            @endforeach
        </ul>
    </div>
</nav>
