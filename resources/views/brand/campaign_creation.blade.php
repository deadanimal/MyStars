@extends('layout-auth')

@section('content')
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">

        <h1 class="h2 mb-4">Ideate Marketing Campaign</h1>

        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
            <div class="card-body">

                <div class="mb-3">
                    <label for="text-input" class="form-label">Text</label>
                    <input class="form-control" type="text" id="text-input" value="Artisanal kale">
                </div>

                <div class="mb-3">
                    <label for="select-input" class="form-label">Select</label>
                    <select class="form-select" id="select-input">
                        <option>Choose option...</option>
                        <option>Option item 1</option>
                        <option>Option item 2</option>
                        <option>Option item 3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="text-input" class="form-label">Text</label>
                    <input class="form-control" type="text" id="text-input" value="Artisanal kale">
                </div>

                <div class="mb-3">
                    <label for="textarea-input" class="form-label">Textarea</label>
                    <textarea class="form-control" id="textarea-input" rows="5">Hello World!</textarea>
                </div>

                <div class="mb-3">
                    <label for="textarea-input" class="form-label">Textarea</label>
                    <textarea class="form-control" id="textarea-input" rows="5">Hello World!</textarea>
                </div>

                <div class="mb-3">
                    <label for="textarea-input" class="form-label">Textarea</label>
                    <textarea class="form-control" id="textarea-input" rows="5">Hello World!</textarea>
                </div>

            </div>
        </section>
    @endsection
