<?php
require('vendor/autoload.php');
include('connection.php');
$res=mysqli_query($conn,"SELECT * FROM `tbl_stud`");
if(mysqli_num_rows($res)>0)
{   $html.='<table class="table">';
    while($row=mysqli_fetch_assoc($res))
    {
        
        $html.='<tr><td>Id</td><td>FirstName</td><td>LastName</td><td>Mark</td></tr>';
        $html.='<tr><td>'.$row['id'].'</td><td>'.$row['fname'].'</td><td>'.$row['lname'].'</td><td>'.$row['mark'].'</td></tr>';
        echo $html;
    }
    $html.='</table>';
}
else
{
    $html="DATA NOT FOUND";
    echo $html;
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'D');
?>