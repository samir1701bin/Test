@include('../includes/header')
@include('../includes/sidebar')
<div class="pcoded-content">

<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10"> Ecommerce Dashboard</h5>
						<p class="m-b-0">Welcome to Admin dashboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=""> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Testimonial</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="pcoded-inner-content">

		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
										<div class="row">
											<div class="col-8">
											<h4>Add new testimonial</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<form action="">
                                        <div class="form-group">
                                            <label for="title">Client name</label>
                                            <input type="text"  class="form-control" name="client_name" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Designation </label>
                                            <input type="url"  class="form-control" name="designation " id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Client say's </label>
                                            <input type="url"  class="form-control" name="" id="">
                                        </div>
                                        <div class="form-group">
                                            <input type="file"  class="hidden-field" name="" id="slider" onchange="preview(this)">
                                            <img src="" alt="" id="image">
                                            <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i> Add image</span></label>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit">+ Add</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </form>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
			<div id="styleSelector">
			</div>
		</div>
	</div>
</div>
<script>
	function preview(image){
		if (image.files && image.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e){
					$('#image')
						.attr('src', e.target.result)
						.width(200)
						.height(120);
				};
				reader.readAsDataURL(image.files[0]);
		}
	}
</script>

@include('../includes/footer')
