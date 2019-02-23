
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 0.02px;
  text-align: center;
  font-size: 20px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 15%;
  height: 500px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 85%;
  background-color: #f1f1f1;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

input[type=text]{
  width: 400px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=password]{
  width: 400px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
</head>

<body>
<header>
  <h2>TUSHAR PRECICOMP PVT.LTD. </h2>
  <h3>E11,MIDC,Ambad,Nashik-422010,Maharashtra.</h3>
</header>

<section>
  <nav>
    <ul>
      <li><a href="task_allocation.html">Task Allocation</a></li><br/>
      <li><a href="#">Reports</a></li><br/>
      <li><a href="#">Tables</a></li><br/>
    </ul>
  </nav>
    
  <article>
  <font size="3">
      <div class="container">
      <form action="login1.php" method="post"><br/></br></br>
          <table bgcolor="lightgrey" align="center" cellspacing="20" cellpadding="10">
            <tr>
                <td><b>USERNAME:</b><br/>
                    <input type="text" name="username" placeholder="Enter Username" required/> </td>
            </tr>   
            
            <tr>
                <td><b>PASSWORD:</b><br/>
                    <input type="password" name="password" placeholder="Enter Password" required/> </td>
            </tr>
            <tr><td><center>
                <input type="submit" value="submit" name="login"/></center></td>
            </tr>
          </table>
          </br>
        
        
      </form>
      </div>
      </font>
  </article>
</section>

</body>
</html>


