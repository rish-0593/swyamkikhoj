<div class="modal fade" id="addUpdateCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addUpdateCategoryModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="{{route('category.updateOrCreate')}}" method="post">
            @csrf
            <input type="hidden" name="id" id="category_id">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="name" id="category" placeholder="Category ... " class="form-control"  required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
