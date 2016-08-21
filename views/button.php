<?php @include_once("includes/top.php"); ?>

<div class="container">
	<h1>Button</h1>

	<h3>Button tags</h3>
	<a class="btn btn-secondary" href="#" role="button">Link</a>
	<button class="btn btn-secondary" type="submit">Button</button>
	<input class="btn btn-secondary" type="button" value="Input"/>
	<input class="btn btn-secondary" type="submit" value="Submit"/>
	
	<h3>Options</h3>
	<!-- Standard button -->
	<button type="button" class="btn">No class</button>
	
	<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
	<button type="button" class="btn btn-primary">Primary</button>

	<!-- Secondary, outline button -->
	<button type="button" class="btn btn-secondary">Secondary</button>

	<!-- Indicates a successful or positive action -->
	<button type="button" class="btn btn-success">Success</button>

	<!-- Contextual button for informational alert messages -->
	<button type="button" class="btn btn-info">Info</button>

	<!-- Indicates caution should be taken with this action -->
	<button type="button" class="btn btn-warning">Warning</button>

	<!-- Indicates a dangerous or potentially negative action -->
	<button type="button" class="btn btn-danger">Danger</button>

	<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
	<button type="button" class="btn btn-link">Link</button>

	<h3>Outline buttons</h3>

	<button type="button" class="btn btn-outline-primary">Primary</button>
	<button type="button" class="btn btn-outline-secondary">Secondary</button>
	<button type="button" class="btn btn-outline-success">Success</button>
	<button type="button" class="btn btn-outline-info">Info</button>
	<button type="button" class="btn btn-outline-warning">Warning</button>
	<button type="button" class="btn btn-outline-danger">Danger</button>

	<h3>Sizes</h3>
	<p>
		<button type="button" class="btn btn-primary btn-lg">Large button</button>
		<button type="button" class="btn btn-secondary btn-lg">Large button</button>
	</p>
	<p>
		<button type="button" class="btn btn-primary">Default button</button>
		<button type="button" class="btn btn-secondary">Secondary button</button>
	</p>
	<p>
		<button type="button" class="btn btn-primary btn-sm">Small button</button>
		<button type="button" class="btn btn-secondary btn-sm">Small button</button>
	</p>

	<button type="button" class="btn btn-primary btn-block">Block level button</button>
	<button type="button" class="btn btn-secondary btn-block">Block level button</button>

	<h3>All button states</h3>
	<table>
		<thead>
			<tr>
				<th>normal</th>
				<th>hover</th>
				<th>active</th>
				<th>disabled</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><button type="button" class="btn btn-secondary">secondary</button></td>
				<td><button type="button" class="btn btn-secondary hover">secondary</button></td>
				<td><button type="button" class="btn btn-secondary active">secondary</button></td>
				<td><button type="button" class="btn btn-secondary" disabled="disabled">secondary</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-primary">Primary</button></td>
				<td><button type="button" class="btn btn-primary hover">Primary</button></td>
				<td><button type="button" class="btn btn-primary active">Primary</button></td>
				<td><button type="button" class="btn btn-primary" disabled="disabled">Primary</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-success">Success</button></td>
				<td><button type="button" class="btn btn-success hover">Success</button></td>
				<td><button type="button" class="btn btn-success active">Success</button></td>
				<td><button type="button" class="btn btn-success" disabled="disabled">Success</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-info">Info</button></td>
				<td><button type="button" class="btn btn-info hover">Info</button></td>
				<td><button type="button" class="btn btn-info active">Info</button></td>
				<td><button type="button" class="btn btn-info" disabled="disabled">Info</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-warning">Warning</button></td>
				<td><button type="button" class="btn btn-warning hover">Warning</button></td>
				<td><button type="button" class="btn btn-warning active">Warning</button></td>
				<td><button type="button" class="btn btn-warning" disabled="disabled">Warning</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-danger">Danger</button></td>
				<td><button type="button" class="btn btn-danger hover">Danger</button></td>
				<td><button type="button" class="btn btn-danger active">Danger</button></td>
				<td><button type="button" class="btn btn-danger" disabled="disabled">Danger</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-link">Link</button></td>
				<td><button type="button" class="btn btn-link hover">Link</button></td>
				<td><button type="button" class="btn btn-link active">Link</button></td>
				<td><button type="button" class="btn btn-link" disabled="disabled">Link</button></td>
			</tr>
		</tbody>
	<table>
	
	<h3>All button states with anchor tag</h3>
	<table>
		<thead>
			<tr>
				<th>normal</th>
				<th>hover</th>
				<th>active</th>
				<th>disabled</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a class="btn btn-secondary" href="#" role="button">secondary</a></td>
				<td><a class="btn btn-secondary hover" href="#" role="button">secondary</a></td>
				<td><a class="btn btn-secondary active" href="#" role="button">secondary</a></td>
				<td><a class="btn btn-secondary" href="#" role="button" disabled="disabled">secondary</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-primary" href="#" role="button">Primary</a></td>
				<td><a class="btn btn-primary hover" href="#" role="button">Primary</a></td>
				<td><a class="btn btn-primary active" href="#" role="button">Primary</a></td>
				<td><a class="btn btn-primary" href="#" role="button" disabled="disabled">Primary</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-success" href="#" role="button">Success</a></td>
				<td><a class="btn btn-success hover" href="#" role="button">Success</a></td>
				<td><a class="btn btn-success active" href="#" role="button">Success</a></td>
				<td><a class="btn btn-success" href="#" role="button" disabled="disabled">Success</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-info" href="#" role="button">Info</a></td>
				<td><a class="btn btn-info hover" href="#" role="button">Info</a></td>
				<td><a class="btn btn-info active" href="#" role="button">Info</a></td>
				<td><a class="btn btn-info" href="#" role="button" disabled="disabled">Info</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-warning" href="#" role="button">Warning</a></td>
				<td><a class="btn btn-warning hover" href="#" role="button">Warning</a></td>
				<td><a class="btn btn-warning active" href="#" role="button">Warning</a></td>
				<td><a class="btn btn-warning" href="#" role="button" disabled="disabled">Warning</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-danger" href="#" role="button">Danger</a></td>
				<td><a class="btn btn-danger hover" href="#" role="button">Danger</a></td>
				<td><a class="btn btn-danger active" href="#" role="button">Danger</a></td>
				<td><a class="btn btn-danger" href="#" role="button" disabled="disabled">Danger</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-link" href="#" role="button">Link</a></td>
				<td><a class="btn btn-link hover" href="#" role="button">Link</a></td>
				<td><a class="btn btn-link active" href="#" role="button">Link</a></td>
				<td><a class="btn btn-link" href="#" role="button" disabled="disabled">Link</a></td>
			</tr>
		</tbody>
	<table>
	
	<h3>Toggle states</h3>

	<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
	Single toggle
	</button>

	<h3>Checkbox and radio buttons</h3>

	<p>
		<div class="btn-group" data-toggle="buttons">
			<label class="btn btn-primary active">
				<input type="checkbox" checked autocomplete="off"> Checkbox 1 (pre-checked)
			</label>
			<label class="btn btn-primary">
				<input type="checkbox" autocomplete="off"> Checkbox 2
			</label>
			<label class="btn btn-primary">
				<input type="checkbox" autocomplete="off"> Checkbox 3
			</label>
		</div>
	</p>

	<p>
		<div class="btn-group" data-toggle="buttons">
			<label class="btn btn-primary active">
				<input type="radio" name="options" id="option1" autocomplete="off" checked> Radio 1 (preselected)
			</label>
			<label class="btn btn-primary">
				<input type="radio" name="options" id="option2" autocomplete="off"> Radio 2
			</label>
			<label class="btn btn-primary">
				<input type="radio" name="options" id="option3" autocomplete="off"> Radio 3
			</label>
		</div>
	</p>

	<p>
		<div aria-label="Default button group" role="group" class="btn-group">
			<button class="btn btn-secondary" type="button">Left</button>
			<button class="btn btn-secondary" type="button">Middle</button>
			<button class="btn btn-secondary" type="button">Right</button>
		</div>
	</p>
	
	<p>
		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			<button type="button" class="btn btn-secondary">1</button>
			<button type="button" class="btn btn-secondary">2</button>

			<div class="btn-group" role="group">
				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Dropdown
				</button>
				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
				<a class="dropdown-item" href="#">Dropdown link</a>
				<a class="dropdown-item" href="#">Dropdown link</a>
				</div>
			</div>
		</div>
	</p>
</div>

<?php require_once('includes/bottom.php'); ?>