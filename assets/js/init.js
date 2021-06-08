jQuery(document).ready(function($) {
    const form = $('#subscriptForm');
    const formAction = form.attr('action')
    
    form.on('submit', (event) => {

        const formData = {
            userEmail: $('#subscriptEmail').val()
        }

        $.ajax({
            url: formAction,
            type: 'POST',
            data: formData,
            error: function(request, txtstatus, errorThrown) {
                console.log(request);
                console.log(txtstatus);
                console.log(errorThrown);
            },
            success: function() {
                console.log('success');
            }
        })

        event.preventDefault();

    })

})