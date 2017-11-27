<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
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

</style>
</head>

	<body bgcolor="#C3CC7E">
            <?php
             if (!isset($_REQUEST['amount']) || empty($_REQUEST['amount'])) {
            ?>
			<h1><font color="white"><b>Fill Your Details</b></font></h1>
                        <form method="POST" action="appreciation_value.php">
		<table align="center" width="30%" height="30%" border="1">
			<tr>
				<td>
						<font color="white"><b>Enter Your Amount</b> </font>
				</td>
				<td>
					<input type="text" id="amount" name="amount" value=""  onkeypress="return isNumberKey(event)" >
				</td>
			</tr>
			<tr>
				<td>
						<font color="white"><b>Enter Year </b></font>
				</td>
				<td>
					<input type="text" id="year" name="year" value=""  onkeypress="return isNumberKey(event)" >
				</td>
			</tr>
                        <tr>
				<td>
						<font color="white"><b>Appreciation percentage </b></font>
				</td>
				<td>
					<input type="text" id="year" name="app_percentage" value=""  onkeypress="return isNumberKey(event)" >
				</td>
			</tr>
			<tr>
				<td align="right">
					<input type="submit" id="submit" name="submit"  value="Submit" class="classname"  onkeypress="return isNumberKey(event)" >
				</td>
				<td align="left">
					<input type="reset" class="classname" value="Reset" >
				</td>
			</tr>

		</table></form>
                        <?php 
             }
             else if(isset($_REQUEST['amount']) &&  !empty($_REQUEST['amount']))
             {
                  $pg               = $_REQUEST['amount'] ;
                  $yr               = $_REQUEST['year'];
                  $app_percentage   = $_REQUEST['app_percentage'];

              ?>  
               <table align="center" width="50%"border="1" cellspacing="0" cellpadding="0" class="hovertable">
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
                   $pg=$pg+($pg*$app_percentage/100);
                   
                    ?>                                                                       
                    <tr>
                        <th>
                            <font color="black"><b><?php echo $k + 1; ?></b> </font>
                        </th>
                        <th>
                            <font color="black"><b><?php echo round($pg); ?> </b></font>
                        </th>
                    </tr>
                <?php       

                }
?>
                     <table align="center" width="30%" height="30%" border="0">
            <tr>
            <td align="middle" colspan="2">
            <input type="button" id="goback" name="goback"  value="Go Back" class="classname" onClick="goBack()" >
            </td>
            </tr>

            </table>
                    
                    <?php
                }
                ?>
                    </table>
           
	</body>
</html>
<script language="javaScript">
	function isNumberKey(evt)
	{
		 var charCode = (evt.which) ? evt.which : event.keyCode
		 if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;

		 return true;
	}

    function goBack()
    {
        /* TODO -- place your go-back code here  */
        location	= "index.php";
    }
</script>
