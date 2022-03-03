<?php
$navLinks = [
    'characters' => 'characters',
    'comics' => 'comics',
    'movies' => 'movies',
    'tv' => 'tv',
    'games' => 'games',
    'collectibles' => 'collectibles',
    'videos' => 'videos',
    'fans' => 'fans',
    'news' => 'news',
];
?>

<div class="container d-flex justify-content-between align-items-center">
    <div class="nav_logo">
        <a href="{{ route('home') }}">
            <img src="{{'img/dc-logo.png'}}" alt="">
        </a>
    </div>

    <div class="nav_links">
        <ul class="d-flex mb-0">
            @foreach ($navLinks as $k => $navLink)
                <li class="dynamic">
                    <a href="{{ route($k) }}">
                        {{ $navLink }}
                    </a>
                </li>
            @endforeach

            <li class="dynamic">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        shop
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Link #1</a></li>
                        <li><a class="dropdown-item" href="#">Link #2</a></li>
                        <li><a class="dropdown-item" href="#">Link #3</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <div class="nav_search">
        {{-- QUI SEARCH FORM --}}
    </div>
</div>