<?php
/**
 * Created by PhpStorm.
 * User: linhn
 * Date: 4/21/2018
 * Time: 3:33 PM
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="VNQ" />
    <title>CỔNG THÔNG TIN - TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VĨNH LONG</title>

    <link rel="icon" href="images/logo.png" />
    <link href="css/jquery.loadmask.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/jquery.msgBox.css" type="text/css" />
    <link href="css/jquery.pnotify.default.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.css">


    <link rel="stylesheet" href="css/giangvien-style.css" media="screen" title="no title" charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >




    <style type="text/css">
        *{
            font-family: UVNTinTuc, Tahoma, Geneva, sans-serif;
        }
        .tab-content {
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            border-radius: 5px;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            padding: 10px;
            margin-bottom: 5px;
        }
        /********FIELDSET  LEGEND*****************/
        .blueHR {
            clear: both;
            border-bottom: 1px dashed yellow;
            height: 4px;
            margin-bottom: 3px;
            margin-right: 15px;
        }
        legend {
            border-bottom: solid 2px #ffa20c;
            margin-bottom: 2px;

            text-align:left;
            color: #A90001;
            font-weight:bold;
            width: 100%;
            font-size: 14px
        }
        fieldset.ctdt{
            border-color: rgb(181, 184, 200);
            border-radius : 8px;
            background-color: rgb(227, 238, 247);
            color: black;
        }
        /*****CSS TAB*****/
        div.menu3
        {
            /*width:500px;margin:0 auto;*//*Uncomment this line to make the menu center-aligned.*/
            text-align:left;
            font-size:0;
            height: 25px;
            *position:relative;*top:1px;/*Hacks for IE6 & IE7 */
        }

        div.menu3 a
        {
            display: inline-block;
            padding: 0 20px;
            margin-right:1px; /* It specifies the distance between each tab */
            background:#F7F7F7;
            color:Black;
            text-decoration:none;
            font: normal 12px Arial;
            line-height: 24px;
            border:1px solid #CAD0DB;
            border-bottom:0;
            color:#666;
            vertical-align:top;/*ChangeSet#2*/
            text-decoration:none;
        }

        div.menu3 a:hover, div.menu3 a.current
        {
            background:#E9ECF0;
            line-height: 25px;
            color:#000;
        }

        div.menu3sub
        {

            padding: 6px;
            border:1px solid #CAD0DB;
            background:#E9ECF0;
        }

        /*****START PNOTIFY*****/
        .alert {
            padding: 8px 35px 8px 14px;
            margin-bottom: 18px;
            color: #c09853;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            background-color: #fcf8e3;
            border: 1px solid #fbeed5;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
        h4.ui-pnotify-title {
            margin: 0px;
            font-family: 'Lobster',cursive;
            font-weight: bold;
            font-style: italic;
            color: inherit;
        }

        .alert-heading {
            color: inherit;
        }

        .alert .close {
            position: relative;
            top: -2px;
            right: -21px;
            line-height: 18px;
        }

        .alert-success {
            color: #468847;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }

        .alert-danger,
        .alert-error {
            color: #b94a48;
            background-color: #f2dede;
            border-color: #eed3d7;
        }

        .alert-info {
            color: #3a87ad;
            background-color: #d9edf7;
            border-color: #bce8f1;
        }

        .alert-block {
            padding-top: 14px;
            padding-bottom: 14px;
        }

        .alert-block > p,
        .alert-block > ul {
            margin-bottom: 0;
        }

        .alert-block p + p {
            margin-top: 5px;
        }

        [class^="icon-"],
        [class*=" icon-"] {
            display: inline-block;
            width: 14px;
            height: 14px;
            *margin-right: .3em;
            line-height: 14px;
            vertical-align: text-top;
            background-image: url("../images/glyphicons-halflings.png");
            background-position: 14px 14px;
            background-repeat: no-repeat;
        }

        .icon-remove {
            background-position: -312px 0;
        }
        /*****END PNOTIFY*****/




        /********TABLE GRID*****************/
        .grid {
            border-collapse:collapse;
            border: 1px solid #A6C9E2;
            background-color: white;
        }
        .grid th, .grid td{

            padding:4px 5px;
            border: 1px solid #A6C9E2;
        }

        .grid thead tr,.table-header {
            color:#000;
            font-size: 12px;
            font-weight: bold;
            vertical-align: middle;
            background-color: #C5DBEC;
            border: 1px solid #C5DBEC;
            height: 30px;
        }
        .grid thead tr th, .table-header th,.table-header td{

            background: url('http://www.trirand.com/blog/jqgrid/themes/redmond/images/ui-bg_glass_85_dfeffc_1x400.png') repeat-x scroll 50% 50% #DFEFFC;
            text-align: center;
            font-weight: bold;

        }
        .tableitem:hover {
            background-color: rgba(238, 245, 251, 1);
        }

    </style>

</head>
<div id="bn" style=" background:url(images/bgbn.gif); background-position:top; background-repeat:repeat-x; width:100%; min-width:1110px">

    <div style="background-color:#86af50">
        <div style="float:left; width:30px; height:23px; margin-left:10px">
            <a href="home.action"><img src="images/home.jpg" width="32" height="23" border="0"></a></div>
        <div style="float:left; margin-left:10px; height:23px; color:white">
            <a role="button" href="cvht.action" style="color:white">Cố vấn học tập </a>
            | <a href="giangVienTKBForm.action" style="color:white">Thời khóa biểu</a>
            | <a href="giangVienNhapDiemMonHocForm.action" style="color:white">Nhập điểm</a>
            | <a href="http://ems.vlute.edu.vn" style="color:white">VLUTE-ems</a>
        </div>
        <div style="float:right; padding-right:10px;color:white">
            <div style="float:left; background:url(images/bnbg2.gif); height:23px; width:163px"></div>
            <div style="float:left; background:url(images/imgbn.gif); height:23px; width:350px" align="center">
                <a href='userInfoForm.action' style="color:white"> Xin chào Nguyễn Vạn Năng <span class="glyphicon glyphicon-user "> </span></a> |
                <a href="../logout.action"  style="color:white" role="button"> Đăng Xuất <span class="glyphicon glyphicon-off"></span></a>
            </div>
            <div style="clear:both"></div>
        </div>
        <div style="clear:both"></div>
    </div>	</div>



<div id="content"  class="panel panel-body">
    <div class="row">
        <div class="col-md-3" >
            <div class="panel panel-default">
                <div class="panel-heading">Cố vấn học tập</div>
                <div class='panel-body'>
                    <a href="cvht.action"><img src="images/dkmh2.png" alt="Cố vấn học tập" /></a>
                    <p></p>
                    <p class="more">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="panel panel-default">
                <div class="panel-heading">Thời Khóa Biểu</div>
                <div class='panel-body'>
                    <a href="giangVienTKBForm.action"><img src="images/tkb.png" alt="TKB" /></a>

                    <p></p>
                    <p class="more">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="panel panel-default">
                <div class="panel-heading">Nhập điểm</div>
                <div class='panel-body'>
                    <a href="giangVienNhapDiemMonHocForm.action"><img src="images/bangdiem.png" alt="Nhập điểm" /></a>

                    <p></p>
                    <p class="more">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="panel panel-default">
                <div class="panel-heading">Thông tin cá nhân</div>
                <div class='panel-body'>
                    <a href="userInfoForm.action"><img src="images/avatar3.png" alt="Thông tin cá nhân" /></a>

                    <p></p>
                    <p class="more">

                    </p>
                </div>
            </div>
        </div>

    </div> <!-- end row -->

</div>
<!--end Content -->

<!-- footer -->
﻿
<div class="ft" style="min-width:1110px">
    <div style="background-color:#86af50">
        <div style="margin:auto; padding:0px 10px"><img src="images/ft.jpg" width="322" height="20" /></div>
    </div>
    <div class="" style="background:url('images/img_46.jpg'); background-position:top; padding: 15px">
        <div class="row">
            <div class="col-md-6" >
                <p><span style="font-weight:bold; line-height: 10px">Cơ quan quản lý:</span><br />
                    TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VĨNH LONG <br />
                    Địa chỉ: 73 Nguyễn Huệ, Phường 2, TP.Vĩnh Long, Tỉnh Vĩnh Long <br />
                    Điện thoại: 0703 822141 - Fax: 0703 821003 - Email: spktvl@vlute.edu.vn</p>

            </div>
            <div class="col-md-6 " >
                <div align="left"><span style="font-weight:bold">Người thực hiện:</span><br />
                    Nguyễn Ngọc Yến Linh <br />
                    MSSV: 14004037<br />
                    Điện thoại: +84978743023
                </div>
            </div>
        </div>
    </div>
</div>	</div>
</body>
<script>
</script>

</html>