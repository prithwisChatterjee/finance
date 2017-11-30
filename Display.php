<html>
    <head>
        <style>
            .classname {
                -moz-box-shadow:inset 0px -1px 0px 0px #fce2c1;
                -webkit-box-shadow:inset 0px -1px 0px 0px #fce2c1;
                box-shadow:inset 0px -1px 0px 0px #fce2c1;
                background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ffc477), color-stop(1, #fb9e25) );
                background:-moz-linear-gradient( center top, #ffc477 5%, #fb9e25 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc477', endColorstr='#fb9e25');
                background-color:#ffc477;
                -webkit-border-top-left-radius:25px;
                -moz-border-radius-topleft:25px;
                border-top-left-radius:25px;
                -webkit-border-top-right-radius:25px;
                -moz-border-radius-topright:25px;
                border-top-right-radius:25px;
                -webkit-border-bottom-right-radius:25px;
                -moz-border-radius-bottomright:25px;
                border-bottom-right-radius:25px;
                -webkit-border-bottom-left-radius:25px;
                -moz-border-radius-bottomleft:25px;
                border-bottom-left-radius:25px;
                text-indent:0;
                border:1px solid #eeb44f;
                display:inline-block;
                color:#ffffff;
                font-family:Arial;
                font-size:15px;
                font-weight:bold;
                font-style:normal;
                height:30px;
                line-height:30px;
                width:80px;
                text-decoration:none;
                text-align:center;
                text-shadow:1px 1px 0px #cc9f52;
            }
            .classname:hover {
                background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477) );
                background:-moz-linear-gradient( center top, #fb9e25 5%, #ffc477 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477');
                background-color:#fb9e25;
            }.classname:active {
                position:relative;
                top:1px;
            }

            table.hovertable {
                font-family: verdana,arial,sans-serif;
                font-size:11px;
                color:cadetblue;
                border-width: 1px;
                border-color: #999999;
                border-collapse: collapse;
            }
            table.hovertable th {
                background-color:#c3dde0;
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #a9c6c9;
            }
            table.hovertable tr {
                background-color:#d4e3e5;
            }
            table.hovertable td {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #a9c6c9;
            }
        </style>
    </head>
    <title>Compound Interest Calculation test git</title>
        <body bgcolor="#C3CC7E">
            <h1 align="center"><font color="white"><b></b></font></h1>
            <table align="center" width="50%"border="0" cellspacing="0" cellpadding="0" class="hovertable">
              
                <?php
                    if (isset($_REQUEST['amount']) && $_REQUEST['amount'] != '') {
                    $pg = $_REQUEST['amount'] / 12;
                    $yr = $_REQUEST['year'];
                    //$yr=10;
                    //$pg=2500;
                    $p = 0;
                    $r = 8.75;
                    $ti = 0;
                    ?>
                  <tr>
                    <th>
                        <font color="black"><b>Year</b> </font>
                    </th>
                    <th>
                        <font color="black"><b>Amount </b></font>
                    </th>
                </tr>
                    <?php

//echo 'ammount-'.$p;
                for ($k = 0; $k < $yr; $k++) {
                    for ($m = 1; $m < 13; $m++) {
                        $p+=$pg;
                        $i = ($p * (1) * $r / 12) / 100;
                        $ti+=$i; 
                    }
                    $r-=.05;
                    $p+=$ti;
                    ?>                                                                       
                    <tr>
                        <th>
                            <font color="black"><b><?php echo $k + 1; ?></b> </font>
                        </th>
                        <th>
                            <font color="black"><b><?php echo round($p); ?> </b></font>
                        </th>
                    </tr>
        <?php       
        $ti = 0;
    }
}else
    echo '<div align="center">NO DATA GIVEN </div>';
?>
        </table>
        <table align="center" width="30%" height="30%" border="0">
            <tr>
                <td align="middle" colspan="2">
                    <input type="button" id="goback" name="goback"  value="Go Back" class="classname" onClick="goBack()" >
                </td>
            </tr>

        </table>
    <marquee behavior="scroll" direction="left" class="">
        <font color="white">Designed & Developed by <b>test</b></font> </marquee>
</body>

<script language="javaScript">
    function goBack()
    {
        /* TODO -- place your go-back code here  */
        location	= "index.php";
    }
</script>
</html>
