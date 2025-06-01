<!DOCTYPE html>
<html>
<head>
	<title>HOME INTERIOR DESIGN</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/grid.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/data.css" media="screen">
  <style>
#dataTable {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd; /* Add border to the table */
}

td{
  padding: 8px;
}

#dataTable th, #dataTable td {
    border: 1px solid #ddd;
    padding: 8px;
}

#dataTable tr:nth-child(even) {
    background-color: #f2f2f2;
}

#dataTable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

#searchInput {
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}
#myButton {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

#myButton:hover {
    background-color: #3e8e41;
}
/* #mind {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}

#mind:hover {
    background-color: #3e8e41;
} */
  </style>
</head>
<body>
	<div id="content">
		<div class="bg-top">
			<div class="bg-top-2">
				<div class="bg">
					<div class="bg-top-shadow">
						<div class="main">
							<div class="box">
								<div class="padding">
									<div class="container_12">
										<div class="wrapper">
											<div class="grid_12">
                      <h1>
                            <a class="logo" href="index.html">Ho<strong>m</strong>e</a>
                            <span>Interior Design</span>
                        </h1>
                        <<form action="search.php" method="get">
                        <input type="text" name="query" id="searchInput" placeholder="Search for names...">
                        <button onclick="this.form.submit()">Search</button>
                        </form>
                        
                            
                              <tbody>

												<?php
												// Connect to the database
												$conn = mysqli_connect('localhost', 'root', '', 'racbca');

												// Select data from the database
												$query = "SELECT * FROM `racbca`.`CLIENT`";
												$data = mysqli_query($conn, $query);

												// Display the data in an HTML table
												echo "<table>";
												echo "<tr><th>Name</th> <th>Email</th> <th>Phone</th> <th>Message</th> `</tr>";
												while ($row = mysqli_fetch_assoc($data)) {
													echo "<tr>";
													echo "<td>" . $row["Name:"] . "</td>";
													echo "<td>" . $row["Email:"] . "</td>";
													echo "<td>" . $row["Phone:"] . "</td>";
													echo "<td>" . $row["Message:"] . "</td>";
													echo "</tr>";
												}
												echo "</table>";

		// Close the database connection
												mysqli_close($conn);
												?>
                        </tbody>
                        </table>
											</div>
										<a href="download.php">
                    <button onclick="downloadCSV()"  id="mind"> Download CSV</button>
                    </a>
                    <BR>
                    <a href="index.html">
                    <button id="myButton">Go Back</button>
                    </a>  
                    
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <script>
    function downloadCSV() {
    var table = document.getElementById("dataTable");
    var rows = table.rows;
    var headerRow = rows[0];
    var csvContent = "data:text/csv;charset=utf-8,";
    csvContent += headerRow.innerText + "\r\n";
    for (var i = 1; i < rows.length; i++) {
        var row = rows[i];
        var cells = row.cells;
        csvContent += cells[0].innerText + ",";
        csvContent += cells[1].innerText + ",";
        csvContent += cells[2].innerText + ",";
        csvContent += cells[3].innerText + "\r\n";
    }
    var encodedUri = encodeURI(csvContent);
    var link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", "data.csv");
    link.click();
}

function searchFunction() {
  let input = document.getElementById("searchInput");
  let filter = input.value.toUpperCase();
  let table = document.getElementById("dataTable");
  let tr = table.getElementsByTagName("tr");

  for (let i = 1; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      let text = td.textContent || td.innerText;
      if (text.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
  </script>
</body>
<footer>


</footer>
</html>