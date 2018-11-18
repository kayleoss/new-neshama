      <?php
        $navlink_style = "";
        $shadow = "";
        $white_link_paths = array("/", "/index.php/", "/index", "/index/");
        if ( in_array( $_SERVER["REQUEST_URI"] , $white_link_paths) ) {
          $navlink_style = "color: #fff";
          $shadow = "box-shadow: none";
        }
      ?>
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent spread-box-shadow" style="<?= $shadow; ?>">
        <div class="container">
          <a class="navbar-brand" href="/">
              <img src="/assets/navbar-logo.png" class="nav-logo w-100">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="<?= $navlink_style; ?>">
            <span style="<?= $navlink_style; ?>"><i class="fas fa-ellipsis-v"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a style="<?= $navlink_style; ?>" class="nav-link dropdown-toggle weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-light" href="/pages/rmt">Registered Massage Therapy</a>
                  <a class="dropdown-item text-light" href="/pages/tcm">Traditional Chinese Medicine</a>
                  <a class="dropdown-item text-light" href="/pages/all-services">All Services</a>
                </div>
              </li>
              <li class="nav-item">
                <a style="<?= $navlink_style; ?>" class="nav-link weight-bold" href="/pages/products">Natural Products</a>
              </li>
              <li class="nav-item">
                <a style="<?= $navlink_style; ?>" class="nav-link weight-bold" href="/pages/hub">Hub</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="<?= $navlink_style; ?>" >
                  More
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-light" href="/pages/firstvisit">First Visit</a>
                  <a class="dropdown-item text-light" href="/pages/rates">Rates</a>
                  <a class="dropdown-item text-light" href="#contact">Contact Us</a>
                  <a class="btn btn-custom text-light ml-3 mt-3 mb-3" href="https://www.massagebook.com/profiles/publicBooking/1676236" target="_blank">Book Now</a>
                </div>
              </li>
            </ul>
            <div class="form-inline my-2 my-lg-0 hide-on-mobile">
              <input class="form-control mr-sm-2 search-input" name="search-input" placeholder="Search For A Service" aria-label="Search">
              <button class="btn btn-custom-light my-2 my-sm-0 text-light" type="button" id="search-button">Search</button>
              <div id="no-results-dialog" title="Search Results">
                <p class="text-light mt-3 med-text"></p>
              </div>
            </div>
          </div>
        </div>
      </nav>
