<?php require_once('includes/top.php'); ?>
<div class="container">

	<h1>Form</h1>
	
	<h3>Form controls</h3>
	<form>
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	</div>
	<div class="form-group">
		<label for="exampleSelect1">Example select</label>
		<select class="form-control" id="exampleSelect1">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleSelect2">Example multiple select</label>
		<select multiple class="form-control" id="exampleSelect2">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleTextarea">Example textarea</label>
		<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleInputFile">File input</label>
		<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
		<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
	</div>
	<fieldset class="form-group">
		<legend>Radio buttons</legend>
		<div class="radio">
		<label>
			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
			Option one is this and that&mdash;be sure to include why it's great
		</label>
		</div>
		<div class="radio">
		<label>
			<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			Option two can be something else and selecting it will deselect option one
		</label>
		</div>
		<div class="radio disabled">
		<label>
			<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
			Option three is disabled
		</label>
		</div>
	</fieldset>
	<div class="checkbox">
		<label>
		<input type="checkbox"> Check me out
		</label>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<h3>Textual inputs</h3>

	<div class="form-group row">
	<label for="example-text-input" class="col-xs-2 col-form-label">Text</label>
	<div class="col-xs-10">
		<input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-search-input" class="col-xs-2 col-form-label">Search</label>
	<div class="col-xs-10">
		<input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-email-input" class="col-xs-2 col-form-label">Email</label>
	<div class="col-xs-10">
		<input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-url-input" class="col-xs-2 col-form-label">URL</label>
	<div class="col-xs-10">
		<input class="form-control" type="url" value="http://getbootstrap.com" id="example-url-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
	<div class="col-xs-10">
		<input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
	<div class="col-xs-10">
		<input class="form-control" type="password" value="hunter2" id="example-password-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-number-input" class="col-xs-2 col-form-label">Number</label>
	<div class="col-xs-10">
		<input class="form-control" type="number" value="42" id="example-number-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-datetime-local-input" class="col-xs-2 col-form-label">Date and time</label>
	<div class="col-xs-10">
		<input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-date-input" class="col-xs-2 col-form-label">Date</label>
	<div class="col-xs-10">
		<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-month-input" class="col-xs-2 col-form-label">Month</label>
	<div class="col-xs-10">
		<input class="form-control" type="month" value="2011-08" id="example-month-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-week-input" class="col-xs-2 col-form-label">Week</label>
	<div class="col-xs-10">
		<input class="form-control" type="week" value="2011-W33" id="example-week-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-time-input" class="col-xs-2 col-form-label">Time</label>
	<div class="col-xs-10">
		<input class="form-control" type="time" value="13:45:00" id="example-time-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-color-input" class="col-xs-2 col-form-label">Color</label>
	<div class="col-xs-10">
		<input class="form-control" type="color" value="#563d7c" id="example-color-input">
	</div>
	</div>

	<h3>Inline forms</h3>

	<form class="form-inline">
	<div class="form-group">
		<label for="exampleInputName2">Name</label>
		<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail2">Email</label>
		<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
	</div>
	<button type="submit" class="btn btn-primary">Send invitation</button>
	</form>

	<h3>Hidden labels</h3>

	<form class="form-inline">
	<div class="form-group">
		<label class="sr-only" for="exampleInputEmail3">Email address</label>
		<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
	</div>
	<div class="form-group">
		<label class="sr-only" for="exampleInputPassword3">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
	</div>
	<div class="form-check">
		<label class="form-check-label">
		<input class="form-check-input" type="checkbox"> Remember me
		</label>
	</div>
	<button type="submit" class="btn btn-primary">Sign in</button>
	</form>

	<form class="form-inline">
	<div class="form-group">
		<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
		<div class="input-group">
		<div class="input-group-addon">$</div>
		<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
		<div class="input-group-addon">.00</div>
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Transfer cash</button>
	</form>

	<h3>Using the Grid</h3>

	<form>
		<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
		</div>
		</div>
		<div class="form-group row">
		<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
		</div>
		</div>
		<fieldset class="form-group row">
		<legend class="col-form-legend col-sm-2">Radios</legend>
		<div class="col-sm-10">
			<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
				Option one is this and that&mdash;be sure to include why it's great
			</label>
			</div>
			<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
				Option two can be something else and selecting it will deselect option one
			</label>
			</div>
			<div class="form-check disabled">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
				Option three is disabled
			</label>
			</div>
		</div>
		</fieldset>
		<div class="form-group row">
		<label class="col-sm-2">Checkbox</label>
		<div class="col-sm-10">
			<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox"> Check me out
			</label>
			</div>
		</div>
		</div>
		<div class="form-group row">
		<div class="offset-sm-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Sign in</button>
		</div>
		</div>
	</form>

	<h3>Checkboxes and radios</h3>

	<div class="form-check">
		<label class="form-check-label">
			<input class="form-check-input" type="checkbox" value="">
			Option one is this and that&mdash;be sure to include why it's great
		</label>
		</div>
		<div class="form-check disabled">
		<label class="form-check-label">
			<input class="form-check-input" type="checkbox" value="" disabled>
			Option two is disabled
		</label>
	</div>

	<div class="form-check">
	<label class="form-check-label">
		<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
		Option one is this and that&mdash;be sure to include why it's great
	</label>
	</div>
	<div class="form-check">
	<label class="form-check-label">
		<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
		Option two can be something else and selecting it will deselect option one
	</label>
	</div>
	<div class="form-check disabled">
	<label class="form-check-label">
		<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
		Option three is disabled
	</label>
	</div>

	<h3>Static controls</h3>

	<form>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
		<p class="form-control-static">email@example.com</p>
		</div>
	</div>
	<div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
		<div class="col-sm-10">
		<input type="password" class="form-control" id="inputPassword" placeholder="Password">
		</div>
	</div>
	</form>

	<h3>Disabled states</h3>

	<form>
	<fieldset disabled>
		<div class="form-group">
		<label for="disabledTextInput">Disabled input</label>
		<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
		</div>
		<div class="form-group">
		<label for="disabledSelect">Disabled select menu</label>
		<select id="disabledSelect" class="form-control">
			<option>Disabled select</option>
		</select>
		</div>
		<div class="checkbox">
		<label>
			<input type="checkbox"> Can't check this
		</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</fieldset>
	</form>

	<h3>Control sizing</h3>

	<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
	<input class="form-control" type="text" placeholder="Default input">
	<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">

	<select class="form-control form-control-lg">
	<option>Large select</option>
	</select>
	<select class="form-control">
	<option>Default select</option>
	</select>
	<select class="form-control form-control-sm">
	<option>Small select</option>
	</select>

	<h3>Column sizing</h3>

	<div class="row">
	<div class="col-xs-2">
		<input type="text" class="form-control" placeholder=".col-xs-2">
	</div>
	<div class="col-xs-3">
		<input type="text" class="form-control" placeholder=".col-xs-3">
	</div>
	<div class="col-xs-4">
		<input type="text" class="form-control" placeholder=".col-xs-4">
	</div>
	</div>

	<h3>Help text</h3>

	<label for="inputPassword5">Password</label>
	<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
	<p id="passwordHelpBlock" class="form-text text-muted">
	Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
	</p>

	<form class="form-inline">
	<div class="form-group">
		<label for="inputPassword4">Password</label>
		<input type="password" id="inputPassword4" class="form-control" aria-describedby="passwordHelpInline">
		<small id="passwordHelpInline" class="text-muted">
		Must be 8-20 characters long.
		</small>
	</div>
	</form>

	<h3>Validation</h3>

	<div class="form-group has-success">
	<label class="col-form-label" for="inputSuccess1">Input with success</label>
	<input type="text" class="form-control form-control-success" id="inputSuccess1">
	<div class="form-control-feedback">Success! You've done it.</div>
	<small class="form-text text-muted">Example help text that remains unchanged.</small>
	</div>
	<div class="form-group has-warning">
	<label class="col-form-label" for="inputWarning1">Input with warning</label>
	<input type="text" class="form-control form-control-warning" id="inputWarning1">
	<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
	<small class="form-text text-muted">Example help text that remains unchanged.</small>
	</div>
	<div class="form-group has-danger">
	<label class="col-form-label" for="inputDanger1">Input with danger</label>
	<input type="text" class="form-control form-control-danger" id="inputDanger1">
	<div class="form-control-feedback">Shit, that username's taken. Try another?</div>
	<small class="form-text text-muted">Example help text that remains unchanged.</small>
	</div>

	<div class="checkbox has-success">
	<label>
		<input type="checkbox" id="checkboxSuccess" value="option1">
		Checkbox with success
	</label>
	</div>
	<div class="checkbox has-warning">
	<label>
		<input type="checkbox" id="checkboxWarning" value="option1">
		Checkbox with warning
	</label>
	</div>
	<div class="checkbox has-danger">
	<label>
		<input type="checkbox" id="checkboxDanger" value="option1">
		Checkbox with danger
	</label>
	</div>

	<h3>Select menu</h3>

	<select class="custom-select">
	<option selected>Open this select menu</option>
	<option value="1">One</option>
	<option value="2">Two</option>
	<option value="3">Three</option>
	</select>

	<h3>File browser</h3>

	<label class="custom-file">
	<input type="file" id="file" class="custom-file-input">
	<span class="custom-file-control"></span>
	</label>


	
	<hr/>
	
	<h1>Raw tags</h1>
	<h3>Elements</h3>
	<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form -->
	<table>
		<thead>
			<tr>
				<th scope="col">Element</th>
				<th scope="col">Example</th>
				<th scope="col">Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>&lt;button&gt;</code></td>
				<td>
					<button name="button">Click me</button>
				</td>
				<td>The <code>button</code> element represents a clickable button.</td>
			</tr>
			<tr>
				<td><code>&lt;datalist&gt;</code></td>
				<td>
					<input list="browsers" />
					<datalist id="browsers">
						<option value="Chrome">
						<option value="Firefox">
						<option value="Internet Explorer">
						<option value="Opera">
						<option value="Safari">
					</datalist>
				</td>
				<td>The <code>datalist</code> element contains a set of <code>&lt;option&gt;</code> elements that represent the possible options for the value of other form elements.</td>
			</tr>
			<tr>
				<td><code>&lt;fieldset&gt;</code></td>
				<td rowspan="3">
					<form action="test.php" method="post">
						<fieldset>
							<input type="text" name="input" placeholder="placeholder">
						</fieldset>
					</form>
				</td>
				<td>The fieldset is used to group several form elements within a form.</td>
			</tr>
			<tr>
				<td><code>&lt;form&gt;</code></td>
				<td>The <code>form</code> element represents a section of document that contains interactive element that enables a user to submit information to a web server.</td>
			</tr>
			<tr>
				<td><code>&lt;input&gt;</code></td>
				<td>The&nbsp; <code>input</code> element is used to create interactive controls for forms.</td>
			</tr>
			<tr>
				<td><code>&lt;label&gt;</code></td>
				<td>
					<label>label</label>
				</td>
				<td>The <code>label</code> element represents a caption for an item in a user interface</td>
			</tr>
			<tr>
				<td><code>&lt;legend&gt;</code></td>
				<td>
					<legend>legend</legend>
				</td>
				<td>The <code>legend</code> element represents a caption for the content of its parent <code>&lt;fieldset&gt;</code>.</td>
			</tr>
			<tr>
				<td><code>&lt;meter&gt;</code></td>
				<td>
					<meter min="200" max="500" value="350">350 degrees</meter>
				</td>
				<td>The <code>meter</code> element&nbsp; represents either a scalar value within a known range or a fractional value.</td>
			</tr>
			<tr>
				<td><code>&lt;select&gt;</code></td>
				<td rowspan="3">
					<select>
						<optgroup label="Group 1">
							<option>Option 1.1</option>
						</optgroup> 
						<optgroup label="Group 2">
							<option>Option 2.1</option>
							<option>Option 2.2</option>
						</optgroup>
						<optgroup label="Group 3" disabled>
							<option>Option 3.1</option>
							<option>Option 3.2</option>
							<option>Option 3.3</option>
						</optgroup>
					</select>
				</td>
				<td>The <code>select</code> element represents a control that presents a menu of options.</td>
			</tr>
			<tr>
				<td><code>&lt;optgroup&gt;</code></td>
				<td>the <code>optgroup</code> element creates a group of options within a <code>&lt;select&gt;</code> element.</td>
			</tr>
			<tr>
				<td><code>&lt;option&gt;</code></td>
				<td>the HTML<em> </em><code>option<em> </em></code>element is used to create a control representing an item within a <code>&lt;select&gt;</code>, an <code>&lt;optgroup&gt;</code> or a <code>&lt;datalist&gt;</code> element.</td>
			</tr>
			<tr>
				<td><code>&lt;output&gt;</code></td>
				<td>
					<form oninput="result.value=parseInt(a.value)+parseInt(b.value)">
						<input type="range" name="b" value="50" /> +
						<input type="number" name="a" value="10" /> =
						<output name="result"></output>
					</form>
				</td>
				<td>The <code>output</code> element represents the result of a calculation.</td>
			</tr>
			<tr>
				<td><code>&lt;progress&gt;</code></td>
				<td>
					<progress value="70" max="100">70 %</progress>
				</td>
				<td>The <code>progress</code> element is used to view the completion progress of a task.</td>
			</tr>
			<tr>
				<td><code>&lt;textarea&gt;</code></td>
				<td>
					<textarea name="textarea">Write something here</textarea>
				</td>
				<td>The <code>textarea</code> element represents a multi-line plain-text editing control.</td>
			</tr>
		</tbody>
	</table>
	
	<h3>Inputs</h3>
	<table>
		<tr>
			<th>type</th>
			<th>example</th>
		</tr>
		<tr>
			<td>button</td>
			<td><input type="button" value="input"/></td>
		</tr>
		<tr>
			<td>checkbox</td>
			<td><input type="checkbox" name="" value=""/></td>
		</tr>
		<tr>
			<td>file</td>
			<td><input type="file" name="" value=""/></td>
		</tr>
		<tr>
			<td>hidden</td>
			<td><input type="hidden" name="" value=""/></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" value="password"/></td>
		</tr>
		<tr>
			<td>radio</td>
			<td><input type="radio"/></td>
		</tr>
		<tr>
			<td>reset</td>
			<td><input type="reset" value="reset"/></td>
		</tr>
		<tr>
			<td>submit</td>
			<td><input type="submit" value="submit"/></td>
		</tr>
		<tr>
			<td>text</td>
			<td><input type="text" value="text"/></td>
		</tr>
	</table>
	
	<h3>HTML5 Inputs</h3>
	<table>
		<tr>
			<th>type</th>
			<th>example</th>
		</tr>
		<tr>
			<td>color</td>
			<td><input type="color" value="#000000"/></td>
		</tr>
		<tr>
			<td>date</td>
			<td><input type="date" value="1970-01-01"/></td>
		</tr>
		<tr>
			<td>datetime</td>
			<td><input type="datetime" value="1914-12-20 08:30:45.687"/></td>
		</tr>
		<tr>
			<td>datetime-local</td>
			<td><input type="datetime-local" value="1970-01-01T00:00"/></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input type="email" name="email"/></td>
		</tr>
		<tr>
			<td>month</td>
			<td><input type="month" value="1970-01"/></td>
		</tr>
		<tr>
			<td>number</td>
			<td><input type="number" value="5" max="10" min="0"/></td>
		</tr>
		<tr>
			<td>range</td>
			<td><input type="range" value="10"/></td>
		</tr>
		<tr>
			<td>search</td>
			<td><input type="search"/></td>
		</tr>
		<tr>
			<td>time</td>
			<td><input type="time"/></td>
		</tr>
		<tr>
			<td>url</td>
			<td><input type="url"/></td>
		</tr>
		<tr>
			<td>tel</td>
			<td><input type="tel"/></td>
		</tr>
		<tr>
			<td>week</td>
			<td><input type="week" value="1970-W01"/></td>
		</tr>
	</table>
	</div>
<?php require_once('includes/bottom.php'); ?>