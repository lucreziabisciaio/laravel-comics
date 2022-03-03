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
                <li>
                    <a href="{{ route($k) }}">
                        {{ $navLink }}
                    </a>
                </li>
            @endforeach
            {{-- <li v-for="link in nav" :key="link.id"> {{ link.label }} </li> --}}
        </ul>
    </div>
</div>