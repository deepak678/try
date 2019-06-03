<HTML>
<form style"absolute" action='login.php' method='post'>
<IMG SRC="images.jpg" ALT="" style="width:750px;height:500px;" border="0">
 <div style="position: absolute; left: 0px; top: 0px;"> 
 <br><br><br><br><br><br><br><br><br><br><br><br>
<pre>
                                          USERNAME:<input type='text' name='username'><br>
                                          PASSWORD:<input type='password' name='password'><br>
                                                   <input type='submit' value='login'>
											<br><br><br><br><br><br><br><br><br><br><br> 
 <a href='register.php'>Register?</a>
 <br><br><br>MAKE SURE CAPSLOCK IS OFF hello
 </pre>
 </form>
<BR>
</div>


</HTML>
<?PHP
$lastmod=date("F,d,y H:i:sa",getlastmod());
echo "Page last modified on $lastmod";
?>
