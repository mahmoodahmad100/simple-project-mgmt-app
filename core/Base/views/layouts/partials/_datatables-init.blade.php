<script>
    var data_table          = null;
    var dataTables_selector = '.dataTables-init';
    var dataTables_options  = {
        language: {
            paginate: {
                previous: '<i class="fas fa-chevron-left" aria-hidden="true"></i>',
                next: '<i class="fas fa-chevron-right" aria-hidden="true"></i>'
            }
        },
        orderCellsTop: true,
        fixedHeader: true,
        bInfo: false
    };

    function dataTables_init(selector = dataTables_selector, opts = dataTables_options) {
        $(document).ready(function() {
            data_table = $(selector).DataTable(opts);
        });
    }
</script>
