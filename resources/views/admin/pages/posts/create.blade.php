<x-admin-layout>
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
                                </div><hr>

                                @if (count($errors) > 0)
                                    <div class = "alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('post.create') }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Select Category </label>
                                        <select class="form-control" name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="control-label mb-1">Post Title </label>
                                        <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>

                                    <div class="form-group">
                                        <label for="content" class="control-label mb-1">Content</label>
                                        <textarea class="ckeditor form-control" id="content" name="content" required></textarea>
                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="banner" class="control-label mb-1">Banner</label>
                                        <input type="file" name="banner" id="banner" class="form-control" required>
                                    </div>

                                    <button type="submit"  class="btn btn-primary " name="submit">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        @includeIf('vendor.filepond.script')

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            _initializeFilepond();

            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
    </x-slot>
</x-admin-layout>
