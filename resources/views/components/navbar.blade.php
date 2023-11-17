<header class="header" id="navbar">
      <img
        src="assets/logo_nav.svg"
        alt="Innovosens"
        class="logo"
      />

      <nav class="navbar">
        <ul class="navbar-list">
          <li><a class="navbar-link" href="/">Home</a></li>
          <li><a class="navbar-link" href="/technology">Technology</a></li>
          <li><a class="navbar-link" href="/blog">Lastest news</a></li>
          <li><a class="navbar-link" href="/aboutus">About</a></li>
          </ul>
      </nav>

      <div class="mobile-navbar-btn">
        <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
        <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
      </div>
    </header>
    <!-- ======================================== 
          Our JavaScript Section Start  
    ========================================  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script>

const mobile_nav = document.querySelector(".mobile-navbar-btn");
const nav_header = document.querySelector(".header");

const toggleNavbar = () => {
  // alert("Plz Subscribe ");
  nav_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar());
    </script>

    