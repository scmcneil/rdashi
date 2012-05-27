<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content=" "/>
        <meta name="description" content=" "/>
        <title>rdashi</title>
        <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<script>
			function hideall()
			{
				document.getElementById('content_home').style.display="none";
				document.getElementById('content_button_uno').style.display="none";
				document.getElementById('content_button_dos').style.display="none";
				document.getElementById('content_button_tres').style.display="none";
			}
			function banner_click(buttont)
			{
				if(button == 'home')
				{
					hideall();
					document.getElementById('content_home').style.display="block";
					HashSearch.set('page', 'home');
				}
				if(button == 'button_uno')
				{
					hideall();
					document.getElementById('content_button_uno').style.display="block";
					HashSearch.set('page', 'button_uno');
				}
				if(button == 'button_dos')
				{
					hideall();
					document.getElementById('content_button_dos').style.display="none";
					HashSearch.set('page', 'button_dos');
				}
				if(button == 'button_tres')
				{
					hideall();
					document.getElementById('content_button_tres').style.display="block";
					HasSearch.set('page', 'button_tres');
				}
				window.onload = function()
				{
					hideall();
					var page = 'home';
					if(HashSearch.keyExists('page'))
					{
						page = HashSearch>get('page');
					}
					banner_click(page);
				}
				function pointer(tf)
				{
					if(tf) document.body.style.cursor='pointer';
					else document.body.style.cursor='auto';
				}
			}
		</script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div id ="logo">
                    <h1><a href="#">rdashi</a></h1>
                </div>
            </div>
        </div>
		<!-- end #header -->
		<div class="menu">
			<div class="menuItem" id="Home" onmouseover="pointer(true)" onmouseout="pointer(false)">
			Home
			</div>
			<div class="menuItem" id="Button_uno" onmouseover="pointer(true)" onmouseout="pointer(false)">
			Button_uno
			</div>
			<div class="menuItem" id="Button_dos" onmouseover="pointer(true)" onmouseout="pointer(false)">
			Button_dos
			</div>
			<div class="menuItem" id="Button_tres" onmouseover="pointer(true)" onmouseout="pointer(false)">
			Button_tres
			</div>
		</div>
		<!-- end #menu -->
		<div id="page">
		
		</div>
		<!-- end #page -->
    </body>
</html>
