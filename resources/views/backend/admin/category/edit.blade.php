{{--  Add Category  --}}
<div class="modal fade" id="editCategory" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">


        <div class="modal-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Category Edit
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.category.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <b>Name</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" id="name">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <b>Category Image</b>
                                    <div class="form-group form-float">
                                        <img src="{{ asset('/') }}backend/images/camera.png"
                                            style="height: 100px; width: auto" alt="" id="photo1">
                                        <input type="file" class="custom-file-input" accept="image/*" name="image"
                                            id="photo1" onchange="showImage(this, 'photo1')">
                                        <label class="custom-file-label" for="inputGroupFile02" id="fileLabel1"></label>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary  m-l-15 waves-effect">UPDATE</button>
                                    <button type="button" class="btn btn-danger waves-effect"
                                        data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                            <input type="hidden" id="id" name="id" value="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">

        </div>


    </div>
</div>
