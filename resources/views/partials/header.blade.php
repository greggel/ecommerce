
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="display:flex;justify-content:space-between;">
  <a class="navbar-brand" href="{{ route('product.index') }}">Music LTD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <a class="nav-link" href="#">Events</a>
        <a class="nav-link" href="#">Settings</a>
        <a class="nav-link" href="#">Payment</a>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.shoppingCart') }}"><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="badge" style="color:black">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span> Shopping Cart
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-users" aria-hidden="true">  Account</a></i>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @if(Auth::check())
            <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
            <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
          @else
            <a class="dropdown-item" href="{{ route('user.signup') }}">Sign up</a>
            <a class="dropdown-item" href="{{ route('user.signin') }}">Sign in</a>
          @endif
          <li role="separator" class="divider"></li>
        </div>
      </li>
    </ul>
  </div>
</nav>