


<!DOCTYPE html>
<html lang="PT-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
	
    
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
    	.container-box {
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: space-between;
		  margin-top: 100px;
		}
		.container-box .box {
		  position: relative;
		  width: 350px;
		  padding: 40px;
		  box-shadow: 0 5px 15px rgba(0,0,0,.1);
		  border-radius: 4px;
		  margin: 10px;
		  box-sizing: border-box;
		  overflow: hidden;
		  text-align: center;
		}

		.body-card {
			margin: 0;
			padding: 0;
			display: flex;
			align-items: center;
			justify-content: center;

		}

		.container-box .box .icon {
			position: relative;
			width: 80px;
			height: 80px;
			color: #fff;
			background-color: #000;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 0 auto;
			border-radius: 50%;
			font-size: 40px;
			font-weight: 700;
			transition: 1s;
		}
		.container-box .box:before {
			content: '';
			width: 50%;
			height: 100%;
			position: absolute;
			top: 0;
			left: 0;
			background: rgba(255,255,255,.2);
			z-index: 2;
		}


		.container-box .box:nth-child(1) .icon {
			box-shadow: 0 0 0 0 #e91e63;
			background:#e91e63;
		}

		.container-box .box:nth-child(1):hover .icon {
			box-shadow: 0 0 0 400px #e91e63;
		}

		.container-box .box:nth-child(2) .icon {
			box-shadow: 0 0 0 0 #6A5ACD;
			background:#6A5ACD;
		}
		.container-box .box:nth-child(2):hover .icon {
			box-shadow: 0 0 0 400px #6A5ACD;
		}

		.container-box .box:nth-child(3) .icon {
			box-shadow: 0 0 0 0 #64FE2E;
			background:#64FE2E;
		}
		.container-box .box:nth-child(3):hover .icon {
			box-shadow: 0 0 0 400px #64FE2E;
		}

		.container-box .box .content {
			position: relative;
			z-index: 1;
			transition: 0.5s;
		}

		.container-box .box:hover .content {
			color: #fff;
		}

		.container-box .box .content h3 {
			font-size: 20px;
			margin: 10px 0;
			padding: 0;
		}

		.container-box .box .content p {
			margin: 0;
			padding: 0;
		}
		
		a {
			display: inline-block;
			padding: 10px 20px;
			background-color: #fff;
			margin-top: 15px;
			border-radius: 18px 0 18px 0;
			text-decoration: none;
			color: #000;
			font-weight: 500;
			box-shadow: 0 3px 6px rgba(0,0,0,.2); 
		}
		.example {
			  -webkit-columns: 4 150px;
			  -moz-columns: 4 150px;
			  columns: 4 150px;
			  -webkit-column-gap: 2em;
			  -moz-column-gap: 2em;
			  column-gap: 2em;
			}



    </style>
  </head>


  <body>
       
    	


    <div class="body-card">	
    	<div class="container">
			<div class="container-box">
			    <div class="box">
			    	<div class="icon">M</div>
			    	<div class="content">
			    		<h3>Service Três</h3>
			    		<p>Após alguns segundos, as partículas das cinzas começaram a se agitar a ponto de queimarem. Juntaram-se em um redemoinho de fogo para formar um novo ser.</p>
			    		<a href="#">Saiba Mais</a>
			    	</div>
			    </div>
			    <div class="box">
			    	<div class="icon">02</div>
			    	<div class="content">
			    		<h3>Service Dois</h3>
			    		<p>Após alguns segundos, as partículas das cinzas começaram a se agitar a ponto de queimarem. Juntaram-se em um redemoinho de fogo para formar um novo ser.</p>
			    		<a href="#">Saiba Mais</a>
			    	</div>
			    </div>
			    <div class="box">
			    	<div class="icon">03</div>
			    	<div class="content">
			    		<h3>Service 01</h3>
			    		<p>Após alguns segundos, as partículas das cinzas começaram a se agitar a ponto de queimarem. Juntaram-se em um redemoinho de fogo para formar um novo ser.</p>
			    		<a href="#">Saiba Mais</a>
			    	</div>
			    </div>
		    </div>	    	
	    </div>
	</div>    	
  </body>
</html>
