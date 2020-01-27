<html>
<head>

<style>
.header{grid-area:header;}
.menu{grid-area:menu;}
.main{grid-area:main;}
.item4{grid-area:right;}
.items5{grid-area:footer;}

.grid-container{
	display:grid;
	grid-template-areas: 'header header header header'
							 'menu main main main';
	
	
	background-color: #2196F3;
	padding:10px;
	
}
.grid-item{
	background-color: rgba(255, 255, 255, 0.8);
	border: 1px solid black;
	text-align:center;
}

</style>


</head>

<body>

<h1> The basic display</h1>

<div class="grid-container">
<div class = "header grid-item">1<img src="https://cdn4.vectorstock.com/i/1000x1000/95/23/cartoon-tattoo-scroll-banner-vector-8649523.jpg" width="700px" height="250px"> </div>
<div class="menu grid-item">2<a href="https://www.w3schools.com/html/">joogle.it</a><br>
<a href="https://www.w3schools.com/html/">joogle.it </a><br>
<a href="https://www.w3schools.com/html/">dontjoogle.it</a><br>
<a href="https://www.w3schools.com/html/">joogle.it</a><br>
<a href="https://www.w3schools.com/html/">joogle.it</a><br>
</div>

<div class="main grid-item">3 laLALALALALALlalalalalalalalallalalalalalalalalalla Rabbits are cute because they have really soft fur and cute round big eyes. They are cute because they are small and cuddly. They remind most people of a soft toy. Rabbits are cute because they have soft velvet ears and a little nose that is always twitches.</div>

</div>

<p>
</body>

</html>
