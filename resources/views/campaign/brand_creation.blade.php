@extends('layouts.app')

@section('content')
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">

        <h1 class="h2 mb-4">Ideate Marketing Campaign</h1>

        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
            <div class="card-body">

                <form action="/campaigns" method="POST" enctype="multipart/form-data">
                    @csrf

                <div class="mb-3">
                    <label for="text-input" class="form-label">Title</label>
                    <input class="form-control" type="text" id="text-input" name="title" placeholder="Campaign Title">
                </div>

                <div class="mb-3">
                    <label for="select-input" class="form-label">Platform</label>
                    <select class="form-select" id="select-input" name="platform">
                        <option value="tiktok" selected>Tiktok</option>
                        <option value="youtube">Youtube</option>
                        <option value="twitter">Twitter</option>
                        <option value="instagram">Instagram</option>
                        <option value="facebook">Facebook</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="select-input" class="form-label">Region</label>
                    <select class="form-select" id="select-input" name="region">
                        <option value="US" selected>United States of America</option>
                        <option value="GB">United Kingdom</option>
                        <option value="">Global</option>
                    </select>
                </div>                

                <div class="mb-3">
                    <label for="text-input" class="form-label">URL to Reference Media</label>
                    <input class="form-control" type="text" id="text-input" name="reference_link" placeholder="https://....">
                </div>

                <div class="mb-3">
                    <label for="textarea-input" class="form-label">Caption</label>
                    <textarea class="form-control" id="textarea-input" rows="5" name="caption" placeholder="Please put the caption that you'd like creators to include"></textarea>
                </div>

                <div class="mb-3">
                    <label for="textarea-input" class="form-label">Brand Introduction</label>
                    <textarea class="form-control" id="textarea-input" rows="5" name="brand_introduction" placeholder="Please put as much as you can"></textarea>
                </div>

                <div class="mb-3">
                    <label for="textarea-input" class="form-label">Campaign Creative Direction</label>
                    <textarea class="form-control" id="textarea-input" rows="5" name="creative_direction" placeholder="Please put as much as you can"></textarea>
                </div>

                <div class="mb-3 row align-items-center">
                    <label class="col-md-2 col-form-label" for="file-input">Attachment(s)</label>
                    <div class="col-md-10">
                        <input class="form-control" name="attachments[]" type="file" id="file-input" multiple>
                    </div>
                </div>               

                <button class="btn btn-primary" type="submit">Create a Campaign</button>

                </form>

            </div>
        </section>
@endsection
