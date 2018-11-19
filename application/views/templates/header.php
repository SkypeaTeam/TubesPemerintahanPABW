<html>
	<head>
		<title>skypea.go.id</title>
		<!-- <link rel="stylesheet" href="http://localhost/ciblog/application/views/templates/style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/font-awesome/css/font-awesome.css" />

    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/ciblog/assets2/style.css" />
  <script type="text/javascript" src="http://localhost/ciblog/assets2/js/jQuery-2.1.4.min.js"></script>
  <script type="text/javascript" src="http://localhost/ciblog/application/views/pages/js/jquery.cycle2.min.js"></script>
  <s --><!-- tyle type="text/css">
  .style1 {color: #FFFFFF}
  .style2 {
  font-family: Georgia, "Times New Roman", Times, serif;
  font-size: 36px;
}
body {
  background-repeat: no-repeat;
}
--> 
</style>

	</head>
	<body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Skypea.go.id</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
            <li><a href="<?php echo base_url(); ?>about">Tentang</a></li>
             <li><a href="<?php echo base_url(); ?>posts">Berita</a></li>
             <li><a href="<?php echo base_url(); ?>categories">Kategori Berita</a></li>
             <li><a href="<?php echo base_url(); ?>potensi">Potensi Daerah</a></li>
             <li><a href="<?php echo base_url(); ?>layanan">Layanan Publik</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>users/login">Administrator</a></li>
            
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
            <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
            <li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
            <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
          <?php endif; ?>
          </ul>
        </div>
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

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif; ?>