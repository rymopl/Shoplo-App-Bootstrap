<?php include('header.php'); ?>

<div class="app-container">
	<div class="app-row">
		<div class="app-span-9">
			<h2>Form</h2>
			<form action="">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputName">Name</label>
					<input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
				</div>
				<div class="form-group">
					<label for="exampleInputAge">Age</label>
					<select name=""  class="form-control" id="exampleInputAge">
						<option value="">18</option>
						<option value="">19</option>
						<option value="">20</option>
						<option value="">21</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputMsg">Name</label>
					<textarea class="form-control" id="exampleInputMsg" rows="3"></textarea>
				</div>
				<div class="form-group">
					<div class="checkbox">
						<label>
					      	<input type="checkbox"> Check me out
					    </label>
					</div>
				</div>
			</form>
			<h2>Form inline</h2>
			<form action="">
				<div class="app-row">
					<div class="app-span-4">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>
					<div class="app-span-4">
						<div class="form-group">
							<label for="exampleInputName">Name</label>
							<input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
						</div>
					</div>
					<div class="app-span-4"> 
						<div class="form-group">
							<label for="exampleInputAge">Age</label>
							<select name=""  class="form-control" id="exampleInputAge">
								<option value="">18</option>
								<option value="">19</option>
								<option value="">20</option>
								<option value="">21</option>
							</select>
						</div>
					</div>
				</div>
				<div class="app-row">
					<div class="app-span-4">
						<div class="form-group">
							<label for="exampleInputMsg">Name</label>
							<textarea class="form-control" id="exampleInputMsg" rows="3"></textarea>
						</div>
					</div>
					<div class="app-span-4">
						<div class="form-group">
							<div class="checkbox">
								<label>
							      	<input type="checkbox"> Check me out
							    </label>
							</div>
						</div>
					</div>
				</div>
			</form>
			
			<h2>Horizontal Form</h2>
			<form action="" class="horizontal-form">
				<div class="form-group app-row">
					<label class="app-span-2" for="exampleInputEmail1">Email address</label>
					<div class="app-span-10">
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					</div>
				</div>
				<div class="form-group app-row">
					<label class="app-span-2" for="exampleInputName">Name</label>
					<div class="app-span-10">
						<input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
					</div>
				</div>
				<div class="form-group app-row">
					<label class="app-span-2" for="exampleInputAge">Age</label>
					<div class="app-span-10">
						<select name=""  class="form-control" id="exampleInputAge">
							<option value="">18</option>
							<option value="">19</option>
							<option value="">20</option>
							<option value="">21</option>
						</select>
					</div>
				</div>
				<div class="form-group app-row">
					<label class="app-span-2" for="exampleInputMsg">Name</label>
					<div class="app-span-10">
						<textarea class="form-control" id="exampleInputMsg" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
						<label>
					      	<input type="checkbox"> Check me out
					    </label>
					</div>
				</div>
			</form>	
		</div>
		<div class="app-span-3">
			<nav class="side-nav">
				<ul>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Link 1</a></li>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Link 2</a></li>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Link 3</a></li>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Link 4</a></li>
					<li><a href="#"><span class="glyphicon icon-heart"></span> Link 5</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>


<?php include('footer.php'); ?>