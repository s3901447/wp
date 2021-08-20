<!DOCTYPE html>

<!--This page must be formatted differently to other website pages. It should:
  1) Be printer friendly
  2) Look like company branded letterhead
  3) Look as though it fits on an A4 page
  4) Use a modest amount of toner / ink when printing-->

  <?php include "tools.php"; ?>
  <?php heading() ?>
  <script src="script.js"></script>



<html class="receiptpage">
	
	

	<body onload="loadReceipt()">
		<?php head() ?>
			<div>
				<table class='receipt' name="data">
					<tr>
						<th><label>Date: </label></th>
						<td><label id="date">test</label></td>
					</tr>
					<tr>
						<div id="receiptlist"
							<div id="items_table">
								<table id="list2"></table>
							</div>
						</div>
					</tr>
				</table>
			</div>
	</body>

	<div id="footer"><?php footer() ?></div>
</html>