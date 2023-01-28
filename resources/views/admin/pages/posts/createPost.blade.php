<x-admin-layout>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Post Create</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">New Post</h3>
                                        </div>
                                        <hr>
                                    @if (count($errors) > 0)
                                    <div class = "alert alert-danger">
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                   @endif
                                        <form action="{{route('createPost')}}" method="post" novalidate="novalidate">
                                            @csrf
                                        <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Select Category </label>
                                             <select class="form-control" name="category_id" required>
                                                <option value="">Select Category</option>
                                                @foreach($categorys as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                             </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="control-label mb-1">Post Title </label>
                                                <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" required >
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="Content" class="control-label mb-1">Content</label>
                                                <textarea class="ckeditor form-control" name="Content" required></textarea>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>

                                            <button type="submit"  class="btn btn-primary " name="submit">Create</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
</x-admin-layout>