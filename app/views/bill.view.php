<!DOCTYPE html>
<html>
<head>
	<title>Bill Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/public/css/bill.css">
  <link rel="stylesheet" type="text/css">
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
<!-- jQuery library -->

<!-- Latest compiled JavaScript -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body >
<?php 
// echo "<pre>";
// print_r($Detail_Order); 
// echo "</pre>";
?>
	<div id="page" class="page">
    	<div class="header">
	        <div class="logo">
	        	<img src="/public/images/logo-apple.png"/>
	        </div>
	        <div class="company">
	        	<b>Apple Store</b><br>
	        	<p>344, 2/9 Street, Hai Chau District, Da Nang City<br>Tel: 0236 3510510</p>
	        </div>
    	</div>
  		<br/>
  		<div class="title">
        	Sales Receipt
        <br/>
        -------oOo-------
  		</div>
  		<br/>
  		<div class="info-customer">
  				<p>Customer name : <?php echo $Order[0]->UserName; ?><br>Address : <?php echo $Order[0]->Addr; ?><br>Tel : <?php echo $Order[0]->PhoneNumber; ?></p>
  		</div>
  		<table class="TableData">
  			<thead>
	    		<tr>
	      			<th class="col-No">No.</th>
	      			<th>Products name</th>
	      			<th>Unit price</th>
	      			<th>Quantity</th>
	      			<th>Amount</th>
	   			 </tr>
	   		</thead>
	   		<tbody>
                <?php 
                    $stt =1;
                    $total=0;
                    foreach ($Detail_Order as $key => $value) {
                        # code...
            
                ?>
	    		<tr>
	    			<td class="col"><?php echo $stt; ?></td>
	      			<td class="colNamePr"><?php echo $value->ProductName; ?></td>
	      			<td class="colPrice">$<?php echo $value->NewPrice; ?></td>
	      			<td class="colQuantity"><?php echo $value->Quantity; ?></td>
	      			<td class="colAmount">$<?php echo $total += $value->NewPrice*$value->Quantity; ?></td>
	    		</tr>
                <?php 
                    $stt++;
                    }
                ?>
	    	</tbody>
  		</table><br>
        <h4>Total: $<?php echo $total; ?></h4>

  <div class="footer-left"> Da Nang City 19st, Oct 2017<br/>
    Customer <br>(Sign & Full name)</div>
  <div class="footer-right"> Da Nang City 19st, Oct 2017<br/>
    Saller<br>(Sign & Full name)</div>
    <input id="printpagebutton" type="button" value="Print Bill" onclick="printpage()"/>
</div>
</body>
</html>
<script>
 function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
    }
</script>