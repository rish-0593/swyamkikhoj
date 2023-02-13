<script>
    $(function() {
        $("#addUpdateCategoryModal").on('hide.bs.modal', function(){
            $("form").trigger('reset');
        });

        $(document).on('click', '[data-toggle-add="modal"]', function(e) {
            $('#modal-title').text('Add Category');
            $('#addUpdateCategoryModal').modal('toggle');
        });

        $(document).on('click', '[data-toggle-edit="modal"]', function(e) {
            let _category = $(this).closest('tr').find('td:nth-child(2)').text();
            $('#modal-title').text('Edit Category');
            $('#category_id').val($(this).data('category-id'));
            $('#category').val(_category);
            $('#addUpdateCategoryModal').modal('toggle');
        });
    });
</script>
