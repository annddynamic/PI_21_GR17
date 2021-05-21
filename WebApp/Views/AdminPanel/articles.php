<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
                            <form>
                                <div class="search-box">
                                    <input class="search-text" type="text" name="search" placeholder="Type to search" value="<?php echo $data['search'] ?>">
                                    <a class="search-btn" type="submit">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </form>
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
                                                <button type="submit" name="deelete" value="" class="pull-right btn btn-danger butoni1">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </table>
                        </div>
                        <div class="">
                            <div class="well" style="background-color: white">
                                <h4>Need Some Inspiration?</h4>
                                <h5>Feel free to check some content from NEWS API!</h5>
                                <form id="searchNews">
                                    <div class="form-group">
                                        <label>News</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" name=""  class="btn btn-primary">Search</button>
                                </form>
                            </div>
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
                                            <span class="invalidFeedback"><?php echo $data['news']['titleError'] ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control textarea" placeholder="Add Description" name="description"> </textarea>
                                            <span class="invalidFeedback"><?php echo $data['news']['descriptionError'] ?></span>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Insert Photo</label>
                                            <input name="foto" type="file">
                                            <span class="invalidFeedback"><?php echo $data['news']['fotoError'] ?></span>
                                        </div>
                                    <div>
                                        <input style="margin-top:2em; margin-left: 1em;" type="submit" name="addArticle" class="btn btn-lg main-color-bg" value="Add">
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                        <div class="">
                            <div  class="panel panel-default myPanel">
                                <div class="panel-heading main-color-bg">
                                    <h3 class="panel-title">News</h3>
                                </div>
                                <div class="panel-body">

                                    <table class="table table-striped table-hover">
                                        <tr>
                                            <th>Author</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Media</th>
                                            <th>Date</th>
                                            <th>Link</th>
                                        </tr>
                                        <tbody id ="tbody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                </div>


            </div>
        </section>


        <script>
            document.getElementById('searchNews').addEventListener('submit', loadNews);

            function loadNews(e){
                e.preventDefault();
                var name = document.getElementById('name').value;
                var search = name.replace(" ", "%20");
                const data = null;
                const xhr = new XMLHttpRequest();
                xhr.withCredentials = true;

                xhr.addEventListener("readystatechange", function () {
                    if (this.readyState === this.DONE) {
                        var news = JSON.parse(this.responseText);
                        console.log(news.articles[0].title, news.articles[0].author, news.articles[0].published_date, news.articles[0].summary,news.articles[0].media, news.articles[0].link );

                        var output ='';

                        for (var i =0; i<8; i++){
                            output +='<tr>' +
                                '<td style="font-size: 11px">'+news.articles[i].author+'</td>'+
                                '<td style="font-size: 11px">'+news.articles[i].title+'</td>'+
                                '<td style="font-size: 11px">'+news.articles[i].summary+'</td>'+
                                '<td>'+'<img src = "'+news.articles[i].media+'" style="width: 100%" '+'</td>'+
                                '<td style="font-size: 11px">'+news.articles[i].published_date+'</td>'+
                                '<td style="font-size: 11px">'+'<a target="_blank" href = "'+news.articles[i].link+'">Read more!'+'</a>'+'</td>'+
                                '</tr>'
                        }

                        var tbody=document.querySelector('#tbody');
                        tbody.innerHTML=output;


                    }
                });

                xhr.open("GET", "https://free-news.p.rapidapi.com/v1/search?q="+search+"&page_size=8");
                xhr.setRequestHeader("x-rapidapi-key", "df03cbc84dmsh93a5aced899e6f3p10314ajsn31d6528265f8");
                xhr.setRequestHeader("x-rapidapi-host", "free-news.p.rapidapi.com");

                xhr.send(data);
            }

        </script>

        <footer id="footer">
            <p>Copyright Adminstrap, &copy; 2021</p>
        </footer>



    <?php include "modals.php" ?>

    </body>

</html>
