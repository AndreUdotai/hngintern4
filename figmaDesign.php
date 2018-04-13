<!DOCTYPE html>
<html>
<head>
  <title>FigmaDesign</title>
  <style type="text/css">
    body, html {
      height: 100%;
    }
    body  {
      background-color: white;
      background-image: url(https://images.unsplash.com/photo-1522198734915-76c764a8454d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7892e6f709c6e46512bb4b08ce3d1a3c&auto=format&fit=crop&w=500&q=60);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    #header {
      background-color: #2D9CDB;
      padding-top: 60px;
      padding-bottom: 60px;
      text-align: center;
      font-size: 72px;
      margin-top: 20px;
      font-weight: 500;
    }
     #content {
      margin: 0 auto;
      width: 600px;
      text-align: center;
    }
      #date {
      font-size: 48px;
      font-weight: 900;
      background-color: white;
    }
    #time {
      background: white;
      width: 200px;
      font-size: 48px;
      margin-top: 30px;
      padding: 15px 10px 15px 10px;
      margin: 30px auto;
      border-radius: 25px;
    }
  </style>
</head>
<body>
  <h1 id="header">HNG INTERNSHIP</h1>
  <div id="content">
    <div id="date">
       <?php
        echo " Today is ".date("l,")." ".date("d-m-Y") ;
      ?>
    </div>
    <div id="time">
      <?php
        echo "".date("h:i:s");
      ?>
    </div>
  </div>
</body>
</html>
