<script>
    const SYSTEM_BASE_PATH   = '{{  URL::to('/') }}';
    const API_KEY            = '';
    let route_resource       = @json(explode('.', request()->route()->getName())).slice(-1)[0];
    let route_index          = '{{ route($global['module']['routes']['index']) }}';
    let module_resource      = '{{ $global['module']['directory'] }}' + `_${route_resource}`;
    let id                   = '{{ request()->{$global['module']['directory']} }}';
    let delete_selector      = '#delete-modal';
    let delete_title         = 'Confirm Delete';
    let delete_message       = 'are you sure that you want to delete ?';

    function handle_api_response(response, is_success = false, redirect = false, redirect_to = null)
    {
        let wrapper = document.createElement('div');
        let result  = '';

        $(response.data[is_success ? 'data' : 'errors']).each(function(index, obj){
            if (obj.message != null) {
                let msg = obj.message;
                result += `<div class="alert alert-${is_success ? 'success' : 'danger'}" role="alert">${msg}</div>`
            }
        });

        wrapper.innerHTML = result;

        swal({
            icon: is_success ? 'success' : 'error',
            title: response.data.message,
            text: '',
            content: wrapper,
        });

        if(redirect){
            if(redirect_to == null) {
                redirect_to = '{{ route($global['module']['routes']['index']) }}';
            }
            window.location.href = redirect_to;
        }
    }

    function show_delete_modal(title, message, selector = delete_selector)
    {
        $(selector).modal('show');
        $(`${selector} ${selector}-label`).text(title);
        $(`${selector} .modal-body`).text(message);
    }

    function get_module_url(id, page = 'edit') 
    {
        return `${route_index}/${id}/${page}`;
    }
</script>
