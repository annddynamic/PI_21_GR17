
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">AdminsPanel</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="adminPanel">Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Users<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="police">Police Officials</a></li>
                        <li><a href="citizen">Citizens</a></li>
                    </ul>
                </li>
                <li><a href="reports">Reports</a></li>
                <li><a href="articles">Articles</a></li>
                <li><a href="feedback">Feedback</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Welcome <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : null;?></a></li>
                <li><a href="index">Logout</a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>





<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="../Assets/js/bootstrap.min.js"></script>




</body>
</html>
