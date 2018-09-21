$('#categoriaEditarModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var category_id = button.data('category-id')
    var category_name = button.data('category-name')

    var modal = $(this)
    modal.find('#category_name').val(category_name)
    modal.find('#category_id').val(category_id)
})
$('#categoriaExcluirModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var category_id = button.data('category-id')
    var category_name = button.data('category-name')

    var modal = $(this)
    modal.find('#category_name').val(category_name)
    modal.find('#category_id').val(category_id)
})
$('#adicionarItemModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var category_id = button.data('category-id')
    var category_name = button.data('category-name')

    var modal = $(this)
    modal.find('#category_name').val(category_name)
    modal.find('#category_id').val(category_id)
})