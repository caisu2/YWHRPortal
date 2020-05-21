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
    $('#cv').on('click', function () {
        var base_url = '{!! url('/') !!}';
        var id = $(this).data('id');
        var access = $(this).data('access');
        if(access === 0){
            var url = '{{ route('user.show.pdf') }}'
        }else{
            var url = '{{ route('admin.show.pdf') }}'
        }
        $.ajax({
            method: 'GET',
            url: url,
            data: {
                id: id,
            },
            success: function (response) {
                window.open(base_url + '/storage/' + response, '_target')
            }
        })
    });
    $('#audio').on('click', function () {
        var base_url = '{!! url('/') !!}';
        var id = $(this).data('id')
        var access = $(this).data('access');
        if(access === 0){
            var url = '{{ route('user.show.audio') }}'
        }else{
            var url = '{{ route('admin.show.audio') }}'
        }
        $.ajax({
            method: 'GET',
            url: url,
            data: {
                id: id,
            },
            success: function (response) {
                console.log(response)
                window.open(base_url + '/public/' + response, '_target')
            }
        })
    });
    $('#imageModal').on('show.bs.modal', function (event) {
        var base_url = '{!! url('/') !!}';
        var button = $(event.relatedTarget) // Button that triggered the modal
        var link = button.data('link')
        var title = button.data('title')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text(title)
        $('#audio').hide();
        $('#img').show();
        modal.find('.modal-body img').attr('src', base_url + '/storage/' + link)
    })
</script>
</body>

</html>
