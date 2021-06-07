<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title>TELS CODE - TOMCAT SQUAD</title>
      <!-- FONT AWESOME 6 -->
      <script src="https://kit.fontawesome.com/bc6d3d8101.js" crossorigin="anonymous"></script>
      <link rel="shortcut icon" href="https://tomcatsquad.web.id/images/tomcatlogo.png" type="image/x-icon">
      <style>
      /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #413d63;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.docs,
a.docs:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

#sidebar .sidebar-footer p{
    color: #fff;
    margin-left: 28px;
}




/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
      </style>
   </head>
   <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="https://tomcatsquad.web.id/images/tomcatlogo.png" height="50px" alt="Logo Security"> TELS CODE</h3>
            </div>

            <ul class="list-unstyled components">
               <marquee behavior="" direction=""><p>LAB PENETRATION TESTING | POWERED BY TOMCAT SQUAD</p></marquee> 
                <li <?php if($page == "xss") echo "class='active'";?>>
                    <a href="#xssSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cross Site Scripting</a>
                    <ul class="collapse list-unstyled" id="xssSubmenu">
                        <li>
                            <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/LAB-TelsCode/WEB APPLICATION/LAB - CROSS SITE SCRIPTING/REFLECTED XSS">Reflected XSS</a>
                        </li>
                        <li>
                            <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/LAB-TelsCode/WEB APPLICATION/LAB - CROSS SITE SCRIPTING/STORED XSS">Stored XSS</a>
                        </li>
                    </ul>
                </li>
                <li <?php if($page == "fileInclusion") echo "class='active'";?>>
                    <a href="#fileInclusionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">File Inclusion</a>
                    <ul class="collapse list-unstyled" id="fileInclusionSubmenu">
                        <li>
                            <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/LAB-TelsCode/WEB APPLICATION/LAB - FILE INCLUSION/REMOTE FILE INCLUSION">Remote File Inclusion</a>
                        </li>
                        <li>
                            <a href="#">Local File inclusion</a>
                        </li>
                    </ul>
                </li>
                <li <?php if($page == "sqlInjection") echo "class='active'";?>>
                    <a href="#sqlInjectionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">SQL Injection</a>
                    <ul class="collapse list-unstyled" id="sqlInjectionSubmenu">
                        <li>
                            <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/LAB-TelsCode/WEB APPLICATION/LAB - SQL INJECTION/BLIND SQL INJECTION">Blind SQL Injection</a>
                        </li>
                        <li>
                            <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/LAB-TelsCode/WEB APPLICATION/LAB - SQL INJECTION/BYPASS ADMIN LOGIN">Bypass Admin Login</a>
                        </li>
                    </ul>
                </li>
                <li <?php if($page == "tokenAuthentication") echo "class='active'";?>>
                    <a href="#tokenAuthenticationSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Token Authentication</a>
                    <ul class="collapse list-unstyled" id="tokenAuthenticationSubmenu">
                        <li>
                            <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/LAB-TelsCode/WEB APPLICATION/LAB - TOKEN AUTHENTICATION/LAB - CSRF">Cross Site Request Forgery</a>
                        </li>
                        <li>
                            <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/LAB-TelsCode/WEB APPLICATION/LAB - TOKEN AUTHENTICATION/LAB - NO REDIRECT/noredirect.php">No Redirect</a>
                        </li>
                    </ul>
                </li>
                <li <?php if($page == "webShell") echo "class='active'";?>>
                    <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/LAB-TelsCode/WEB APPLICATION/LAB - WEBSHELL">WebShell Backdoor</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://github.com/tomcat-squad/LAB-TelsCode/archive/refs/heads/master.zip" class="download">Download Source Code</a>
                </li>
                <li>
                    <a href="https://github.com/tomcat-squad/LAB-TelsCode" target="_blank" class="docs">Lihat Dokumentasi</a>
                </li>
                <li>
                    <a href="https://github.com/tomcat-squad/LAB-TelsCode/tree/master/Tutorial" target="_blank" class="docs">Lihat Tutorial Dasar</a>
                </li>
                <li>
                    <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/LAB-TelsCode/WEB APPLICATION/PAGE - ADMIN" target="_blank" class="bg-info">Dashboard Admin</a>
                </li>
                <li>
                    <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/phpmyadmin" target="_blank" class="bg-info">PhpMyAdmin</a>
                </li>
            </ul>
            <div>
            </div>
            <hr class="bg-light">
            <div class="sidebar-footer">
                <p>Version 1.0 | ©2021</p>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn" style="background-color: #6d7fcc; color: #fff;">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>