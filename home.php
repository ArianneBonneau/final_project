<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Moz-Art</title>


        <style>

            .column {
                float: left;
                width: 33.33%;

            }

            .row::after {
                content: "";
                clear: : both;
                display: table;
            }

            .header {
                margin-left: -3px;
                background-color: black;
                opacity: 50;
            }

            ul {
                list-style-type: none;
                margin-top: -0.5%;
                padding: 0;
                overflow: hidden;
                background-color: #111111;
                position: -webkit-sticky; /* Safari */
                position: sticky;
                top: 0;
            }

            li {
                float: left;
                border-right: 1px solid #bbb;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /* Change the link color to #111 (black) on hover */
            li a:hover {
                background-color: #000060;
            }
            .active {
                background-color: #4CAF50;
            }

            body{
                background-color: #071235;
            }
        </style>

    </head>

    <body>
        <header>

            <div class="row1">
                    <img src="logoSmall.jpg" class="logo">
                    <img src="mustang2.jpg" class="header">
            </div>

            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="submissions.php">Submissions</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>

        </header>

        <div class="row">
            <div class="column">
                <img src="lexusBody.jpg">
            </div>
            <div class="column">
                <img src="boatBody.jpg">
            </div>
            <div class="column">
                <img src="mustangBody.jpg">
            </div>

        </div>


    </body>

</html>


<?php
