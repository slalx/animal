<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2> <i class="icon-edit"></i>
					添加品种
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
				<form class="form-horizontal" action="/control/save_type.php" method="post">
					<fieldset class="col-sm-12">
					<div class="form-group">
							<label class="control-label" for="date01">品种名称</label>
							<div class="controls row">
								<div class="input-group date col-sm-4">
									<input type="text" class="form-control" name="type_name">
								</div>
							</div>
					</div>
					<div class="form-group">
							<label class="control-label" for="date01">原产地</label>
							<div class="controls row">
								<div class="input-group date col-sm-4">
									<input type="text" class="form-control" name="type_address">
								</div>
							</div>
					</div>
					<div class="form-group">
							<label class="control-label" for="date01">生活习性</label>
							<div class="controls row">
								<div class="input-group date col-sm-4">
									<textarea type="text" class="form-control" name="type_live"></textarea>
								</div>
							</div>
					</div>
					<div class="form-group">
							<label class="control-label" for="date01">简介</label>
							<div class="controls row">
								<div class="input-group date col-sm-4">
									<textarea type="text" class="form-control" name="type_desc"></textarea>
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
									<input type="text" class="form-control date-picker" id="date01" name="type_adddate" data-date-format="mm/dd/yyyy"></div>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">保存</button>
							<button type="reset" class="btn">取消</button>
						</div>
					</fieldset>
				</form>

			</div>
		</div>
	</div>
	<!--/col-->

</div>