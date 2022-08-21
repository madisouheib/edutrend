 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg lss">
    <div class="container">
      <!-- Logo Image -->
      <img
        src="assets/logo.svg"
        width="200"
        alt=""
        class="d-inline-block me-2"
      />
      <!-- small screen collapse menu  -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- nav start-->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto" dir="rtl">
  
                @foreach($items as $menu_item)

                @if($menu_item->link()  ==  'education')
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#study-abroad"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                  {{ $menu_item->title }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/univs">معاهد اللغة</a></li>
                    <li><a class="dropdown-item" href="/univs"> الجامعات </a></li>
                    <li><a class="dropdown-item" href="/univs">الأبحاث العلمية</a></li>
                  </ul>
                </li>
                @else 
                <li><a class="nav-link "  href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>

                @endif
              
                @endforeach
                <li class="nav-item">
                  <a class="nav-link special" href="#register">ابدء الدراسة الآن</a>
              </li>
            </ul>

       
      </div>
    </div>
  </nav>
  <!-- section one -->