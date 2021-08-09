@extends('Header-Footer.header_footer')

@section('content')
						 <div class="contaier ">
						<div class="row m-4">


				<?php
				for($i = 0; $i < 6; $i++):
				?>
				<div class="col-md-6  d-md-flex ">
						<div class="card m-2 rounded-0 flex-fill ">
							<img src="business-card-website/resources/images/<?php echo $i+1 ?>.jpg" class="card-img-top rounded-0 " alt="...">

						<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
				</div>
								</div>
				<?php
				endfor;
				?>

						</div>
				</div>
@endsection
