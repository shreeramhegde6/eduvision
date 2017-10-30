<?php
include('session.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width">
        <meta name="description" content="Eduvision aims at bridging the communication gap between students and teachers and using internet to make education fun">
        <meta name="keywords" content="E-Learning,Education,Student,Teacher,Book of the week,Communication,Eduvision">
<title>
	Learning Is Now Fun
</title>
<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<link rel="stylesheet" href="mysheet.css">
</head>
<body id="Home">
<div id="big_wrapper">
<header id="header" role="banner">
<h1 id="logop" align="center"> GRE Gyaan </h1><br><br>
<p id="tag_line"><q>Do something today that your future self will thank you for.</q></p>
</header>
<p>
<h3 align="right" style="color:#FF6600">Welcome, <?php echo $login_session; ?>!</h3>
</p>
<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li class="current-item"><a href="welcome.php">Home</a></li>
            <li>
                <a href="#">Quiz of the day<span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="quant_quiz.php">Quants</a></li>
                    <li><a href="verb_quiz.php">Verbal</a></li>
                </ul>
            </li>
            <li>
				<a href="#">Videos<span class="arrow">&#9660;</span></a>
			
				<ul class="sub-menu">
					<li><a href="intro.php">Introduction</a></li>
                    <li><a href="quant.php">Quants</a></li>
                    <li><a href="verbal.php">Verbal</a></li>
					<li><a href="awa.php">AWA</a></li>
                </ul>
			</li>
			<li>
				<a href="">My account<span class="arrow">&#9660;</span></a>
				<ul class="sub-menu">
					<li><a href="profile.php">Profile</a></li>
					<li><a href="history.php">Transaction History</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
			
			</li>
            <li><a href="About Us.php">About us</a></li>
        </ul>
    </nav>
</div>
<div id="new_div">
<section id="section">
<h3>INTRODUCTION TO GRE:</h3>
<br>
<p><u><b>WHAT IS GRE:</p></u></b><br><p> Students planning to pursue Masters of Science, commonly known as MS, take the GRE - Graduate Record Examination</p>
<br>
<p><u><b>COST OF WRITING THE EXAM:</p></u></b><br><p>USD 195 (approx INR 12000)</p>
<br>
<p><u><b>STRUCTURE OF THE COMPUTER BASED TEST:</p></u></b>
<br>
<table id="table">
<tr>
<th>Measure</th>
<th>No. of Questions</th>
<th>Allotted Time</th>
</tr>
<tr>
<td>Analytical Writing</td>
<td>One ""Issue" and one "Argument" task</td>
<td>30 mins per task</td>
</tr>
<tr>
<td>Verbal Reasoning(Two sections)</td>
<td>20 questions per section</td>
<td>30 mins per section</td>
</tr>
<tr>
<td>Quantitative Reasoning(Two sections)</td>
<td>20 questions per section</td>
<td>35 mins per task</td>
</tr>
<tr>
<td>Unscored</td>
<td>Varies</td>
<td>Varies</td>
</tr>
<tr>
<td>Research</td>
<td>Varies</td>
<td>Varies</td>
</tr>
</table>
<br>
<p><u><b>SCORING:</p></u></b><br><p>Quantitative Reasoning-170<br>Verbal Reasoning-170<br>Total-340 <br> AWA-6</p><br>
</section>
<aside id="news">
<div id="news_articles">
<div id="news_header">
<h3 align="center"><b>Bulletin<b></h3>
</div>
<section id='news_section'>
<article>
<h4 id="news_title">Our Achievers</h4>
<p>Haril Satra<br> (Q:166, V:156, AWA:4)</p>
<br>
<p>Eshaan Shah<br> (Q:164, V:149, AWA:4)</p>
<br>
<p>Nishit Shetty<br> (Q:164, V:144, AWA:4)</p>
<br>
<p>Jai Shah<br> (Q:156, V:144, AWA:3.5)</p>
<br>
</article>
</section>
</div>
</aside>
</div>
<footer id="footer" role="contentinfo">
<p>We are open to suggestions and hence would like to hear from you about anything you wish to convey to us.<br>
&copyGRE Gyaan<br>Contact:&nbsp&nbsp17thegunner[@]gmail[dot]com</p>
</footer>
</div>
</body>
</html> 