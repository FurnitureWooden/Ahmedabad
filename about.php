<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

 <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,100&family=Jost:ital,wght@1,300;1,500;1,662&display=swap" rel="stylesheet">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  overflow-x:hidden;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 10px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  margin-bottom:10px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <!--<p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>--> 
</div>

<h2 style="text-align:center;margin:20px;"><u>Our Team</u></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/man3.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Shailesh Patel</h2>
        <p class="title">Owner</p>
        <p>Owner is the state or fact of rights and control over property.</p>
        <p>patelshaileshbhai2526@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/man2.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Ravi Patel</h2>
        <p class="title">Manager</p>
        <p>Manager are responsible for making organization decisions.</p>
        <p>ravipatel11221122@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/man1.png" alt="John" style="width:100%">
      <div class="container">
        <h2>Ramesh Patel</h2>
        <p class="title">Employe</p>
        <p>Employment is a relationship between two parties services..</p>
        <p>ramesh111@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<footer class="bg-primary text-center text-lg-start ">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:All rights reserved by
  </div>
  <!-- Copyright -->
</footer>


</body>
</html>
