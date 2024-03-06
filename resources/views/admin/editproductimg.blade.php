@extends('admin.layouts.template')
@section('page_title')
Edit Product Image- E-Commerce
@endsection()
@section('content')
<!-- Basic Layout -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages/</span> Edit Product Image</h4>
    <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Form Edit Products Image</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('updateproductimg') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Previous Image</label>
                <div class="col-sm-10">
                  <img style="height: 300px;" src="{{ asset($productinfo->product_img) }}" alt="">
                </div>
              </div>

              <input type="hidden" value="{{ $productinfo->id }}" name="id">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Upload New Image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="product_img" name="product_img" />
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Update New Image</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection()