<?php
include("search.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  padding:20px;
  /* border: 1px solid red; */
  /* margin-left:20px; */
  border: 1px solid;


}

th {
  text-align: left;
  margin-left:50px;
  border: 1px solid;
  text-align:center;

  /* width:5px; */

  /* border:2px solid red; */
}
td{
/* border:2px solid red; */
text-align: center;
border: 1px solid;

}

</style>
</head>
<body>
<div style="overflow-x:auto;">
      <table >
       <thead>
        <th style = width:50px>S.N</th> 
         <th style = width:247px>item_name</th>
         <th style = width:235px>description</th>
         <th style = width:200px>date_lost</th>
         <th style = width:245px>location</th>
         <th style = width:245px>contact_info</th>
         
    </thead>
    <div className="bodyone">
    <tbody> 
    <table>

  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      
      <td style = width:50px><?php echo $sn; ?></td>
       <!-- <td><?php echo $data['id']??''; ?></td>  -->
      <td style = width:247px><?php echo $data['item_name']??''; ?></td>
      <td style = width:235px><?php echo $data['description']??''; ?></td>
      <td style = width:200px><?php echo $data['date_lost']??''; ?></td>
      <td style = width:245px><?php echo $data['location']??''; ?></td>
      <td style = width:245px><?php echo $data['contact_info']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>

    <?php echo $fetchData; ?>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
     </div>
   </div>
</body>
</html>