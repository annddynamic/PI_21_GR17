<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Footer</title>
    <style>

        .fa {
            padding: 20px;
            font-size: 30px;
            width: 70px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;

        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-yahoo {
            background: #430297;
            color: white;
        }

        .ikona{
            margin-left: 9rem;
        }

        h2 {
            margin-left: 4rem;
        }
        a:link{
            color: #555555 ;
        }



        .section-footer {
            background: #6497b1;
            color: white;
            padding: 4rem 0;
        }

        ul li {
            list-style: none;
        }


        .section-footer .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 1rem;
        }

        .section-footer h2 {
            font-size: 2rem;
            margin-bottom: 1rem;

        }

        .section-footer h3 {
            margin-bottom: 0.7rem;
        }

        .section-footer {
            line-height: 1.9;
            color: #cccccc;
        }

        .email-form{
            width: 100%;
            display: inline-block;
            background-color: #b3cde0;
            position: relative;
            border-radius:20px;
            line-height: 0;
            margin-top: 1rem;
        }
        .email-form .form-control{
            display: inline-block;
            border: 0;
            outline: 0;
            font-size: 1rem;
            color: #dddddd;
            background-color: transparent;
            font-family: inherit;
            margin: 0;
            padding: 0 3rem 0 1.5rem;
            width: 100%;
            height: 45px;
            border-radius: 20px;

        }

        .email-form .submit {
            display: inline-block;
            position: absolute;
            top: 0;
            right: 0;
            width: 45px;
            height: 45px;
            background-color: dimgrey;
            font-size: 1rem;
            text-align: center;
            margin: 0;
            padding: 0;
            outline: 0;
            border: 0;
            color: #333;
            cursor: pointer;
            border-radius: 0 20px 20px 0;
        }

        .email-section{
            margin-right: 1em;
        }
        .contactUs-section{

        }
    </style>


</head>
<body>
<footer class="section-footer">
    <div class="grid">
        <div class="ikona">
            <h2>You can find us: </h2>
            <a href="http://twitter.com" class="fa fa-twitter"></a>
            <a href="http://facebook.com" class="fa fa-facebook"></a>
            <a href="http://yahoo.com" class="fa fa-yahoo"></a>
        </div>
        <div class="contactUs-section">
            <h3>Lorem</h3>
            <ul>
                <li>©2021 Internet Watch Foundation All rights reserved.</li>
            </ul>
        </div>

        <div class="email-section">
            <h3>Subscribe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, minima.</p>
            <form name="emai-form" method="post" data-netlify="true">
                <div class="email-form">

                 <span class="form-controle-wrap">
                     <input type="email" name="email" id="email " size="48" class="form-control" placeholder="Email">
                 </span>
                    <button type="submit" class="form-control submit">
                        <i class="fas fa-cheveron-right"></i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</footer>
</body>
</html>