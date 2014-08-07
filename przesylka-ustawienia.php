<?php include('header.php'); ?>

<div class="app-container">
	<div class="app-row">
		<header class="page-header app-span-12">
			<div class="app-row">
				<div class="app-span-6">
					<h1 class="page-title pull-left">Tytul appki</h1>
					<a href="" class="btn btn-pending"><span class="glyphicon icon-plus"></span> Dodaj</a>
				</div>
				<div class="app-span-6 filters">
					<div class="search-form pull-right">
						<input placeholder="Szukaj" type="search">
					</div>
					<a href="" class="btn btn-primary pull-right"><span class="glyphicon icon-plus"></span> Dodaj</a>
					<a href="" class="btn btn-primary pull-right"><span class="glyphicon icon-grid"></span> Filtruj</a>
					<a href="" class="btn btn-primary pull-right"><span class="glyphicon icon-house"></span> Home</a>
					
				</div>
			</div>
		</header>
	</div>
	
	
	<form id="" method="post" action="">
            <div class="app-row app-table-look">
                <div class="app-span-12 app-table-tr app-table-horizontal">
	                <div class="app-row">
		                <div class="form-group app-span-6 app-table-td">
		                	<table class="table table-small dark-header">
			                	<tr>
				                	<th>Waga</th>
				                	<th>Dług.</th>
				                	<th>Szer.</th>
				                	<th>Wys.</th>
			                	</tr>
			                	<tr>
				                	<td><input class="form-control" type="text" placeholder="kg." /></td>
				                	<td><input class="form-control" type="text" placeholder="cm" /></td>
				                	<td><input class="form-control" type="text" placeholder="cm" /></td>
				                	<td><input class="form-control" type="text" placeholder="cm" /></td>
			                	</tr>
		                	</table>
		                </div>
		                <div class="form-group app-span-6 app-table-td">
		                	<table class="table table-small dark-header">
			                	<tr>
				                	<th>Suma zamówienia:</th>
				                	<td class="text-right">112 zł</td>
			                	</tr>
			                	<tr>
				                	<th>Koszt dostawy:</th>
				                	<td class="text-right">112 zł</td>
			                	</tr>
			                	<tr>
				                	<th>Data nadania:</th>
				                	<td class="text-right">
				                	<select>
				                		<option>poniedziałek 18 czerwca do 17:00</option>
				                		<option>wtorek 18 czerwca do 17:00</option>
				                	</select>
				                	</td>
			                	</tr>
		                	</table>
		                </div>
	                </div>
                </div>
                <div class="app-span-12 app-table-tr app-table-horizontal">
	                <div class="app-row">
		                <div class="form-group app-span-6 border-right">
		                	<div class="app-row">
			                	<div class="app-span-12 app-table-tr">
				                	<div class="app-table-td">
					                	<h3 class="section-title">Odbiorca:</h3>
					                	<div class="thumb-80 pull-left">
						                	<img src="img/user80.jpg" alt="" />
					                	</div>
					                	<p>Agata Tucholska<br>Słoneczna 8<br>00-789 Warszawa<br>Polska</p>
				                	</div>
			                	</div>
			                	<div class="app-span-12 app-table-tr">
				                	<div class="app-table-td">
					                	<h3 class="section-title">Nadawca:</h3>
					                	<p>Agata Tucholska<br>Słoneczna 8<br>00-789 Warszawa<br>Polska</p>
				                	</div>
			                	</div>
		                	</div>
		                
		                </div>
		                <div class="form-group app-span-6 no-border">
		                	<div class="app-row app-span-row border-bottom">
			                	<div class="app-span-12">
				                	<div class="radio pull-left">
	                                        <input type="radio" name="a" checked="" id="a">
	                                        <label for="a"></label>  
	                                </div>
	                                <label class="pull-left" for="a">Pobranie (numer konta zostanie uzupełniony z Shoplo)</label>
			                	</div>
		                	</div>
		                	<div class="app-row app-span-row border-bottom">
			                	<div class="app-span-12">
				                	<div class="radio pull-left">
	                                        <input type="radio" name="a" checked="" id="b">
	                                        <label for="b"></label>  
	                                </div>
	                                <label class="pull-left" for="b">Pobranie (numer konta zostanie uzupełniony z Shoplo)</label>
			                	</div>
		                	</div>
		                	<div class="app-row app-span-row">
			                	<div class="app-span-12">
				                	<div class="checkbox pull-left">
	                                        <input type="checkbox" name="active" checked="checked" id="active">
	                                        <label for="active"></label>  
	                                </div>
	                                <label class="pull-left" for="active">Pobranie (numer konta zostanie uzupełniony z Shoplo)</label>
			                	</div>
		                	</div>
		                	<div class="app-row">
			                	<div class="app-span-12 app-span-row">
				                	<div class="checkbox pull-left">
	                                        <input type="checkbox" name="active1" checked="checked" id="active1">
	                                        <label for="active1"></label>  
	                                </div>
	                                <label class="pull-left" for="active1">Pobranie (numer konta zostanie uzupełniony z Shoplo)</label>
			                	</div>
		                	</div>
		                </div>
	                </div>
                </div>
            </div>
            <div class="app-row">
	            <div class="app-span-12 confirm-form">
	            	<a href="" class="btn btn-success"><span class="glyphicon icon-checked"></span>Zapisz zmiany</a>
	            	<a href="" class="btn btn-warning"><span class="glyphicon icon-ex"></span>Anuluj</a>
	            </div>
            </div>
	</form>
</div>