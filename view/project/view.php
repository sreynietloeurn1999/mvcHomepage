<?php
   include "homepage.php";
?>



<!-- Overlay and Image -->


<style>
 

  .container {
    position: relative;
    width: 100%;

  }

  .image {
    display: block;
    width: 100%;
    height: auto;
  }

  .overlay {
    position: absolute;
    bottom: 0;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5);
    /* Black see-through */
    color: #f1f1f1;
    width: 100%;
    transition: .5s ease;
    opacity: 0;
    color: blue;
    font-size: 60px;
    padding: 308px;
    text-align: center;
  }

  .container:hover .overlay {
    opacity: 4;
  }

  body {
    background: black;
  }
</style>
</head>

<body class="body">


  <div class="container">
    <div class="div">
      <img src="view/project/image/foot.jpg" alt="Avatar" class="image" width="100%">
      <div class="overlay">Football Clubs</div>
    </div>

  </div>
  

<!-- Footer -->

  <footer class="page-footer grey">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <img src="view/project/image/logo.png" alt="" width="8%" style="margin-left: 5px ">

          <p>#St 371,Tek Thlar</p>
          <p>Khan Senk Sok,Phnom Penh</p>
          <p>Cambodia</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <p>Contact Us:</p>
          <p>Email: footballclub@gmail.com</p>
          <p>Tell: 023 12 34 56</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2014 Copyright Text

      </div>
    </div>
  </footer>