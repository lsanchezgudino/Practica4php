?>
<html>
  <body>
    <?php
	    $Prod1=100;
		$Prod2=200;
		$Prod3=300;
		$Prod4=400;
		$Prod5=500;
		define('IVA',0.16);
		$subtotal=$Prod1+$Prod2+$Prod3+$Prod4+$Prod5;
		$totIVA=$subtotal*IVA;
		$total=$totIVA+$subtotal;
	
	  ?>
	  <table>
	     <tr>
		 <td>Prod1</td>
		 <td><?php echo $Prod1;?></td>
		 </tr>
		 <tr>
		 <td>Prod3</td>
		 <td><?php echo $Prod2;?></td>
		 </tr>
		 <tr>
		 <td>Prod3</td>
		 <td><?php echo $Prod3;?></td>
		 </tr>
		 <tr>
		 <td>Prod4</td>
		 <td><?php echo $Prod4;?></td>
		 </tr>
		 <tr>
		 <td>Prod5</td>
		 <td><?php echo $Prod5;?></td>
		 </tr>
		 <tr>
		 <td>subtotal</td>
		 <td><?php echo $subtotal;?></td>
		 </tr>
		 <tr>
		 <td>IVA</td>
		 <td><?php echo $totIVA;?></td>
		 </tr>
		 <tr>
		 <td>total</td>
		 <td><?php echo $total;?></td>
		 </tr>
		 </table>
		 <body>
		 <?php
		 

