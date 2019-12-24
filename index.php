<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="fontawesome/fontawesome-free-5.7.1/css/all.css"> 
<style type="text/css">

*
{
margin:0px;
padding:0px;
box-sizing: border-box;
font-family: 'Montserrat', sans-serif;

/*The box-sizing property allows us to include the padding and border in an element's total width and height.*/

/* box-sizing can have two values (i)content-box (ii)border-box */
/*by default box-sizing value is content-box*/
}


div.header
{
width: 100%;
height:80px;
border:1px solid black;
background: linear-gradient(57deg,#bdc3c7,#2c3e50,#2c3e50);
}

#logo
{
position: relative;
bottom:-5px;
left: 20px;
float: left;
width: 92px;
height:70px;
}

#logo:hover
{
transform: rotate(360deg);
transition: all 0.3s ease-in-out 0s;
}

#searchbox
{
border-radius:10px 0px 0px 10px;
outline:none;
position: relative;
left:97px;
top:23px;
width:50%;
height: 37px;
font-size: 14px;
padding:10px;
transition: all 400ms ease;
border:2px solid black;
}

#searchbtn
{
padding: 10px;
height: 37px;
line-height: 10px;
position: relative;
left:90px;
top:23px;
font-size: 14px;
border-radius: 0px 10px 10px 0px;
outline: none;
cursor: hand;
border:2px solid black;
transition: all 400ms ease;
}

#searchbox:focus,#searchbox:focus + #searchbtn
{
border-color: dodgerBlue;
box-shadow:0px 0px 2px 0px dodgerBlue;
transition: all 400ms ease;
transform:scaleX(1.1);
transform-origin: 50% 50%;
}

span.contact_us
{
position: relative;
left:21%;
top:23px;
font-weight: bold;
}

i#con
{
position:relative;
left:13%;
top:23px;
}

span.contact_us:hover
{
cursor: hand;
}

span.contact_us:hover + #con
{
color:#2193b0;
}

a.common
{
text-decoration: none;
color: black;
}

a.common:hover
{
border-bottom: 1px solid black;
}

</style>
</head>
<body >

<!--Header-->
<div class="header">

<a href="home_ritik.php"><img id="logo" src="logo_ritik_afterediting.png" ></a>

<input id="searchbox" type="textbox" placeholder="search here" >
<input id="searchbtn" type="submit" value="search">
<span class="contact_us"><a class=common href="contact_us_ritik.php">Contact us</a></span><i id="con" class="fas fa-user"></i>

</div>









<!--Nav bar-->
<div class="nav_bar" style="width: 100%;height:40px;margin-top: 2px;border:1px solid black;
background: linear-gradient(57deg,#bdc3c7,#2c3e50,#2c3e50);">

<li style="display: flex;flex-direction: row;justify-content:space-around;padding-top:8px;">

<a style="text-decoration: none;color: black" href="home_ritik.php"><ul style="border-bottom: 2px solid black;border-radius:2px"><i class="fas fa-home"></i>&nbspHome</ul></a>

<a class="common" href="category1.php"><ul>category1</ul></a>
<a class="common" href="category2.php"><ul>category2</ul></a>
<a class="common" href="category3.php"><ul>category3</ul></a>
<a class="common" href="category4.php"><ul>category4</ul></a>
<a class="common" href="category5.php"><ul>category5</ul></a>
</li>

</div>










</body>

</html>