
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLEGE RESOLVER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor="" align="center" text="lightblue" font-weight="bolder">
  <style>
  </style>
  </head>
  <body>
    <div style="position:relative;">
    
    <img src="4.jpeg"
    style="position:absolute;
    width: 150px;
    height: 50px;
    top: 0px;
    left: 40px;">
    
    </div>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="page.html">About</a>
    <a href="main.html">Home</a>
    <a href="ms.html">Contact</a>
  </div>
  <div  style="font-size:30px;cursor:pointer;color: white;" onclick="openNav()" align="left">&#9776;</div>
  <script src="app.js">
  </script>
    <h1>COLLEGE RESOLVER</h1>
    <div class="form-group">
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required><br><br>
        <label for="Region">Choose a region:</label>
        <select Region ="Region" name="value_filter">
            <option value="none">none</option>
            <option value="Thane">Thane</option>
            <option value="Navi Mumbai">Navi Mumbai</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Pune">Pune</option>
        </select><br><br>
        <label for="Branch">Choose a Branch:</label>
        <select Branch="Branch" name="filter_value">
            <option value="none">none</option>
            <option value="IT">IT</option>
            <option value="CSE(IOT)">CSE(IOT)</option>
            <option value="CSE(AIML)">CSE(AIML)</option>
            <option value="CSE(DS)">CSE(DS)</option>
            <option value="CSE(IT)">CSE(IT)</option>
            <option value="CSE(AIDS)">CSE(AI&DS)</option>
            <option value="EXTC">EXTC</option>
            <option value="Mechanical">Mechanical</option>
            <option value="CIVIL">CIVIL</option>
            <option value="CE">CE</option></select><br><br></be>
            <button type="submit" name='Submit' class='btn btn-primary' >Submit</button>
            
            </script>
    </form><style>
    table, th, td {
      border: 1px solid whitesmoke;
      margin-left: auto;
      margin-right: auto;
    }
        </style>
        
      </thead>
      <tbody>
        
        <tr>
          
        </tr>
      </tbody>
    </table>        
         </div>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <td>Region </td>
                            <td>CollegeName </td>
                            <td>Branch</td>
                            <td>PDF</td>
                           
                        </tr>
 <?php
    $connection = mysqli_connect("localhost:3306","root"," ","ankush");
    if(isset($_POST['Submit']))
    {
        $Region = $_POST['value_filter'];
        $Branch =$_POST['filter_value'];
        $query = " select Region,Branch,CollegeName,PDF from data where Region='$Region' and Branch='$Branch'";
        $mysqli_result = mysqli_query($connection,$query);
        if(mysqli_num_rows($mysqli_result)>0)
        {
            while($row = mysqli_fetch_assoc($mysqli_result))
            {
        ?>        
            <tr>
                <td><?php echo $row['Region']; ?></td>
                <td><?php echo $row['CollegeName']; ?></td>
                <td><?php echo $row['Branch']; ?></td>
                <td><?php echo "<a href='".$row['PDF']."' target='_blank'>Click Here</a></td>"; ?></td>
            </tr>
            <?php
            }
        }
        else{
            ?>
            <tr>
                <td> No record Found</td>
            </tr>
            <?php
        }

    }
           ?>                                                     
                               

                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

   
    </body>
    </html>  
</body>


