<section class="bg-light mt-5 mb-5 p-5">
    <div class="container">

        <h2 class="text-center fw-bold title" data-aos="fade-up" data-aos-duration="1500">نمونه کارها</h2>

        <div id="pinBoot" class="portfolio filter">

            <div class="row">
                @foreach($portfolios as $row)
                    <div class="col-md-3 mb-3">
                        <article class="card bg-body rounded-4 portfolio-item mix {{ $row->portfolio_category_id }}" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                            <div class="portfolio-img">
                                <img src="{{ asset('portfolios/img/' . $row->img ) }}" class="rounded-4" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h2 class="fs-6">{{$row->title}}</h2>
                                <a href="{{ route('portfolio.single', $row->slug) }}" class="details-link" title="More Details"><i class="fa-duotone fa-link"></i></a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
