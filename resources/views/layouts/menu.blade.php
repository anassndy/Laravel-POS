<!-- need to remove -->
<li class="nav-item">
    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
    <a href="/products" class="nav-link {{ Request::is('products') ? 'active' : '' }}">
     <i class="nav-icon fas fa-archive"></i>
        <p>Products</p>
    </a>
    <a href="/users" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Users</p>
    </a>
    <a href="/customers" class="nav-link {{ Request::is('customers') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Customers</p>
    </a>
</li>
