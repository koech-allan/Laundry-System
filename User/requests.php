<style>
   
   </style>
   </div>
			<div class="row">	
				<table class="table table-bordered" id="list">
					<colgroup>	
						<col width="30%">
						<col width="15%">
						<col width="25%">
						<col width="25%">
						<col width="5%">
					</colgroup>	
					<thead>	
						<tr>
							<th class="text-center">Category</th>
							<th class="text-center">Quantity</th>
							
							<th class="text-center">Amount</th>
							<th class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						<?php if(isset($_GET['id'])): ?>
						<?php 
							$list = $conn->query("SELECT * from laundry_items where laundry_id = ".$id);
							while($row=$list->fetch_assoc()):
						?>
							<tr data-id="<?php echo $row['id'] ?>">
								<td class="">
									<input type="hidden" name="item_id[]" id="" value="<?php echo $row['id'] ?>">
									<input type="hidden" name="laundry_category_id[]" id="" value="<?php echo $row['laundry_category_id'] ?>"><?php echo isset($cname_arr[$row['laundry_category_id']]) ? ucwords($cname_arr[$row['laundry_category_id']]) : '' ?></td>
								<td><input type="number" class="text-center" name="weight[]" id="" value="<?php echo $row['weight'] ?>"></td>
								<td class="text-right"><input type="hidden" name="unit_price[]" id="" value="<?php echo $row['unit_price'] ?>"><?php echo number_format($row['unit_price'],2) ?></td>
								<td class="text-right"><input type="hidden" name="amount[]" id="" value="<?php echo $row['amount'] ?>"><p><?php echo number_format($row['amount'],2) ?></p></td>
								<td><button class="btn btn-sm btn-danger" type="button" onclick="rem_list($(this))"><i class="fa fa-times"></i></button></td>
							</tr>
						<?php endwhile; ?>
						<?php endif; ?>

					</tbody>	
					<tfoot>
						<tr>
							<th class="text-right" colspan="3"></th>
							<th class="text-right" id="tamount"></th>
							<th class="text-right"></th>
						</tr>
					</tfoot>
				</table>
			</div>	