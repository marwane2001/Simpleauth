<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome 2</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f9;
      margin: 0;
      padding: 20px;
    }
    h1 {
      text-align: center;
      color: #333;
    }
    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px 15px;
      border: 1px solid #ddd;
      text-align: center;
    }
    th {
      background: #4CAF50;
      color: #fff;
      cursor: pointer;
    }
    tr:nth-child(even) {
      background: #f9f9f9;
    }
    tr:hover {
      background: #f1f1f1;
    }
    .logout {
      display: block;
      width: 120px;
      text-align: center;
      margin: 20px auto;
      padding: 10px;
      background: #e74c3c;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }
    .logout:hover {
      background: #c0392b;
    }
  </style>
</head>
<body>
  <h1>Welcome <?php echo $_SESSION['username']; ?> 🎉</h1>

  <table id="myTable">
    <thead>
      <tr>
        <th onclick="sortTable(0)">ID</th>
        <th onclick="sortTable(1)">Name</th>
        <th onclick="sortTable(2)">Age</th>
        <th onclick="sortTable(3)">Country</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>1</td><td>Alice</td><td>25</td><td>USA</td></tr>
      <tr><td>2</td><td>Bob</td><td>30</td><td>UK</td></tr>
      <tr><td>3</td><td>Charlie</td><td>22</td><td>Canada</td></tr>
      <tr><td>4</td><td>Diana</td><td>28</td><td>Germany</td></tr>
      <tr><td>5</td><td>Eva</td><td>35</td><td>France</td></tr>
    </tbody>
  </table>

  <a class="logout" href="logout.php">Logout</a>

  <script>
    // Simple table sorting function
    function sortTable(columnIndex) {
      const table = document.getElementById("myTable");
      let switching = true;
      let dir = "asc";
      while (switching) {
        switching = false;
        let rows = table.rows;
        for (let i = 1; i < (rows.length - 1); i++) {
          let shouldSwitch = false;
          let x = rows[i].getElementsByTagName("TD")[columnIndex];
          let y = rows[i + 1].getElementsByTagName("TD")[columnIndex];
          if (dir === "asc" && x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
          } else if (dir === "desc" && x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
          }
          if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            break;
          }
        }
        if (!switching && dir === "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  </script>
</body>
</html>
