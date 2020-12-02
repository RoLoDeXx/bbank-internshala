<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <script src="<?=base_url();?>assets/script.js"></script>
    <title>Bbank</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white">
      <a class="navbar-brand"  href="<?= base_url();?>"><img class="nav-logo" src="<?=base_url();?>assets/img/drop.png"/> BloodBank</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse bg-white z-10" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item font-weight-bold">
            <a class="nav-link" href="<?= base_url();?>posts">Samples</a>
          </li>
          <div class="d-block d-md-none font-weight-bold">
            <?php if(!$this->session->userdata('logged_in')) : ?>
              <li class="nav-item" ><a class="nav-link  text-dark" href="<?php echo base_url(); ?>users/login">Login</a></li>
              <li class="nav-item" ><a class="nav-link text-dark" href="<?php echo base_url(); ?>users/register">Register</a></li>
            <?php endif; ?>
            <?php if($this->session->userdata('logged_in')) : ?>
              <li class="nav-item"><a class="nav-item text-dark" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
            <?php endif; ?>
          </div>
        </ul>
        <ul class="nav navbar-nav navbar-right d-none d-md-flex font-weight-bold">
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item" ><a class="nav-link  text-dark" href="<?php echo base_url(); ?>users/login">Login</a></li>
            <li class="nav-item" ><a class="nav-link text-dark" href="<?php echo base_url(); ?>users/register">Register</a></li>
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
            <li class="nav-item"><a class="nav-item text-dark" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
          <?php endif; ?>
          </ul>

      </div>
    </nav>
    <div class="container">
      <!-- Flash messages -->
        <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_created')): ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
        <?php endif; ?>
        
        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
        <?php endif; ?>