<!--
        Salix Custom Google search page
        
        Copyright 2010  George Vlahavas <vlahavas~at~gmail~dot~com></vlahavas>
        
        This program is free software; you can redistribute it and/or modify
        it under the terms of the GNU General Public License as published by
        the Free Software Foundation; either version 2 of the License, or
        (at your option) any later version.
        
        This program is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.
        
        You should have received a copy of the GNU General Public License
        along with this program; if not, write to the Free Software
        Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
        MA 02110-1301, USA.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>
	<!-- Title. TRANSLATE. -->
	<title>Αρχική Σελίδα - SalixOS</title>
	
	<!-- Heading settings -->
	<?php
	require("../heading.html");
	?>

</head>

<body>

	<!-- Links. TRANSLATE. -->
	<ul id="salixLinks">
	<li class="left"><a href="http://www.salixos.org">Αρχική Σελίδα</a></li>
	<li class="left"><a href="http://www.salixos.org/download.html">Λήψη</a></li>
	<li class="left"><a href="http://forum.salixos.org">Forum</a></li>
	<li class="left"><a href="http://webchat.freenode.net/?randomnick=1&channels=salix&prompt=1">Κανάλι IRC</a></li>
	</ul>
	
	<!-- Flags -->
	<?php
	require("../flags.html");
	?>
	
	<!-- SalixOS banner -->
	<?php
	require("../banner.html");
	?>
		
	<!-- Search box -->
	<?php
	require("../searchbox.html");
	?>
	
	<!-- Footer -->
	<?php
	require("../footer.html");
	?>

</body>
</html>
