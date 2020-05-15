<!-- Optional JavaScript -->
<script src="{{ asset('admin/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('admin/assets/libs/js/main-js.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin/assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('admin/assets/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/datatables/js/data-table.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script>
    $(document).ready(function () {
        var base_url = '{!! url('/') !!}';
        $('#imageModal').on('show.bs.modal', function () {
            var modal = $(this)
            $('#internet').on('click', function () {
                var link = $(this).data('link')
                var title = $(this).data('title')
                modal.find('.modal-title').text(title)
                modal.find('.modal-body img').attr('src', base_url +'/storage/'+ link)
            });
            $('#about_me').on('click', function () {
                var link = $(this).data('link')
                var title = $(this).data('title')
                modal.find('.modal-title').text(title)
                modal.find('.modal-body img').attr('src',  base_url +'/storage/'+ link)
            });
            $('#office_setup').on('click', function () {
                var link = $(this).data('link')
                var title = $(this).data('title')
                modal.find('.modal-title').text(title)
                modal.find('.modal-body img').attr('src',  base_url +'/storage/'+ link)
            });
            // var button = $(event.relatedTarget)
            // var link = button.data('link')
            // var title = button.data('title')
            // var modal = $(this)
            // modal.find('.modal-title').text(title)
            // modal.find('.modal-body img').attr('href', link)
        })
        $('#cv').on('click', function () {
            var id = $(this).data('id')
            $.ajax({
                method: 'GET',
                url: '{{ route('admin.show.pdf') }}',
                data: {
                    id:id,
                },
                success:function (response) {
                    window.open(base_url +'/storage/'+ response,'_target')
                }
            })
        });
    })
</script>
</body>

</html>
