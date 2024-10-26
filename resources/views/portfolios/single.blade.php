<x-HomeLayout>
    <x-slot name="title">
        - {{$portfolio->title}}
    </x-slot>
    @include('home.parts.header')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="{{ route('home.index') }}" type="button" class="btn btn-light rounded-5 mt-3"><i class="fa-duotone fa-rotate-back"></i> بازگشت به صفحه اصلی </a>
                <div class="card mt-4 mb-4 rounded-4">
                    <div class="card-body">
                        <figure class="text-center">
                            <img src="{{ asset('portfolios/img/' . $portfolio->img ) }}" class="img-fluid rounded-4" alt="{{$portfolio->title}}" srcset="">
                        </figure>
                        <h1 class="fs-3 fw-bold">{{$portfolio->title}}</h1>
                        <div class="mt-3 mb-3">
                            <div class="row">
                                <div class="col-md-6">تکنولوژی استفاده شده :</div>
                                <div class="col-md-6">{{$portfolio->tech}}</div>
                                <hr>
                                <div class="col-md-6">زمان تکمیل شده :</div>
                                <div class="col-md-6">{{$portfolio->time}}</div>
                                <hr>
                                <div class="col-md-6">پشتیبانی :</div>
                                <div class="col-md-6">{{$portfolio->support}}</div>
                                <hr>
                                <div class="col-md-6">هزینه پروژه :</div>
                                <div class="col-md-6">{{$portfolio->cost}}</div>
                                <hr>
                                <div class="col-md-6">زبان پروژه :</div>
                                <div class="col-md-6">{{$portfolio->lang}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('home.parts.footer')
</x-HomeLayout>
