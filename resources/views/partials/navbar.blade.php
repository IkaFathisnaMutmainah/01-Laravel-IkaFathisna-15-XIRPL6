<head>
  <link rel="stylesheet" href="style.css"/>
  <script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>
</head>
<style>
  .search {
    background-color: white;
    height: 32px;
    padding: 4px 15px; 
    border-radius: 50px;
}
  .search input {
    border: none;
    outline: none;
    background: none;
  }
  .search a {
    color: black;
    opacity: 0.5; 
  }
  .search i {
    color: black;
    opacity: 0.5; 
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <b><a class="navbar-brand" href="/">Telkom Schools</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'About') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Contacts') ? 'active' : '' }}" href=" {{ route('contacts.create')}}">Contact Us</a>
        </li> -->
      </ul>
      
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route ('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('register')}}">Register</a>
        </li>
      </ul>
      <form action="/dashboard" method="GET">
      <div class="search">
        <input type="search" placeholder="Search..." id="inputsearch" name="search">
        <a href = "#"><i class="fa-solid fa-magnifying-glass"></i></a>
      </div>
      </form>
    </div>
  </div>
</nav>
