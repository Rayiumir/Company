<x-AdminLayout>
    <x-slot name="title">
        - ایجاد بخش جدید
    </x-slot>

    <div class="col-md-8 offset-md-2">
        <div class="card rounded-4">
            <div class="card-body">
                <h2 class="text-center fw-bold fs-5">افزودن بخش جدید</h2>

                <form action="{{route('sections.store')}}" method="POST" class="mt-4">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="Select1" class="form-label">نوع بخش</label>
                            <select class="form-select @error('type') is-invalid @enderror" id="Select1" name="type" aria-label="Default select example">
                                <option selected>انتخاب کنید ...</option>
                                @foreach($SectionType as $row)
                                    <option value="{{$row}}">{{ translate_section_type($row) }}</option>
                                @endforeach
                            </select>
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">ترتیب</label>
                            <input type="number" name="position" class="form-control @error('position') is-invalid @enderror" id="exampleFormControlInput1" value="{{$count+1}}">
                            @error('position')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ثبت بخش جدید </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
