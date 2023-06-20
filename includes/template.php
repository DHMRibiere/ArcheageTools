<?php
$template = null; // Initialized Template for scripts to use

$template .= '
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Actual Cargo Ship Location</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/png" href="favicon.png" />

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body onload="autostart()">
    
  <header class="py-3 mb-3 bg-dark" style="margin-bottom: 0 !important;">
    <div class="container-fluid d-grid align-items-center bg-dark" style="grid-template-columns: 1fr 2fr;">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-light text-decoration-none dropdown-toggle" id="dropdownNavLink" data-bs-toggle="dropdown" aria-expanded="false">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg><h4>Archeage cargo timer</h4>
        </a>
        ';
    if (isset($_SESSION['U_ID']))
    {
        $template .= '
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownNavLink">
          <li><a class="dropdown-item" href="#" aria-current="page">Overview</a></li>
          <li><a class="dropdown-item" href="#">Inventory</a></li>
          <li><a class="dropdown-item" href="#">Customers</a></li>
          <li><a class="dropdown-item" href="#">Products</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Reports</a></li>
          <li><a class="dropdown-item" href="#">Analytics</a></li>
        </ul>';
    }
    else
    {
        $template .= '
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownNavLink"> 
          <li><a class="dropdown-item" href="index.php?page=login" aria-current="page">Login</a></li>
          <li><a class="dropdown-item" href="index.php?page=register">Register</a></li>
        </ul>';
    }
    $template .= '
      </div>
</header>

<div class="container-fluid">
  <div class="row">
   ';
    if($page == 'index' || $page == 'cargo')
        {
        if(isset($newsarr))
            {
                    $template .= ' <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="height: calc(100vh - 80px);">
        
        
        
              <div class="card w-auto" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Latest news</h5>';
            foreach ($newsarr as $news)
                {
                    $template .= '      
                <h6 class="card-subtitle mb-2 text-muted">'.$news[3].' </h6>
                <h7 class="card-subtitle mb-2 text-muted">By '.$news[4].' </h7>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><span data-feather="chevron-right"></span>'.$news[2].'</li>
                </ul>
        <br/>
                ';
                }
            }

            if(isset($_SESSION['DEFAULT_SERVER']))
            {

            }
        }
    else{
        $template .= $temppage;
    }
$template .= "</div>
                       </div> ";