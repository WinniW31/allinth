<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ALL.IN.TH</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/all-in-th.css');?>">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body id="<?= $page_id;?>">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#" id="weblogolink">
          <img id="weblogo" src="<?php echo base_url('assets/images/Logo_of_.th.png');?>" alt="" class="d-inline-block align-text-middle">
          ALL.IN.TH
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href=<?php echo base_url('/');?>>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Domain Statistics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('urlconverter');?>">URL Converter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
