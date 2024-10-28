@extends('blog/profileLayout')

@section("main_content")
    {{-- Поиск --}}
    <div class="container mx-2 my-5 px-5" style="max-width: fit-content;">
        <div class="input-group mx-5" style="background: #121212; border-radius:50px; min-width: 150%">
            <input id="searchBar" type="search" class="form-control fs-3" placeholder="Поиск" aria-label="Search" aria-describedby="search-addon" style="background: transparent; border:0; border-radius:50px; color:white;">
        </div>
    </div>
@endsection