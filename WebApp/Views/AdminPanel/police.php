<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Users</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>
    <style>

        .search-box {
            position: absolute;
            top: 1.5em;
            left: 0em;
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
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="" true> </span> Police Officials </h1>

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
            <div class="col-md-3">
                <div class="list-group">
                    <a href="adminPanel" class="list-group-item  ">
                        <span class="glyphicon glyphicon-cog" aria-hidden="" true></span>Dashboard</a>
                    <a href="police" class="list-group-item main-color-bg active"><span class="glyphicon glyphicon-user"
                                                                                        aria-hidden="" true> </span>
                        Users<span class="badge"><?php echo $data['count'][0]['COUNT(name)'] ?></span></a>
                    <a href="reports" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden=""
                                                                    true> </span> Reports<span
                                class="badge"><?php echo $data['reportCount'][0]['COUNT(emri)'] ?></span></a>
                    <a href="articles" class="list-group-item">
                        <span class="glyphicon glyphicon-book" aria-hidden="" true> </span> Articles<span
                                class="badge"><?php echo $data['countNews'][0]['COUNT(nID)'] ?></span></a>
                    <a href="feedback" class="list-group-item">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="" true> </span> Feedback<span
                                class="badge"><?php echo $data['countFeedback'][0]['COUNT(name)'] ?></span></a>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Additional information</b></h3>
                    </div>
                    <div class="panel-body">
                        <div class="well dash-box">
                            <h2><img height="50"
                                     src="../Assets/img/policeman.png"><?php echo $data['countPoliceUsers'][0]['COUNT(name)'] ?>
                            </h2>
                            <h4>Police Officials</h4>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
            <div class="col-md-9">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Police Officials</b></h3>
                    </div>
                    <div class="panel-body myPanel">
                        <table class="table  table-hover tbl">
                            <tr>
                                <th class="main-color-bg" scope="col">Name</th>
                                <th class="main-color-bg" scope="col">Last Name</th>
                                <th class="main-color-bg" scope="col">Address</th>
                                <th class="main-color-bg" scope="col">Telephone</th>
                                <th class="main-color-bg" scope="col"></th>
                            </tr>
                            <?php foreach ($data['policeOfficials'] as $i => $police): ?>

                                <tr>
                                    <td style="display:none"><?php echo $data['policeOfficials'][$i]['uID'] ?></td>
                                    <td><?php echo $police['name'] ?></td>
                                    <td><?php echo $police['surname'] ?></td>
                                    <td><?php echo $police['rruga'] ?></td>
                                    <td><?php echo $police['nr_telefonit'] ?></td>
                                    <td>
                                        <button class="btn main-color-bg editbtn"  type="button"> Edit </button>
                                        <form method="post" action="police" style="display:inline">
                                            <input type="hidden" name="remove"
                                                   value="<?php echo $data['policeOfficials'][$i]['uID'] ?>">
                                            <button type="submit" name="delete" value="" style="margin-left: -50px"
                                                    class="pull-right btn btn-danger">Delete
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </table>
                    </div>
                </div>

                <div class="col-md-6 myPanel">
                    <table class="table  table-hover tbl" id="costum">
                        <tr>
                            <th class="main-color-bg">Available</th>
                        </tr>
                        <tbody id="police">

                        </tbody>
                    </table>
                    <table class="table  table-hover tbl" id="costum">
                        <tr>
                            <th class="main-color-bg">On Duty</th>
                        </tr>
                        <?php foreach ($data['onDuty'] as $i => $duty): ?>
                            <tr>
                                <td><?php echo $data['onDuty'][$i]['name'] . ' ' . $data['onDuty'][$i]['surname'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>


                <ul class="col-md-6 list-group myPanel important">
                    <li class="sticky list-group-item active main-color-bg">
                        Pending Approval
                    </li>

                    <?php foreach ($data['pendingApproval'] as $i => $approve): ?>

                        <li class="list-group-item">

                            <?php echo $approve['name'] . ' ' . $approve['surname'] ?>
                            <form method="post" action="police" style="display:inline">

                                <input type="hidden" name="remove"
                                       value="<?php echo $data['pendingApproval'][$i]['uID'] ?>">
                                <button type="submit" name="delete" value="" style="margin-left: 10px"
                                        class="pull-right btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>

                                <input type="hidden" name="insert"
                                       value="<?php echo $data['pendingApproval'][$i]['uID'] ?>">
                                <button type="submit" name="add" value=""
                                        class="pull-right btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </form>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <pr>Copyright Adminstrap, &copy; 2021</pr>
</footer>

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Police</h4>
            </div>

            <form id="editPolice">
                <div class="modal-body">

                    <input type="hidden" name="idUpdata" id="idUpdata">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                    </div>

                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Telephone">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                        <button type="submit" name="editCitizen"  class="btn btn-primary">Edit</button>
                    </div>
            </form>
        </div>
    </div>
</div>



<script>

    document.getElementById('editPolice').addEventListener('submit', editData);

    function editData(e){
        e.preventDefault();

        var id = document.getElementById('idUpdata').value;
        var name = document.getElementById('name').value;
        var lastName = document.getElementById('lastName').value;
        var address = document.getElementById('address').value;
        var telephone = document.getElementById('telephone').value;

        "fname=Henry&lname=Ford"

        var params = `idUpdata=${id}&name=${name}&lastName=${lastName}&address=${address}&telephone=${telephone}`
        var xhr = new XMLHttpRequest();

        xhr.open('POST', './AJAX/ajaxPOST.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function()
        {
            if(xhr.readyState === 4 && xhr.status === 200)
            {
                alert(this.responseText);
            }
        }

        xhr.send(params);

    }


    function loadPoliceOfficials(){
        var xhr = new XMLHttpRequest();

        xhr.open('GET', './AJAX/ajaxFETCHdb.php', true);

        xhr.onload=function (){
            if(xhr.readyState === 4 && xhr.status === 200)
            {
                var users = JSON.parse(this.responseText);
                var output ='';

                for (var i in users){
                    output +='<tr>' +
                        '<td>'+users[i].name+' '+users[i].surname+'</td>'+
                        '</tr>'
                }

                var tbody=document.querySelector('#police');
                tbody.innerHTML=output;
            }
        }

        xhr.send();
    }


    document.addEventListener("DOMContentLoaded",  ()=> { loadPoliceOfficials()})


</script>

<script src="../Assets/js/editUsers.js"></script>


</body>
</html>