 <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{ asset('admin/assets/img/logo-small.png') }}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Peduli Diri
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/dashboard">
              <i class="nc-icon nc-bank"></i>
              <p>Beranda</p>
            </a>
          </li>

          {{-- <li>
            <a href="/user-profile">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li> --}}

          {{-- <li>
            <a href="/list-post">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="/list-article">
              <i class="nc-icon nc-tile-56"></i>
              <p>List Article</p>
            </a>
          </li> --}}
          @if(Auth::user()->role == 'Admin')
          <li>
            <a href="/list-user">
              <i class="nc-icon nc-single-02"></i>
              <p>Petugas</p>
            </a>
          </li>
          <li>
            <a href="/list-masyarakat">
              <i class="nc-icon nc-single-02"></i>
              <p>Pengguna</p>
            </a>
          </li>
          @endif
          <li>
            <a href="/list-perjalanan">
              <i class="nc-icon nc-single-02"></i>
              <p>Perjalanan</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
