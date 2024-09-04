{{-- خدمات ما --}}
<section class="mt-5 mb-5">
    <div class="container">
        <h2 class="text-center fw-bold title" data-aos="fade-up" data-aos-duration="1500">خدمات ما</h2>
        <div class="row">
            @foreach($service as $row)
                <div class="col-md-4">
                    <article class="card border-0 rounded-4" data-aos="{{ $row->aos }}" data-aos-easing="{{ $row->easing }}" data-aos-delay="{{ $row->delay }}" data-aos-offset="{{ $row->offset }}">
                        <div class="card-body">
                            <div class="text-center">
                                <i class="{{ $row->iconClass }} fa-5x"></i>
                                <h3 class="fw-bold fs-5 mt-3">{{ $row->title }}</h3>
                            </div>
                            <p>{{ $row->body }}</p>
                        </div>
                    </article>
                </div>
            @endforeach

        </div>
    </div>
</section>
{{-- پایان خدمات ما --}}
