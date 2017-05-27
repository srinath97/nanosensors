<html>
<style>
table,th,td{
border:1px solid black;
border-collapse:collapse;
}
</style>
<body>
<b>Details of funded project being implemented</b>
<table width="100%">
<tr>
<th>SI.No.</th>
<th>Title of Project</th>
<th>Funding
Agency</th>
<th>Amount
(in lakhs)</th>
<th>Duration</th>
</tr>
<td colspan="5" style="text-align:center;"><b>Principal Investigator</b></td>
<?php
$stat=mysqli_connect('localhost','root','pass','nano')or die('Error connecting to database');
$query="SELECT * FROM fund0";
$sl=1;
$result=mysqli_query($stat,$query);
while($row=mysqli_fetch_array($result)) 
{ if($row['type']=="Being implemented")
  {
    if($row['type2']=="Principal Investigator")
    {?> <tr><td><?php echo $sl?></td>
          <td><?php echo $row[0]?></td>
          <td><?php echo $row[1]?></td>
          <td><?php echo $row[2]?></td>
          <td><?php echo $row[3]?></td>
      </tr>
   <?php 
   $sl++;
    }
  }
}$lock=0;
while($row=mysqli_fetch_array($result)) 
{ if($row['type']=="Being implemented")
  {
    if($row['type2']=="Co- Principal Investigator")
     
    {
         if($lock==0)
           { ?>
             <td colspan="5" style="text-align:center;"<b>Co- Principal Investigator</b></td>
             <?php $lock=1;//for creating row for Co-principal Investigator, lock has been used to prevent creation ofmultiple rows of the same.
           }
      ?> <tr><td><?php echo $sl?></td>
          <td><?php echo $row[0]?></td>
          <td><?php echo $row[1]?></td>
          <td><?php echo $row[2]?></td>
          <td><?php echo $row[3]?></td>
      </tr>
   <?php 
   $sl++;
  
    }
  }
}
?>
</table>
<br/>
<b style="text-align:center">Completed projects</b>
<table width="100%">
<tr>
<th>SI.No.</th>
<th>Title of Project</th>
<th>Funding
Agency</th>
<th>Amount
(in lakhs)</th>
<th>Duration</th>
</tr>
<td colspan="5" style="text-align:center;"><b>Principal Investigator</b></td>
<?php
$stat=mysqli_connect('localhost','root','pass','nano')or die('Error connecting to database');
$query="SELECT * FROM fund0";
$sl=1;
$lock=0;
$result=mysqli_query($stat,$query);
while($row=mysqli_fetch_array($result)) 
{ if($row['type']=="Completed")
  {
    if($row['type2']=="Principal Investigator")
    {?> <tr><td><?php echo $sl?></td>
          <td><?php echo $row[0]?></td>
          <td><?php echo $row[1]?></td>
          <td><?php echo $row[2]?></td>
          <td><?php echo $row[3]?></td>
      </tr>
   <?php 
   $sl++;
    }
  }
}$lock=0;
while($row=mysqli_fetch_array($result)) 
{ if($row['type']=="Completed")
  {
    if($row['type2']=="Co- Principal Investigator")
     
    {
         if($lock==0)
           {?>
             <td colspan="5" style="text-align:center;"><b>Co- Principal Investigator</b></td>
             <?php $lock=1;//for creating row for Co-principal Investigator, lock has been used to prevent creation ofmultiple rows of the same.
           }
      ?> <tr><td><?php echo $sl?></td>
          <td><?php echo $row[0]?></td>
          <td><?php echo $row[1]?></td>
          <td><?php echo $row[2]?></td>
          <td><?php echo $row[3]?></td>
      </tr>
   <?php 
   $sl++;
  
    }
  }
}

mysqli_close($stat);
?>
</table>
</body>
</html>

