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
	
	
	<form id="campaignForm" method="post" action="http://local.crossselling.shoploapp.com/campaign">
            <div class="app-row app-table-look">
                <div class="app-span-12 app-table-tr">
                    <div class="app-row">
                        <div class="app-span-3 section-header">
                            <h2 class="">Ustawienia ogólne</h2>
                            <p>Opisz sprzedawany produkt jak najdokładniej.</p>
                        </div>
                        <div class="app-span-9 horizontal-form">
                            <div class="app-row">
                                <div class="form-group app-span-12 app-table-td">
	                                <div class="app-row">
	                                    <label for="campaignName" class="app-span-7">Nazwa kampanii</label>
	                                    <div class="app-span-5">
	                                        <input type="text" name="campaignName" placeholder="Moja kampania" id="campaignName" class="form-control">
	                                    </div>
	                                </div>
                                </div>
                                <div class="form-group app-span-12 app-table-td">
	                                <div class="app-row">
	                                    <label for="campaignTitle" class="app-span-7">Nagłówek kampanii</label>
	                                    <div class="app-span-5">
	                                        <input type="text" name="campaignTitle" placeholder="Zobacz jakie inne produkty były kupowane z tym produktem" id="campaignTitle" class="form-control">
	                                    </div>
	                                </div>
                                </div>
                                <div class="form-group app-span-12 app-table-td">
                                	<div class="app-row">
	                                    <label for="campaignDescription" class="app-span-7">Opis oferty</label>
	                                    <div class="app-span-5">
	                                        <textarea rows="3" name="campaignDescription" id="campaignDescription" class="form-control"></textarea>
	                                    </div>
                                	</div>
                                </div>
                                <div class="form-group app-span-12 app-table-td">
                                	<div class="app-row">
	                                    <label for="active" class="app-span-7">Kampania aktywna</label>
	                                    <div class="checkbox app-span-5">
	                                    	<div class="pull-right">
	                                        <input type="checkbox" name="active" checked="checked" id="active">
	                                        <label for="active"></label>
	                                        </div>
	                                    </div>
                                	</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-span-12 app-table-tr">
                    <div class="app-row">
                        <div class="app-span-3 section-header">
                            <h2>Wybierz produkt do którego chcesz utworzyć kompanię</h2>
                             <p>Te informacje pojawiają się w sklepie w zależności od wybranego szablonu.</p>
                             <p>Np. krótki opis może pojawiać się na stronie listy produktów.</p>
                        </div>
                        <div class="app-span-9 horizontal-form">
                            <div class="app-row">
                                <div class="form-group app-span-12 app-table-td">
	                                <div class="app-row">
	                                    <label for="campaignName" class="app-span-7">Nazwa kampanii</label>
	                                    <div class="app-span-5">
	                                        <input type="text" name="campaignName" placeholder="Moja kampania" id="campaignName" class="form-control">
	                                    </div>
	                                </div>
                                </div>
                                <div class="form-group app-span-12 app-table-td">
	                                <div class="app-row">
	                                    <label for="campaignTitle" class="app-span-7">Nagłówek kampanii</label>
	                                    <div class="app-span-5">
	                                        <input type="text" name="campaignTitle" placeholder="Zobacz jakie inne produkty były kupowane z tym produktem" id="campaignTitle" class="form-control">
	                                    </div>
	                                </div>
                                </div>
                                <div class="form-group app-span-12 app-table-td">
                                	<div class="app-row">
	                                    <label for="campaignDescription" class="app-span-7">Opis oferty</label>
	                                    <div class="app-span-5">
	                                        <textarea rows="3" name="campaignDescription" id="campaignDescription" class="form-control"></textarea>
	                                    </div>
                                	</div>
                                </div>
                                <div class="form-group app-span-12 app-table-td">
                                	<div class="app-row">
	                                    <label for="active" class="app-span-7">Kampania aktywna</label>
	                                    <div class="checkbox app-span-5">
	                                    	<div class="pull-right">
	                                        <input type="checkbox" name="active" checked="checked" id="active">
	                                        <label for="active"></label>
	                                        </div>
	                                    </div>
                                	</div>
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