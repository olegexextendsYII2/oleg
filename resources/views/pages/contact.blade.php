@extends('main')
	
		@section('content')
		
<div class="container-contact">
    <div class="container">
	    <div class="page-header" id="contact">
            <h1>Get In Touch With Us</h1>
			<br />
			<div class="row">
				<div class="col-md-6">
					<div id="googlemap"></div>
				</div>
				<div class="col-md-6">
					<form>
						<div class="form-group">
							<label for="form-name">Name</label>
							<input type="email" class="form-control" id="form-name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="form-email">Email Address</label>
							<input type="email" class="form-control" id="form-email" placeholder="Email Address">
						</div>
						<div class="form-group">
							<label for="form-subject">Telephone</label>
							<input type="text" class="form-control" id="form-subject" placeholder="Subject">
						</div>
						<div class="form-group">
							<label for="form-message">Email your Message</label>
							<textarea class="form-control" id="form-message" placeholder="Message"></textarea>
						</div>
						<button type="submit" class="btn btn-primary btn-lg" style="margin:10px;">Register Now</button>
						<br /><br />
					</form>
				 </div>
			</div>
        </div>
    </div>
</div>
		@endsection