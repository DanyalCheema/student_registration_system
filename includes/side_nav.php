<link rel="stylesheet" href="../css/index.css" type="text/css">
<style>
.sidenav {
    height: 700px;
    width: 160px;
    position: relative;
    float: left;
    z-index: 1;
    top: 0px;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }
    .sidenav a {
        font-size: 18px;
    }
}
</style>

<div class="sidenav">
  <a href="dashboard.php">Dashboard</a>
  <a href="student.php">Student</a>
  <a href="#">Log Out</a>
</div>