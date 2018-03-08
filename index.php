
<html>
	<head>
		<title>Home</title>
			<style>
				body{
						background:White;
						font-family: Helvetica, sans-serif; font-size: 18px; line-height: 24px;
					}

				nav {
						margin: 9px auto; 
						text-align: center;
					}

				nav ul ul 
					{
						display: none;
					}
				nav ul li:hover > ul 
					{
						display: block;
					}
				nav ul 
					{
						background:#06DCFB; 
						padding: 0 20px;
						border-radius: 10px;  
						list-style: none;
						position: relative;
						display: inline-table;
					}
				nav ul:after 
					{
						content: ""; clear: both; display: block;
					}
				nav ul li {
							float: left;
							}
								nav ul li:hover {
								background:#01FCEF;
							}
							nav ul li:hover a {
							color: #fff ;
							}
				nav ul li a {
							display: block; padding: 25px 70px;
							color: #fff; text-decoration: none;
							}
					nav ul ul {
						background:#01FCEF; border-radius: 0px; padding: 0;
						position: absolute; top: 100td_persen;
					}
						nav ul ul li {
							float: none; 
							border-top: 1px solid #01FCEF;
							border-bottom: 1px solid #01FCEF; position: relative;
						}
							nav ul ul li a {
								padding: 15px 40px;
								color: #fff;
							}	
								nav ul ul li a:hover {
									background:#06DCFB;
								}
					nav ul ul ul {
						position: absolute; left: 100td_persen; top:0;
					}
			</style>
	</head>
	<?php
		echo "Today is " . date("l, d F Y ") . "<br>";
		echo "The time is " . date("H:i:s");
	?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<td>
		<td><select name="select">
			<option value="1" selected="selected">Lainnya</option></select>
	</td>
	
	<body bgcolor="#01FCEF">
	<table align="center" border="0"  width="1360" cellspacing="2" cellpadding="10">

	<nav>	
		<ul>
	<div class="tab"> <img src='logo.jpg' width='75' height='75' align="left" style='float:center;'/>
		<li><a href="revisi.php">Beranda</a></li>
		<li><a href="#">Profil</a>
		</li>
		<li><a href="#">Kurikulum</a>
			<ul>
				<li><a href="#">Osis</a></li>
				<li><a href="#">Prestasi</a></li>
				<li><a href="#">Ekstrakurikuler</a></li>
			</ul>
		</li>
		<li><a href="Contact.php">Contact</a>
		    <ul>
						<li><a href="Info.php">Profile</a></li>
						<li><a href="#">Kontak</a></li>
			</ul>
		</li>
		<li><a href="kelulusan.php">Alumni</a>
		</li>
		<li><a href="admin.php">Admin</a>
		</li>
	</ul>
</nav>
		
		<body bgcolor='black'>
			<table border="7" align="center" width="1200" cellspacing="15" cellpadding="25">
				<tr align="center" valign ="top" width='1000' height='350' background=".jpg">
                    <td colspan ="15" height="300"><font face="broadway" size="7" ><b></b></font></td> 
                    <center><h5> <i>MADRASAH ALIYAH NURUL HUDA BADEAN BANYUWANGI</i></h5></center>
                <tr>
                    <td bgcolor="White" width="400" height="500">
                        <h1><center>Berisi Recent Update Berita</center></h1>&nbsp;&nbsp;&nbsp;
                    </td> 

                    <td  bgcolor="White" width="600" height="500" valign="top">
                        
						<?php
						if (isset($_POST['judulpost']))
						{
						echo "<center>";
						echo "<b>";
						 echo $_POST['judulpost'];
						 echo "</b>";
						 echo "</center >";
						}
						 
						echo "<br />";
						echo "<br />";
						echo "<br />";
						
						if (isset($_POST['visimisi']))
						{
						   echo $_POST['visimisi'];
						}
						echo "<br />";
						?>


                    </td>
                </tr>
	
                <tr align="center" valign="top">
                    <td height="150" colspan="3" >
                        <p><b><strong><center>Follow Us :</b></strong></p></center>
                        <br>
                        <center><a href="https://www.facebook.com/https://www.facebook.com/profile.php?id=100013826490014"><img alt="facebook" border="0" 
                        src="fbicon.png" height="48" width="48" /></a>&nbsp;
                        <a href="https://www.twitter.com/chamcham_mrz"><img alt="twitter" border="0" 
                        src="Twitter-icon.png" height="48" width="48" title="Follow me" /></a>&nbsp;
                        <a href="https://www.instagram.com/sichamgz"><img alt="instagram" border="0" 
                        src="instagram-Logo-PNG-Transparent-Background-download.png" height="48" width="48" title="Follow me" /></a>&nbsp;<br><br>
                        &phone; 085737329896 <spasi><br>
                        E-mail : badean@gmail.com
                        </center>
                    </td>
                </tr>
		
                <tr align="center">
                    <td colspan="3" height="75">
                        <center>Copyright &copy; 2018 By STIKOM PGRI Banyuwangi| All Rights Reserved</center>
                    </td>
                </tr>
	       </table>
	   </body>
</html>