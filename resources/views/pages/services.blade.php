@extends('layouts.header')

@section('content')	
	<section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/home/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/home/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/home/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/home/services/services4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/home/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/home/services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

	
	<section id="feature" class="transparent-bg">
		<div class="container">
			<div class="get-started center wow fadeInDown">
				<h2>Ready to get started</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua. <br>  Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
				<div class="request">
					<h4><a href="#">Request a free Quote</a></h4>
				</div>
			</div><!--/.get-started-->

			<div class="clients-area center wow fadeInDown">
				<h2>What our client says</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>

			<div class="row">
				<div class="col-md-4 wow fadeInDown">
					<div class="clients-comments text-center">
						<img src="images/home/client1.png" class="img-circle" alt="">
						<h3>Đi thi chỉ cần thay số là 8 điểm</h3>
						<h4><span>-Thầy Trần Bá Phương /</span>  ĐH Công nghiệp Hà Nội</h4>
					</div>
				</div>
				<div class="col-md-4 wow fadeInDown">
					<div class="clients-comments text-center">
						<img src="images/home/client2.png" class="img-circle" alt="">
						<h3>Đi thi chỉ cần thay số là 8 điểm</h3>
						<h4><span>-Thầy Trần Bá Phương /</span>  ĐH Công nghiệp Hà Nội</h4>
					</div>
				</div>
				<div class="col-md-4 wow fadeInDown">
					<div class="clients-comments text-center">
						<img src="images/home/client3.png" class="img-circle" alt="">
						<h3>Đi thi chỉ cần thay số là 8 điểm</h3>
						<h4><span>-Thầy Trần Bá Phương /</span>  ĐH Công nghiệp Hà Nội</h4>
					</div>
				</div>
			</div>
		</div><!--/.container-->
	</section><!--/#feature-->
    @include('layouts.footer');
@endsection