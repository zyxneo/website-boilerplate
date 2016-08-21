<?php require_once('includes/top.php'); ?>

<div class="container">

	<h1>Table</h1>

	
	<h3>Sortable table, .table .table-hover</h3>
	<table class="table table-hover">
		<thead>
			<tr>
				<th><a href="">#</a></th>
				<th><a href="">First Name</a></th>
				<th><a href="">Last Name</a></th>
				<th><a href="">Username</a></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Larry</td>
				<td>the Bird</td>
				<td>@twitter</td>
			</tr>
		</tbody>
	</table>
	
	<h3>.table-inverse</h3>
	<table class="table table-inverse .table-hover">
		<thead>
			<tr>
			<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>Mark</td>
			<td>Otto</td>
			<td>@mdo</td>
			</tr>
			<tr>
			<th scope="row">2</th>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>@fat</td>
			</tr>
			<tr>
			<th scope="row">3</th>
			<td>Larry</td>
			<td>the Bird</td>
			<td>@twitter</td>
			</tr>
		</tbody>
	</table>

	<h3>Striped rows</h3>

	<table class="table table-striped">
		<thead class="thead-inverse">
			<tr>
			<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>Mark</td>
			<td>Otto</td>
			<td>@mdo</td>
			</tr>
			<tr>
			<th scope="row">2</th>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>@fat</td>
			</tr>
			<tr>
			<th scope="row">3</th>
			<td>Larry</td>
			<td>the Bird</td>
			<td>@twitter</td>
			</tr>
		</tbody>
	</table>

	<h3>Small table .table-sm</h3>

	<table class="table table-sm">
		<thead>
			<tr>
			<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>Mark</td>
			<td>Otto</td>
			<td>@mdo</td>
			</tr>
			<tr>
			<th scope="row">2</th>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>@fat</td>
			</tr>
			<tr>
			<th scope="row">3</th>
			<td colspan="2">Larry the Bird</td>
			<td>@twitter</td>
			</tr>
		</tbody>
	</table>

	<h3>Contextual classes, .table</h3>

	<table class="table">
		<thead>
		<tr>
			<th>#</th>
			<th>Column heading</th>
			<th>Column heading</th>
			<th>Column heading</th>
		</tr>
		</thead>
		<tbody>
		<tr class="table-active">
			<th scope="row">1</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr>
			<th scope="row">2</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr class="table-success">
			<th scope="row">3</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr>
			<th scope="row">4</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr class="table-info">
			<th scope="row">5</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr>
			<th scope="row">6</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr class="table-warning">
			<th scope="row">7</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr>
			<th scope="row">8</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr class="table-danger">
			<th scope="row">9</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		</tbody>
	</table>

	<table class="table table-inverse">
		<thead>
		<tr>
			<th>#</th>
			<th>Column heading</th>
			<th>Column heading</th>
			<th>Column heading</th>
		</tr>
		</thead>
		<tbody>
		<tr class="bg-primary">
			<th scope="row">1</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr>
			<th scope="row">2</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr class="bg-success">
			<th scope="row">3</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr>
			<th scope="row">4</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr class="bg-info">
			<th scope="row">5</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr>
			<th scope="row">6</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr class="bg-warning">
			<th scope="row">7</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr>
			<th scope="row">8</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		<tr class="bg-danger">
			<th scope="row">9</th>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		</tbody>
	</table>
	
	<h3>Responsive tables, Table head options .thead-default, Bordered table .table-bordered</h3>

	<div class="table-responsive">
		<table class="table table-bordered">
			<thead class="thead-default">
				<tr>
					<th>#</th>
					<th>Table heading</th>
					<th>Table heading</th>
					<th>Table heading</th>
					<th>Table heading</th>
					<th>Table heading</th>
					<th>Table heading</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h3>Reflow</h3>

	<table class="table table-reflow">
		<thead class="thead-inverse">
			<tr>
			<th>#</th>
			<th>Table heading</th>
			<th>Table heading</th>
			<th>Table heading</th>
			<th>Table heading</th>
			<th>Table heading</th>
			<th>Table heading</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			</tr>
			<tr>
			<th scope="row">2</th>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			</tr>
			<tr>
			<th scope="row">3</th>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			<td>Table cell</td>
			</tr>
		</tbody>
	</table>

	<hr/>

	<h1>Raw tags</h1>
	
	<h3>Default table, minimal code</h3>
		
	<table>
		<tr>
			<td>1</td>
			<td>Mark</td>
			<td>Otto</td>
			<td>CSS</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>Javascript</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Stu</td>
			<td>Dent</td>
			<td>HTML</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Brosef</td>
			<td>Stalin</td>
			<td>HTML</td>
		</tr>
	</table>
	
	<h3>Default table with thead, tfoot and tbody, without classes</h3>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Language</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4">footer</td>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>CSS</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>Javascript</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Stu</td>
				<td>Dent</td>
				<td>HTML</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Brosef</td>
				<td>Stalin</td>
				<td>HTML</td>
			</tr>
		</tbody>
	</table>
	
	<h3>Most complex table ever</h3>
	
	<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table -->
	<table id="etalonTable">
		<!-- The HTML <caption> Element (or HTML Table Caption Element) represents the title of a table. Though it is always the first descendant of a <table>, its styling, using CSS, may place it elsewhere, relative to the table. -->
		<caption>caption</caption>
		
		<!-- The HTML Table Column Group Element (<colgroup>) defines a group of columns within a table. -->
		<colgroup>
		
			<!-- The HTML Table Column Element (<col>) defines a column within a table and is used for defining common semantics on all common cells. It is generally found within a <colgroup> element. This element allows styling columns using CSS, but only a few attributes will have an effect on the column (see the CSS 2.1 specification for a list http://www.w3.org/TR/CSS21/tables.html#columns). -->
			<col class="first"/>
			<col class="second"/>
			<col class="third"/>
			<col class="fourth"/>
		</colgroup>
		
		<!-- The HTML Table Head Element (<thead>) defines a set of rows defining the head of the columns of the table. -->
		<thead>
		
			<!-- The HTML Table Row Element (<tr>) defines a row of cells in a table. Those can be a mix of <td> and <th> elements. -->
			<tr>
			
				<!-- The HTML Table Header Cell Element (<th>) defines a cell that is a header for a group of cells of a table. The group of cells that the header refers to is defined by the scope and headers attribute. -->
				<th>thead th</th>
				<th>thead th</th>
				<th>thead th</th>
				<th>thead th</th>
			</tr>
		</thead>
		
		<!-- The HTML Table Foot Element (<tfoot>) defines a set of rows summarizing the columns of the table. -->
		<tfoot>
			<tr>
				
				<!-- The Table cell HTML element (<td>) defines a cell of a table that contains data. It participates in the table model. -->
				<td>tfoot</td>
				<td>tfoot</td>
				<td>tfoot</td>
				<td>tfoot</td>
			</tr>
		</tfoot>
		
		<!-- The HTML Table Body Element (<tbody>) defines one or more <tr> element data-rows to be the body of its parent <table> element (as long as no <tr> elements are immediate children of that table element.)  In conjunction with a preceding <thead> and/or <tfoot> element, <tbody> provides additional semantic information for devices such as printers and displays. Of the parent table's child elements, <tbody> represents the content which, when longer than a page, will most likely differ for each page printed; while the content of <thead> and <tfoot> will be the same or similar for each page printed. For displays, <tbody> will enable separate scrolling of the <thead>, <tfoot>, and <caption> elements of the same parent <table> element.  Note that unlike the <thead>, <tfoot>, and <caption> elements however, multiple <tbody> elements are permitted (if consecutive), allowing the data-rows in long tables to be divided into different sections, each separately formatted as needed. -->
		<tbody>
			<tr>
				<th>th content</th>
				<th>th content</th>
				<th>th content</th>
				<th>th content</th>
			</tr>
			<tr>
				<th>th content</th>
				<td>content</td>
				<td>content</td>
				<td>content</td>
			</tr>
			<tr>
				<th>th content</th>
				<td>content</td>
				<td>content</td>
				<td>content</td>
			</tr>
		</tbody>
	</table>
	
</div>
	
<?php require_once('includes/bottom.php'); ?>