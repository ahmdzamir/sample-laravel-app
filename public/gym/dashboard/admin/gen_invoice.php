<?php
require '../../include/db_conn.php';
page_protect();
$etid=$_GET['etid'];
$pid=$_GET['pid'];
$uid=$_GET['id'];



					$sql = "Select * from users u INNER JOIN enrolls_to e ON u.userid=e.uid INNER JOIN plan p where p.pid=e.pid and userid='".$uid."' and e.et_id='".$etid."'";
					$res=mysqli_query($con, $sql);
					 if($res){
						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
				
						      }
				
					

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SPORTSWORLD</title>
<style>


 #space
{
line-height:0.5cm;
}
</style>
        <script>function myFunction()
	{
		var prt=document.getElementById("print");
		var WinPrint=window.open('','','left=0,top=0,width=800,height=900,tollbar=0,scrollbars=0,status=0');
		WinPrint.document.write(prt.innerHTML);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
		setPageHeight("297mm");
		setPageWidth("210mm");
		setHtmlZoom(100);
		//window.location.replace("index.php?query=");
	}
		</script>
</head>

<body>
<br><input type="button" class="a1-btn a1-green" value="PRINT INVOICE" onclick="myFunction()">
 <div id=print>
					
	<center><h1>Invoice Of Booking</h1></center>
							
<table id =space width="760" height="397" border="0" align="center">
  <tr>
    <td width="222" height="198"><img src="https://pbs.twimg.com/media/FN0P3lMaIAMImVB?format=jpg&name=small" width="200" height="150"  alt=""/></td>
    <td width="317"><p><strong>SPORTSWORLD</strong></p>
      <p>SPORTSWORLD SDN BHD,</p>
      <p>CEO, Ahmad Zamir</p></td>
    <td height="198"><p>Serial No : <?php echo $row['et_id'] ?></p>
      <p>&nbsp;</p>
    <td height="198"><p>Booking ID : <?php echo $row['uid'] ?></p>
      <p>&nbsp;</p>
      <p>Date : <?php echo $row['paid_date']?></p></td>
    </tr>
   
  <tr>
    <td height="118" colspan="3"><p>Received with thanks from : <?php echo $row['username']?></p>
      <p>A sum of (MYR) : <?php echo $row['amount']?></p>
      <p>On Booking Of : <?php echo $row['planName']?></p></td>
    </tr> 
  
  <tr>
    <td height="73" colspan="2"><p>&nbsp;</p></td>
    <td width="207"><p>&nbsp;</p>
      <p>THIS IS A COMPUTER GENERATED DOCUMENT, NO SIGNATURE REQUIRED.</p></td>
  </tr>
</table>

</div>
</body>
</html>