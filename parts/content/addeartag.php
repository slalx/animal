<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2> <i class="icon-align-justify"></i>
					<span class="break"></span>
					添加耳标
				</h2>
				<div class="box-icon">
					<a href="table.html#" class="btn-setting"> <i class="icon-wrench"></i>
					</a>
					<a href="table.html#" class="btn-minimize">
						<i class="icon-chevron-up"></i>
					</a>
					<a href="table.html#" class="btn-add">
						<i class="icon-plus"></i>
					</a>
				</div>
			</div>
			<div class="box-content">
				<form action="/control/save_eartag.php" method="post">
					<table class="table table-bordered table-striped table-condensed" id="J_AddEarTagTable">
						<thead>
							<tr>
								<th>耳标编号</th>
								<th>所属品种</th>
								<th>所在棚</th>
								<th>所在圈</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<input type="text" class="form-control" name="eartags[0][serialnumber]"></div>
								</td>
								<td class="center">
									<select class="form-control" name="eartags[0][typeId]">
										<option value="1">小尾寒羊</option>
										<option value="2">青山羊</option>
									</select>
									<input type="hidden" name="eartags[0][typeName]">
								</td>
								<td class="center">
									<select name="eartags[0][pengId]" class="form-control">
										<option value="1">1号羊棚</option>
										<option value="2">2号羊棚</option>
										<option value="3">3号羊棚</option>
										<option value="4">4号羊棚</option>
										<option value="5">5号羊棚</option>
									</select>
									<input type="hidden" name="eartags[0][pengName]">
								</td>
								<td class="center">
									<select class="form-control" name="eartags[0][juanId]">
										<option value="1">1号羊圈</option>
										<option value="2">2号羊圈</option>
										<option value="3">3号羊圈</option>
										<option value="4">4号羊圈</option>
										<option value="5">5号羊圈</option>
									</select>
									<input type="hidden" name="eartags[0][juanName]">
								</td>
								<td class="center">
									<a class="btn btn-danger" href="table.html#">
													<i class="icon-trash "></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="eartags[1][serialnumber]"></div>
								</td>
								<td class="center">
									<select class="form-control" name="eartags[1][typeId]">
										<option value="1">小尾寒羊</option>
										<option value="2">青山羊</option>
									</select>
									<input type="hidden" name="eartags[1][typeName]">
								</td>
								<td class="center">
									<select name="eartags[1][pengId]" class="form-control">
										<option value="1">1号羊棚</option>
										<option value="2">2号羊棚</option>
										<option value="3">3号羊棚</option>
										<option value="4">4号羊棚</option>
										<option value="5">5号羊棚</option>
									</select>
									<input type="hidden" name="eartags[1][pengName]">
								</td>
								<td class="center">
									<select class="form-control" name="eartags[1][juanId]">
										<option value="1">1号羊圈</option>
										<option value="2">2号羊圈</option>
										<option value="3">3号羊圈</option>
										<option value="4">4号羊圈</option>
										<option value="5">5号羊圈</option>
									</select>
									<input type="hidden" name="eartags[1][juanName]">
								</td>
								<td class="center">
									<a class="btn btn-danger" href="table.html#">
													<i class="icon-trash "></i> 
									</a>
								</td>
							</tr>
					</tbody>
				</table>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">保存</button>
					<button type="reset" class="btn">取消</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--/col-->
</div>
<script type="text/javascript">
	$(function(){
		//
		$('select').each(function(i,obj){
			var selectNext = $(obj).next();
			var initName = obj.options[obj.selectedIndex].text;
			selectNext.val(initName);
		});
		//
		$('select').on('change',function(){
			var thisNode = $(this);
			var selectedName = this.options[this.selectedIndex].text;
			thisNode.next().val(selectedName);
		});

		$('.btn-add').on('click', function(ev){
			ev.preventDefault();
			//debugger;
			var trSize = $('#J_AddEarTagTable tbody tr').size();
			var oneTr = $('#J_AddEarTagTable tbody tr').get(0);
			var tbody = $('#J_AddEarTagTable tbody');
			//var wrap = $(oneTr).clone(true).wrap('table');
			var oneTrNode = '<tr>'+$(oneTr).clone(true).html()+'</tr>';
			var newTrNode = oneTrNode.replace(/eartags\[0\]/g,'eartags['+trSize+']');
			//tbody.appendChild(oneTr);
			//debugger;
			tbody.append(newTrNode);
		});

		$('#J_AddEarTagTable').on('click', function(ev){
			var targetNode = $(ev.target);
			var targetNodeParent = targetNode.parent('.btn-danger');
			if(targetNode.hasClass('btn-danger') || targetNodeParent.length!=0){
				ev.preventDefault();
				var tr = targetNode.parents('tr');
				tr.remove();
			}
		});

	});

</script>