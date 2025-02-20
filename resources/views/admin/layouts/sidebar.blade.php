 <!--start sidebar -->
 <aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <img src="/guestassets/images/logo/hope-logo.webp" class="logo-icon" alt="logo icon">
        </div>
        <!-- <div>
          <h4 class="logo-text"></h4>
        </div> -->
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <li>
          <a href="index.html">
            <div class="parent-icon">
              <ion-icon name="home-outline"></ion-icon>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>
        </li>
        <li>
          <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
              <ion-icon name="bag-handle-outline"></ion-icon>
            </div>
            <div class="menu-title">Pages</div>
          </a>
          <ul>
            <li><a href="{{ route('Travelpack') }}">
                <ion-icon name="ellipse-outline"></ion-icon>Travel package
              </a>
            </li>
            
            <li><a href="{{ route('Places') }}">
                <ion-icon name="ellipse-outline"></ion-icon>Recommended Places
              </a>
            </li>
            <li><a href="{{ route('Adventure') }}">
                <ion-icon name="ellipse-outline"></ion-icon>Adventure Activities
              </a>
            </li>
            <li><a href="{{ route('Gallerypage') }}">
                <ion-icon name="ellipse-outline"></ion-icon>Gallery
              </a>
            </li>
            
            
            <li><a href="{{ route('Offerimage') }}">
                <ion-icon name="ellipse-outline"></ion-icon>Offer Image
              </a>
            </li>
            
            
            
          
            
            <li><a href="{{ route('Videos') }}">
                <ion-icon name="ellipse-outline"></ion-icon>Youtube-Video
              </a>
            </li>
            <li><a href="{{ route('Packages') }}">
                <ion-icon name="ellipse-outline"></ion-icon>Packgaes   
              </a>
            </li>

            <li><a href="{{ route('testmonial') }}">
                <ion-icon name="ellipse-outline"></ion-icon>Review page
              </a>
            </li>
          </ul>
        </li>
        
      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->