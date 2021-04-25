<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>


    <title>Articles</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/style.css">
    <style>

        .search-box {
            position: absolute;
            top: 1.5em;
            left: -8em;
            background: white;
            height: 40px;
            border-radius: 40px;
            padding: 10px;
        }

        .search-btn {
            font-size: 19px;
            color: #011f4b;
        }

        .search-text {
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color: black;
            font-size: 16px;
            transition: 0.5s;
            line-height: 20px;
            width: 0px;
        }

        .search-box:hover > .search-text {
            width: 200px;
            padding: 0 6px;

        }

    </style>


</head>

<?php
include "navbar.php";
if (isset($data)) {

}


?>
    <body>

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="col-md-4">
                            <h1><span class="glyphicon glyphicon-book" aria-hidden="" true> </span> Articles </h1>

                        </div>
                        <div class="col-md-8 ">

                            <div class="search-box">

                                <input class="search-text" type="text" name="" placeholder="Type to search">
                                <a class="search-btn" href="#">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>

                                </a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </header>

        <section id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="list-group">
                            <a href="adminPanel" class="list-group-item "><span
                                        class="glyphicon glyphicon-cog" aria-hidden="" true> </span>
                                Dashboard
                            </a>
                            <a href="police" class="list-group-item">
                                <span class="glyphicon glyphicon-user" aria-hidden="" true></span> Users<span
                                        class="badge"><?php echo $data['count'][0]['COUNT(name)'] ?></span></a>

                            <a href="reports" class="list-group-item">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="" true></span> Reports<span
                                        class="badge"><?php echo $data['reportCount'][0]['COUNT(emri)'] ?></span></a>

                            <a href="articles" class="list-group-item active main-color-bg">
                                <span class="glyphicon glyphicon-book" aria-hidden="" true> </span> Articles<span
                                        class="badge"><?php echo $data['countNews'][0]['COUNT(nID)'] ?></span></a>

                            <a href="feedback" class="list-group-item">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="" true> </span> Feedback<span
                                        class="badge"><?php echo $data['countFeedback'][0]['COUNT(name)'] ?></span></a>

                        </div>
                        <div>
                                <table class="table  table-hover tbl" id="costum">

                                    <tr>
                                        <th class="main-color-bg">Title</th>
                                        <th class="main-color-bg">Published</th>
                                        <th class="main-color-bg">Remove</th>
                                    </tr>
                                    <?php foreach ($data['getNews'] as $i => $someNews): ?>
                                    <tr>
                                        <td><?php echo $data['getNews'][$i]['title']?></td>
                                        <td><?php echo $data['getNews'][$i]['published']?></td>
                                        <td>
                                            <form method="post" action="articles" style="display:inline">
                                                <input type="hidden" name="remove"  value="<?php echo $data['getNews'][$i]['nID'] ?>">
                                                <button type="submit" name="deelete" value="" style="margin-left: 10px" class="pull-right btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </table>
                        </div>

                    </div>


                    <div class=" col-md-8 ">
                        <div class="panel panel-default">
                            <div class="main-color-bg panel-heading">
                                <h3 class="panel-title">Add content to Landing Page</h3>
                            </div>
                            <div class="panel-body">

                                <form action="articles" method="post" enctype="multipart/form-data">
                                    <div class="col-md-7" >
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" value=""  placeholder="Add Title">
                                            <span class="invalidFeedback"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control textarea" name="description"  placeholder="Add Message"> </textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Insert Photo</label>
                                            <input name="foto" type="file" required>
<!--                                            <span class="invalidFeedback">--><?php //$data['errors']["publishedError"] ?><!--</span>-->
                                        </div>
                                    <div>
                                        <input style="margin-top:2em; margin-left: 1em;" type="submit" name="addArticle" class="btn btn-lg main-color-bg" value="Add">
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div style="height: 250px"></div>
        <footer id="footer">
            <p>Copyright Adminstrap, &copy; 2021</p>
        </footer>

        <script src="../Assets/js/articles.js"></script>


    <?php include "modals.php" ?>

    </body>

</html>
