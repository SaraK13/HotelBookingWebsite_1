<?php
		function getRequestedPage()
		{
			if (isset($_GET["page"]))
			{
				return $_GET["page"];
			}
		}

// $page = getRequestedPage();

// include "../".$page;