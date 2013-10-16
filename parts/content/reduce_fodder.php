<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2> <i class="icon-edit"></i>
					消耗饲料
				</h2>
				<div class="box-icon">
					<a href="form-elements.html#" class="btn-setting"> <i class="icon-wrench"></i>
					</a>
					<a href="form-elements.html#" class="btn-minimize">
						<i class="icon-chevron-up"></i>
					</a>
					<a href="form-elements.html#" class="btn-close">
						<i class="icon-remove"></i>
					</a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="/control/save_fodder.php" method="post">
					<fieldset class="col-sm-12">
					<div class="form-group">
							<label class="control-label" for="date01">饲料名称</label>
							<div class="controls row">
								<div class="input-group date col-sm-4">
								  <select class="form-control" name="fodderTypeId">
									<option value="1">花生秧</option>
									<option value="2">玉米秸秆</option>
								  </select>
								</div>
							</div>
					</div>
					<div class="form-group">
							<label class="control-label" for="date01">数量</label>
							<div class="controls row">
								<div class="input-group date col-sm-4">
									<input type="text" class="form-control" name="fodderCount">
								</div>
							</div>
					</div>
					<div class="form-group">
							<label class="control-label" for="date01">单位</label>
							<div class="controls row">
								<div class="input-group date col-sm-4">
									<input type="text" class="form-control" name="fodderUnit">
								</div>
							</div>
					</div>
					<div class="form-group">
							<label class="control-label" for="date01">价格</label>
							<div class="controls row">
								<div class="input-group date col-sm-4">
									<textarea type="text" class="form-control" name="fodderPrice"></textarea>
								</div>
							</div>
					</div>
						<div class="form-group">
							<label class="control-label" for="date01">日期</label>
							<div class="controls row">
								<div class="input-group date col-sm-4">
									<span class="input-group-addon">
										<i class="icon-calendar"></i>
									</span>
									<input type="text" class="form-control date-picker" name="createDate" id="date01" data-date-format="mm/dd/yyyy"></div>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">添加</button>
							<button type="reset" class="btn">取消</button>
						</div>
					</fieldset>
					<input type="hidden" value="0" name="fooderStatus">
					<input type="hidden" value="花生秧" name="fodderTypeName" id="J-fodderTypeName"/>
				</form>

			</div>
		</div>
	</div>
	<!--/col-->

</div>