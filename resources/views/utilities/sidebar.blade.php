    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        {{-- <link rel="stylesheet" href="{{ asset('asset/css/sidebar.css') }}"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    
    .card-1{
        margin-right: 0px;
        margin-left: 0px;
        box-shadow: rgba(149, 157, 165, 0.116) 0px 8px 24px;
        background-color: white;
        border-radius: 10px;
    }

    .sidebar{
        position: fixed;
        height: 100%;
        width: 240px;
        background: #1B2326;
        transition: all 0.5s ease;
    }
    .sidebar.active{
        width: 60px;
    }
    .sidebar .logo-details{
        height: 80px;
        display: flex;
        align-items: center;
    }
    .sidebar .logo-details .logo_name{
        color: #fff;
        font-size: 24px;
        font-weight: 500;
    }
    .sidebar .nav-links{
        margin-top: 10px;
    }
    .sidebar .nav-links li{
        position: relative;
        list-style: none;
        height: 50px;
    }
    .sidebar .nav-links li a{
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
    }
    .sidebar .nav-links li a.active{
        background: #10F5CC;
        border-top-left-radius: 25px;
        border-end-start-radius: 25px;
    }
    .sidebar .nav-links li a:hover{
        background: #10F5CC;

        border-top-left-radius: 25px;
        border-end-start-radius: 25px;
    }
    .sidebar .nav-links li i{
        min-width: 60px;
        text-align: center;
        font-size: 18px;
        color: #fff;
    }
    .sidebar .nav-links li a .links_name{
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        white-space: nowrap;
    }
    .sidebar .nav-links .log_out{
        position: absolute;
        bottom: 0;
        width: 100%;
    }
    .home-section{
        position: relative;
        background: #f5f5f5;
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
    }
    .sidebar.active ~ .home-section{
        width: calc(100% - 60px);
        left: 60px;
    }
    .home-section nav{
        display: flex;
        justify-content: space-between;
        height: 80px;
        background: linear-gradient(to right, #1b2326, #363636);
        display: flex;
        align-items: center;
        position: fixed;
        width: calc(100% - 240px);
        left: 240px;
        z-index: 100;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
    }
    .sidebar.active ~ .home-section nav{
        left: 60px;
        width: calc(100% - 60px);
    }
    .home-section nav .sidebar-button{
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: 500;
    }
    nav .sidebar-button i{
        font-size: 35px;
        margin-right: 10px;
    }
    .home-section nav .search-box{
        position: relative;
        height: 50px;
        max-width: 550px;
        width: 100%;
        margin: 0 20px;
    }
    nav .search-box input{
        height: 100%;
        width: 100%;
        outline: none;
        background: #F5F6FA;
        border: 2px solid #EFEEF1;
        border-radius: 25px;
        font-size: 18px;
        padding: 0 15px;
    }
    nav .search-box .bx-search{
        position: absolute;
        height: 40px;
        width: 40px;
        background: #2697FF;
        right: 5px;
        top: 50%;
        transform: translateY(-50%);
        border-radius: 25px;
        line-height: 40px;
        text-align: center;
        color: #fff;
        font-size: 22px;
        transition: all 0.4 ease;
    }
    .home-section nav .profile-details{
        display: flex;
        align-items: center;
        background: red;
        border: 2px solid #EFEEF1;
        border-radius: 6px;
        height: 50px;
        min-width: 190px;
        padding: 0 15px 0 2px;
    }
    nav .profile-details img{
        height: 40px;
        width: 40px;
        border-radius: 6px;
        object-fit: cover;
    }
    nav .profile-details .admin_name{
        font-size: 15px;
        font-weight: 500;
        color: #333;
        margin: 0 10px;
        white-space: nowrap;
    }
    nav .profile-details i{
        font-size: 25px;
        color: #333;
    }
    .home-section .home-content{
    position: relative;
    padding-top: 104px;
    }
    .home-content .overview-boxes{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 20px;
    margin-bottom: 26px;
    }
    </style>
    <div class="sidebar">
        <div class="logo-details">
        <span class="logo_name" style="margin-left: 25%">Admin</span>
        </div>
        <ul class="nav-links">
            <li>
            <a href="{{ route('admin.index') }}" class="active">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Dashboard</span>
            </a>
            </li>
            <li>
            <a href="{{ url('/admin/create') }}">
                <i class='bx bx-box' ></i>
                <span class="links_name">Product</span>
            </a>
            </li>
            <li>
            <a href="#">
                <i class='bx bx-list-ul' ></i>
                <span class="links_name">Order list</span>
            </a>
            </li>   
        </ul>
    </div>
    <section class="home-section">
        <nav>
        <div class="sidebar-button">
            <span class="dashboard" style="margin-left: 30px; color: #ffff;">Dashboard</span>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search' ></i>
        </div>
        </nav>
        <main>
            <div class="home-content">
                @yield('content-admin')
            </div>
        </main>
    </section>


      <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
    sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    </script>
    </body>
    </html>

