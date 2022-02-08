<?php 
session_start();

include("navbar.php");

 ?>
 <style>
body, html {
  height: 100%;
  margin: 0;
}


.rentzen{
    font-family: cursive;
    color: black;
    padding-left: 1.5%;
  }

.tagline{
    color:darkcyan;
    font-family:cursive;
    padding-left: 20%;
  }


.fa {
  padding: 20px;
  font-size: 30px;
  text-align: left;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}

.active-cyan-3 input[type=text] {
  border: 1px solid #4dd0e1;
  box-shadow: 0 0 0 1px #4dd0e1;
}

.desc{
  font-family:cursive;
  font-size: 150%;
  color: black;
  padding-left:18%;
  
}

.upper{
  background-image: url('images/slider(1).jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}


</style>

<div class="bg"></div><br>
<div class="container active-cyan-4 mb-4 inline">
	<form method="POST" action="search-property.php">
  <input class="form-control" type="text" placeholder="Enter location to search house." name="search_property" aria-label="Search">
  </form>
</div>
<br><br>
<?php 

include("property-list.php");

 ?>
 <br><br>