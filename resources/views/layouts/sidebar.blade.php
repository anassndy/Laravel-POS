<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="container pt-3 pl-4">
        <div class="row d-flex flex-wrap justify-content-start align-items-center">
            <img src="{{ asset('images/image1.jpg') }}" 
            alt="" srcset=""
            style="vertical-align: middle;
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 50%;">
            <span class="text-white mx-2" style="font-weight: 600;">{{ config('app.name') }}</span>
        </div>
    </div>
    <hr>

    <div class="sidebar">
        <nav class="">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
