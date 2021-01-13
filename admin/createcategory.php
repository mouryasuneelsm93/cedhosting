<?php
session_start();
echo $_SESSION['uname'];

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <style>
    ul {
      list-style-type: none;
    }
  </style>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <ul class="dot-removal">
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Products</span>
              </h6>
              <li data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href="#">Products <span class="fas"></span></a>
              </li>
              <ul class="navbar-nav sub-menu collapse" id="products">
                <li class="nav-item">
                  <a class="nav-link" href="createcategory.php">
                    <i class="ni ni-planet text-orange"></i>
                    <span class="nav-link-text">Create Category</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="addproduct.php">
                    <i class="ni ni-pin-3 text-primary"></i>
                    <span class="nav-link-text">Add Product</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="viewproducts.php">
                    <i class="ni ni-single-02 text-yellow"></i>
                    <span class="nav-link-text">View Products</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tables.php">
                    <i class="ni ni-bullet-list-67 text-default"></i>
                    <span class="nav-link-text">Create New Offers</span>
                  </a>
                </li>
              </ul>
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Orders</span>
              </h6>
              <li data-toggle="collapse" data-target="#products1" class="collapsed active">
                <a href="#">Orders <span class="fas"></span></a>
              </li>
              <ul class="navbar-nav sub-menu collapse" id="products1">
                <li class="nav-item">
                  <a class="nav-link" href="examples/icons.html">
                    <i class="ni ni-planet text-orange"></i>
                    <span class="nav-link-text">Pending Orders</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="examples/map.html">
                    <i class="ni ni-pin-3 text-primary"></i>
                    <span class="nav-link-text">Completed Orders</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="examples/profile.html">
                    <i class="ni ni-single-02 text-yellow"></i>
                    <span class="nav-link-text">Cancelled Orders</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tables.php">
                    <i class="ni ni-bullet-list-67 text-default"></i>
                    <span class="nav-link-text">Generate Invoice</span>
                  </a>
                </li>
              </ul>
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Services</span>
              </h6>
              <li data-toggle="collapse" data-target="#products2" class="collapsed active">
                <a href="#">Services <span class="fas"></span></a>
              </li>
              <ul class="navbar-nav sub-menu collapse" id="products2">
                <li class="nav-item">
                  <a class="nav-link" href="examples/icons.html">
                    <i class="ni ni-planet text-orange"></i>
                    <span class="nav-link-text">Active Services</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="examples/map.html">
                    <i class="ni ni-pin-3 text-primary"></i>
                    <span class="nav-link-text">Expired Services</span>
                  </a>
                </li>
              </ul>
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Users</span>
              </h6>
              <li data-toggle="collapse" data-target="#products3" class="collapsed active">
                <a href="#">Users <span class="fas"></span></a>
              </li>
              <ul class="navbar-nav sub-menu collapse" id="products3">
                <li class="nav-item">
                  <a class="nav-link" href="examples/icons.html">
                    <i class="ni ni-planet text-orange"></i>
                    <span class="nav-link-text">All User List</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="examples/map.html">
                    <i class="ni ni-pin-3 text-primary"></i>
                    <span class="nav-link-text">Create New User</span>
                  </a>
                </li>
              </ul>
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Blog</span>
              </h6>
              <li data-toggle="collapse" data-target="#products4" class="collapsed active">
                <a href="#">Blogs <span class="fas"></span></a>
              </li>
              <ul class="navbar-nav sub-menu collapse" id="products4">
                <li class="nav-item">
                  <a class="nav-link" href="examples/icons.html">
                    <i class="ni ni-planet text-orange"></i>
                    <span class="nav-link-text">Add New Blog</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="examples/map.html">
                    <i class="ni ni-pin-3 text-primary"></i>
                    <span class="nav-link-text">View All Blogs</span>
                  </a>
                </li>
              </ul>
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Accounts</span>
              </h6>
              <li data-toggle="collapse" data-target="#products5" class="collapsed active">
                <a href="#">Info <span class="fas"></span></a>
              </li>
              <ul class="navbar-nav sub-menu collapse" id="products5">
                <li class="nav-item">
                  <a class="nav-link" href="examples/icons.html">
                    <i class="ni ni-planet text-orange"></i>
                    <span class="nav-link-text">Update Company Info</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="examples/map.html">
                    <i class="ni ni-pin-3 text-primary"></i>
                    <span class="nav-link-text">Change Security Ques</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="examples/map.html">
                    <i class="ni ni-pin-3 text-primary"></i>
                    <span class="nav-link-text">Change Password</span>
                  </a>
                </li>
              </ul>
            </ul>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
              aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.
                  </h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">
                              <?php  echo $_SESSION['uname']; ?>
                            </h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">
                              <?php  echo $_SESSION['uname']; ?>
                            </h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">
                              <?php  echo $_SESSION['uname']; ?>
                            </h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">
                              <?php  echo $_SESSION['uname']; ?>
                            </h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">
                              <?php  echo $_SESSION['uname']; ?>
                            </h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">
                      <?php  echo $_SESSION['uname']; ?>
                    </span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">CreateCategory</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="index.php">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">CreateCategory</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"></div>
              <div class="text-center">
                Create Category
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="post" id="create">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" value="Hosting" type="text" name="hosting" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Product Name" type="text" id="productname" name="productname">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <textarea class="editor form-group link" placeholder="HTML" name="editor" id="mce_0"
                        aria-hidden="true" style="display: none;"></textarea>
                      <div role="application" class="tox tox-tinymce" aria-disabled="false"
                        style="visibility: hidden; height: 200px;">
                        <div class="tox-editor-container">
                          <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                            <div role="group" class="tox-toolbar-overlord" aria-disabled="false">
                              <div role="group" class="tox-toolbar__primary">
                                <div title="history" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                  class="tox-toolbar__group"><button aria-label="Undo" title="Undo" type="button"
                                    tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span
                                      class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                        <path
                                          d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z"
                                          fill-rule="nonzero"></path>
                                      </svg></span></button><button aria-label="Redo" title="Redo" type="button"
                                    tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span
                                      class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                        <path
                                          d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z"
                                          fill-rule="nonzero"></path>
                                      </svg></span></button></div>
                                <div title="styles" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                  class="tox-toolbar__group"><button title="Formats" aria-label="Formats"
                                    aria-haspopup="true" type="button" unselectable="on" tabindex="-1"
                                    class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke" aria-expanded="false"
                                    style="user-select: none;"><span class="tox-tbtn__select-label">Paragraph</span>
                                    <div class="tox-tbtn__select-chevron"><svg width="10" height="10">
                                        <path
                                          d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                          fill-rule="nonzero"></path>
                                      </svg></div>
                                  </button></div>
                                <div title="formatting" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                  class="tox-toolbar__group"><button aria-label="Bold" title="Bold" type="button"
                                    tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span
                                      class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                        <path
                                          d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z"
                                          fill-rule="evenodd"></path>
                                      </svg></span></button><button aria-label="Italic" title="Italic" type="button"
                                    tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span
                                      class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                        <path
                                          d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z"
                                          fill-rule="evenodd"></path>
                                      </svg></span></button></div>
                                <div role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group">
                                  <button aria-label="More..." title="More..." aria-haspopup="true" type="button"
                                    data-alloy-tabstop="true" tabindex="-1" class="tox-tbtn" aria-expanded="false"><span
                                      class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                        <path
                                          d="M6 10a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2zm12 0a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2zm-6 0a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2z"
                                          fill-rule="nonzero"></path>
                                      </svg></span></button></div>
                              </div>
                            </div>
                            <div class="tox-anchorbar"></div>
                          </div>
                          <div class="tox-sidebar-wrap">
                            <div class="tox-edit-area"><iframe id="mce_0_ifr" frameborder="0" allowtransparency="true"
                                title="Rich Text Area. Press ALT-0 for help." class="tox-edit-area__iframe"></iframe>
                            </div>
                            <div role="complementary" class="tox-sidebar">
                              <div data-alloy-tabstop="true" tabindex="-1"
                                class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;">
                                <div class="tox-sidebar__pane-container"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tox-statusbar">
                          <div class="tox-statusbar__text-container">
                            <div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path"
                              aria-disabled="false">
                              <div role="button" data-index="0" tab-index="-1" aria-level="1" tabindex="-1"
                                class="tox-statusbar__path-item" aria-disabled="false">p</div>
                            </div><span class="tox-statusbar__branding"><a
                                href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5"
                                rel="noopener" target="_blank" tabindex="-1" aria-label="Powered by Tiny">Powered by
                                Tiny</a></span>
                          </div>
                          <div title="Resize" aria-hidden="true" class="tox-statusbar__resize-handle"><svg width="10"
                              height="10">
                              <g fill-rule="nonzero">
                                <path
                                  d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z">
                                </path>
                              </g>
                            </svg></div>
                        </div>
                        <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4" id="createcategory">Create Category</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>





    
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
  <script src="../ajax.js"></script>
</body>

</html>