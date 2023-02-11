<div class="az-header">
  <div class="container">
    <div class="az-header-left">
      <a href="index.html" class="az-logo"><span></span> rawone</a>
      <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
    </div><!-- az-header-left -->
    <div class="az-header-menu">
      <div class="az-header-menu-header">
        <a href="index.html" class="az-logo"><span></span> azia</a>
        <a href="" class="close">&times;</a>
      </div><!-- az-header-menu-header -->
      <ul class="nav">
        <li class="nav-item active show">
          <a href="/dashboard" class="nav-link"><i class="la la-home pr-2"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link with-sub"><i class="far fa-file-alt pr-2"></i>Laporan Harian</a>
          <nav class="az-menu-sub">
            <a href="/dashboard/margonda" class="nav-link">Margonda</a>
            <a href="/dashboard/simatupang" class="nav-link">Simatupang</a>
            <a href="/dashboard/gudang" class="nav-link">Gudang</a>
          </nav>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link"><i class="far fa-clipboard pr-2"></i>Laporan Gudang</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link with-sub"><i class="icon ion-md-paper pr-2"></i>Laporan Outlet</a>
          <nav class="az-menu-sub">
            <a href="" class="nav-link">Outlet Margonda</a>
            <a href="" class="nav-link">Outlet Simatupang</a>
            <a href="" class="nav-link">Outlet Kelapa Gading</a>
          </nav>
        </li>
        <li class="nav-item">
          <a href="{{ route( 'allreports' ) }}" class="nav-link"><i class="typcn typcn-document-text pr-2"></i>Semua Laporan</a>
        </li>
      </ul>
    </div><!-- az-header-menu -->
    <div class="az-header-right">
      <a href="https://www.bootstrapdash.com/demo/azia-free/docs/documentation.html" target="_blank" class="az-header-search-link"><i class="far fa-file-alt"></i></a>
      <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
      <div class="az-header-message">
        <a href="#"><i class="typcn typcn-messages"></i></a>
      </div><!-- az-header-message -->
      <div class="dropdown az-header-notification">
        <a href="" class="new"><i class="typcn typcn-bell"></i></a>
        <div class="dropdown-menu">
          <div class="az-dropdown-header mg-b-20 d-sm-none">
            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
          </div>
          <h6 class="az-notification-title">Notifications</h6>
          <p class="az-notification-text">You have 2 unread notification</p>
          <div class="az-notification-list">
            <div class="media new">
              <div class="az-img-user"><img src="{{ asset('../img/faces/face2.jpg') }}" alt=""></div>
              <div class="media-body">
                <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                <span>Mar 15 12:32pm</span>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media new">
              <div class="az-img-user online"><img src="{{ asset('../img/faces/face3.jpg') }}" alt=""></div>
              <div class="media-body">
                <p><strong>Joyce Chua</strong> just created a new blog post</p>
                <span>Mar 13 04:16am</span>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="az-img-user"><img src="{{ asset('../img/faces/face4.jpg') }}" alt=""></div> 
              <div class="media-body">
                <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                <span>Mar 13 02:56am</span>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="az-img-user"><img src="{{ asset('../img/faces/face5.jpg') }}" alt=""></div>
              <div class="media-body">
                <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                <span>Mar 12 10:40pm</span>
              </div><!-- media-body -->
            </div><!-- media -->
          </div><!-- az-notification-list -->
          <div class="dropdown-footer"><a href="">View All Notifications</a></div>
        </div><!-- dropdown-menu -->
      </div><!-- az-header-notification -->
      <div class="dropdown az-profile-menu">
        <a href="" class="az-img-user"><img src="{{ asset('../img/faces/face1.jpg') }}" alt=""></a>
        <div class="dropdown-menu">
          <div class="az-dropdown-header d-sm-none">
            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
          </div>
          <div class="az-header-profile">
            <div class="az-img-user">
              <img src="{{ asset('../img/faces/face1.jpg') }}" alt="">
            </div><!-- az-img-user -->
            <h6>Aziana Pechon</h6>
            <span>Premium Member</span>
          </div><!-- az-header-profile -->

          <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
          <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
          <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
          <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
          <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
        </div><!-- dropdown-menu -->
      </div>
    </div><!-- az-header-right -->
  </div><!-- container -->
</div><!-- az-header -->