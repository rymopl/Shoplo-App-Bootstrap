<?php include('header.php'); ?>
<div class="app-container">
	<h1 class="">Generator kampanii cross selling</h1>
	
	
	
	<div class="app-row app-table-look">
		<div class="app-span-12 app-table-tr">
			<div class="app-row">
	            <div class="app-span-3">
	                <h2>Ustawienia ogólne</h2>
	            </div>
	            <div class="app-span-9 horizontal-form">
	            	<div class="app-row">
		                <div class="form-group app-row app-table-td">
		                    <label for="campaignName" class="app-span-4">Nazwa kampanii</label>
		                    <div class="app-span-8">
		                        <input type="text" name="campaignName" placeholder="Moja kampania" id="campaignName" class="form-control">
		                    </div>
		                </div>
		                <div class="form-group app-row app-table-td">
		                    <label for="campaignTitle" class="app-span-4">Nagłówek kampanii</label>
		                    <div class="app-span-8">
		                        <input type="text" name="campaignTitle" placeholder="Zobacz jakie inne produkty były kupowane z tym produktem" id="campaignTitle" class="form-control">
		                    </div>
		                </div>
		                <div class="form-group app-row  app-table-td">
		                    <label for="campaignDescription" class="app-span-4">Opis oferty</label>
		                    <div class="app-span-8">
		                        <textarea rows="3" name="campaignDescription" id="campaignDescription" class="form-control"></textarea>
		                    </div>
		                </div>
		                <div class="form-group app-row app-table-td">
		                    <label for="active" class="app-span-4">Kampania aktywna</label>
		                    <div class="checkbox app-span-8">
		                        <label>
		                            <input id="active" name="active" type="checkbox">
		                        </label>
		                    </div>
		                </div>
	            	</div>
	            </div>
	        </div>
		</div>
		<div class="app-span-12 app-table-tr">
	        <div class="app-row">
				<div class="app-span-3 ">
					<h2>Wybierz produkt dla którego ma zostać utworzona kampania</h2>
				</div>
				<div class="app-span-9">
					<div class="app-row app-table-td">
						<div class="app-span-12">
							<h3 class="label">Sugerowane produkty (top sellers)</h3>
						</div>
						<div id="upsell" class="app-span-12 form-group text-center">
							<div class="app-row">
					            <div product_id="2" class="app-span-4 chooseProduct">
					            	<figure class="product-box">
						                <img class="img" src="http://static.shoplo.com/8515/products/th640/aaac/2-image-1.jpg" />
						                <button class="btn btn-primary btn-disable btn-sm">Wybierz</button>
						                <p>GLAMOUR BABE SUKIENKA - CZERWONY 6226-2</p>
					            	</figure>
					            </div>
					            <div product_id="3138" class="app-span-4 chooseProduct">
					            	<figure class="product-box">
					                <img class="img" src="http://static.shoplo.com/8515/products/th640/aaai/986-image-1.jpg" />
					                <button class="btn btn-primary btn-disable btn-sm">Wybierz</button>
					                <p>4101-3 Sukienka bez ramiączek z usztywnianymi miseczkami ze ...</p>
					            	</figure>
					            </div>
					            <div product_id="4" class="app-span-4 chooseProduct">
					            	<figure class="product-box">
						                <img class="img" src="http://static.shoplo.com/8515/products/th640/aaau/20-image-1.jpg" />
						                <button class="btn btn-primary btn-disable btn-sm">Wybierz</button>
						                <p>GLAMOUR BABE SUKIENKA Nina Dobrev - CZARNY 6226-1</p>
					            	</figure>
					            </div>
					            
					            <div product_id="3382" class="app-span-4 chooseProduct">
					            	<figure class="product-box">
						                <img class="img" src="http://static.shoplo.com/8515/products/th640/aaa1/1076-image-1.jpg" />
						                <button class="btn btn-primary btn-disable btn-sm">Wybierz</button>
						                <p>3604-2 Sukienka lniana na suwak typu baskinka - miętowy sorbet</p>
					            	</figure>
					            </div>
					            <div product_id="6" class="app-span-4 chooseProduct"> 
					            	<figure class="product-box">
						                <img class="img" src="http://static.shoplo.com/8515/products/th640/aaau/20-image-1.jpg" />
						                <button class="btn btn-primary btn-disable btn-sm">Wybierz</button>
						                <p>GLAMOUR BABE SUKIENKA Nina Dobrev - CZARNY 6226-1</p>
					            	</figure>
					            </div>
					            <div product_id="2654" class="app-span-4 chooseProduct">
					            	<figure class="product-box">
						                <img class="img" src="http://static.shoplo.com/8515/products/th640/aaa1/932-image-1.jpg" />
						                <button class="btn btn-primary btn-disable btn-sm">Wybierz</button>
						                <p>4217-1 Spodnie legginsy ze złotymi drobinkami - miedziany</p>
					            	</figure>
					            </div>
							</div>
			            </div>
		            </div>
				</div>
			</div>
        </div>
	</div>
</div>

<?php include('footer.php'); ?>