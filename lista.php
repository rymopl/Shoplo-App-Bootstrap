<?php include('header.php'); ?>

<div class="app-container">
	<div class="app-row">
		<header class="page-header app-span-12">
			<div class="app-row">
				<div class="app-span-6">
					<h1 class="page-title">Tytul appki</h1>
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
	<div class="app-row">
	<div class="app-span-12">
		<table class="table tb-bordered">
			<thead>
	            <tr>
	            	<th></th>
	                <th>#</th>
	                <th>Nazwa kampanii</th>
	                <th>Produkt</th>
	                <th class="text-center">Aktywna</th>
	                <th class="text-center">Ilość wyświetleń</th>
	                <th class="text-center">Ilość kliknięć</th>
	                <th class="text-right"></th>
	            </tr>
            </thead>
            <tbody id="campaignList">
			<tr>
				<td><span class="glyphicon icon-radio-button status status-ok "></td>
				<td>1</td>
				<td><strong>test nazwy kampanii</strong></td>
				<td>
					<span class="thumb-40">
					<img src="img/vert.jpg">
					</span>
				</td>
				<td class="text-center">
					<div class="checkbox">
						<input type="checkbox" name="active" id="active2" data-map-id="2">
						<label for="active2"></label>
					</div>
				</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-right">
					<a class="" href="http://local.crossselling.shoploapp.com/edit/2"><span class="glyphicon icon-note action-link"></span></a>
					<a class="" onclick="if( confirm('Czy na pewno chcesz usunąć tą kampanię?') ){ window.location='http://local.crossselling.shoploapp.com/delete/2'};" href="#"><span class="glyphicon icon-trash action-link"></span></a>
				</td>
			</tr>
			<tr>
				<td><span class="glyphicon icon-radio-button status status-pending"></td>
				<td>1</td>
				<td><strong>test nazwy kampanii</strong></td>
				<td>
					<span class="thumb-40">
					<img src="img/vert.jpg">
					</span>
				</td>
				<td class="text-center">
					<div class="checkbox">
						<input type="checkbox" name="active" id="active2" data-map-id="2">
						<label for="active2"></label>
					</div>
				</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-right">
					<a class="" href="http://local.crossselling.shoploapp.com/edit/2"><span class="glyphicon icon-note action-link"></span></a>
					<a class="" onclick="if( confirm('Czy na pewno chcesz usunąć tą kampanię?') ){ window.location='http://local.crossselling.shoploapp.com/delete/2'};" href="#"><span class="glyphicon icon-trash action-link"></span></a>
				</td>
			</tr>
			<tr>
				<td><span class="glyphicon icon-radio-button status status-alert"></td>
				<td>1</td>
				<td><strong>test nazwy kampanii</strong></td>
				<td>
					<span class="thumb-40">
					<img src="img/hor.png">
					</span>
				</td>
				<td class="text-center">
					<div class="checkbox">
						<input type="checkbox" name="active" id="active2" data-map-id="2">
						<label for="active2"></label>
					</div>
				</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-right">
					<a class="" href="http://local.crossselling.shoploapp.com/edit/2"><span class="glyphicon icon-note action-link"></span></a>
					<a class="" onclick="if( confirm('Czy na pewno chcesz usunąć tą kampanię?') ){ window.location='http://local.crossselling.shoploapp.com/delete/2'};" href="#"><span class="glyphicon icon-trash action-link"></span></a>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
	</div>
</div>