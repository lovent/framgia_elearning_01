
@extends('layouts.header')

@section('content') 
        
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Portfolio</h2>
               <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul><!--/#portfolio-filter-->

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
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->

        @include('layouts.footer');
@endsection
