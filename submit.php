<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="utf-8">
<meta name="author" content="Justin McLane">
<meta name="description" content="Hunting Database">
    
<link rel="stylesheet"
			href="huntingDatabase.css"
			media="screen">

<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->
    
</head>

<body id="submit">

<!-- ##########################   Navigation   ################## -->

<nav>
     <ol>
         <li><a href="homeVersionOne.php">Home</a></li>
				 <li><a href="submit.php">Submit a Trophy</a></li>
				 <li><a href="register.php">Become a Member</a></li>
				 <li><a href="trophys.php">Trophy Room</a></li>     
     </ol>
</nav>

<!-- ##########################   Header   ################## -->

<header>
</header>

<!-- ##########################   Content   ################## -->

<section id="main">
				 <h2>Submit a Trophy</h2>
				 <fieldset class="contact"> 
					<legend>Identification</legend> 
					<label class="required" for="txtMemberId">Member ID</label><input id ="txtMemberId" name="txtMemberId" class="element text medium" type="text" maxlength="255" value="Enter your Member ID" placeholder="Enter your Member ID" onfocus="this.select()"  tabindex="30"/> 
</fieldset>

					<fieldset class="listbox">
					<legend>What type of trophy is it?</legend><select name="why" size="1" tabindex="10">
					<option value="Interested">Whitetail Buck</option>
					<option value="Referred">Whitetail Doe</option>
					<option value="Returning">Moose Bull</option>
					<option value="Referred">Moose Cow</option>
					<option value="Referred">Bear Boar</option>
					<option value="Referred">Bear Sow</option>
					<option value="Referred">Turkey</option></select>
</fieldset>

					<fieldset class="location"> 
					<legend>Location Harvested in</legend> 
					<label class="required" for="txtCity">City</label><input id ="txtCity" name="txtCity" class="element text medium" type="text" maxlength="255" value="Enter the city" placeholder="Enter the city" onfocus="this.select()"  tabindex="30"/> 
				 <label class="required" for="txtState">State</label><input id ="txtState" name="txtState" class="element text medium" type="text" maxlength="255" value="Enter the state" placeholder="Enter the state" onfocus="this.select()"  tabindex="30"/> 
</fieldset>

<fieldset class="buttons"> 
					<input type="submit" id="btnSubmit" name="btnSubmit" value="Register" tabindex="250" class="button"> 
					<input type="reset" id="butReset" name="butReset" value="Reset" tabindex="251" class="button" onclick="reSetForm()"> 
</fieldset> 
</section>

<!-- ##########################  Footer  ################## -->

<footer>
				<p>Designed by Justin McLane</p>
</footer>

</body>
</html>
