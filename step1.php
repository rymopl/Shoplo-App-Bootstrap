<?php include('header.php'); ?>

<div class="app-container">
	<div class="app-row">
		<div class="app-span-9">
		<h2>Ustawienia aukcji</h2>
		<form action="" class="horizontal-form">
				<div class="form-group app-row">
					<label class="app-span-4" for="profile_name">Nazwa profilu</label>
					<div class="app-span-8">
						<input type="email" class="form-control" id="profile_name" placeholder="Mój profil">
					</div>
				</div>
				<div class="form-group app-row">
					<label class="app-span-4" for="auction_title">Tytuł aukcji</label>
					<div class="app-span-8">
						<input type="text" class="form-control" id="auction_title" placeholder="Tytuł aukcji">
					</div>
				</div>
				<div class="form-group app-row">
					<label class="app-span-4" for="duration">Czas trwania aukcji</label>
					<div class="app-span-8">
						<select name="duration"  class="form-control" id="duration">
							<option value="">18</option>
							<option value="">19</option>
							<option value="">20</option>
							<option value="">21</option>
						</select>
					</div>
				</div>
				<div class="form-group app-row">
					<label class="app-span-4" for="duration">Promocja produktu</label>
					<div class="app-span-8">
					<div class="checkbox">
						<label>
					      	<input type="checkbox text-right"> tak
					    </label>
					</div>
					</div>
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-primary">Dalej</button>
				</div>
			</form>
		
		</div>
		<div class="app-span-3">
			<nav class="side-nav">
				<ul>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Twoje aukcje</a></li>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Twoje profile</a></li>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Dodaj nowy profil</a></li>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Mapowanie kategorii</a></li>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Wystaw aukcje</a></li>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Importuj produkty</a></li>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Wygląd aplikacji</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>