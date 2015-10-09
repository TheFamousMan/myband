<header>
	<h1 href="?do=default">Garfield</h1>

	<nav>
		<ul>
			<li {if $curr_page eq 'default'}class="selected"{/if}><a href="?do=default">Home</a></li>
			<li {if $curr_page eq 'about'}class="selected"{/if}><a href="?do=about">About</a></li>
			<li {if $curr_page eq 'news'}class="selected"{/if}><a href="?do=news">News</a></li>
			<li {if $curr_page eq 'contact'}class="selected"{/if}><a href="?do=contact">Contact</a></li>
		</ul>
	</nav>
</header>