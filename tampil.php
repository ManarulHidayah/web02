<?php  
 include "koneksi.php"; 
$perintah="SELECT * FROM artikel ORDER BY article_id DESC"; 
$hasil=mysqli_query($db,$perintah); 
echo(" <h2>List Artikel</h2> <br><UL> "); 
while ($row = mysqli_fetch_array($hasil)) 
{ echo(" <LI>$row[1] &nbsp;$row[2] &nbsp; 
    $row[waktu] &nbsp;
    <a href=\"edit_article.php?article_id=$row[0]\">Edit</a> 
    &nbsp;<a href=\"delete.php?articleID=$row[0]\">Hapus</a></LI><br>"); 
} 
echo("</table>"); echo "<br><a href=\"add_article.php\">Tambah</a>"; 
echo "<br><a href=\"adminpanel.php\">Admin Panel</a>"; 
?>