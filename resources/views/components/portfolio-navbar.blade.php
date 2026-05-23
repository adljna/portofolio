@props(['active' => ''])

@php
    $isHome = request()->routeIs('home') || request()->is('/');

    $aboutHref = $isHome ? '#about' : url('/#about');
    $experienceHref = $isHome ? '#experience' : url('/#experience');
    $projectHref = url('/project');
@endphp

<nav class="navbar" aria-label="Main navigation">
    <div class="nav-menu">
        <a href="{{ $aboutHref }}" class="{{ $active === 'about' ? 'active' : '' }}">About</a>
        <a href="{{ $experienceHref }}" class="{{ $active === 'experience' ? 'active' : '' }}">Experience</a>
        <a href="{{ $projectHref }}" class="{{ $active === 'project' ? 'active' : '' }}">Project</a>
    </div>
</nav>
