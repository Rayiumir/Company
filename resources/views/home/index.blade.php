<x-HomeLayout>
    @include('home.parts.header')
    @include('home.parts.slider')
    @include('home.parts.service', ['service' => $service])
    @include('home.parts.portfolio')
    @include('home.parts.posts')
    @include('home.parts.customer')
    @include('home.parts.footer')
</x-HomeLayout>
