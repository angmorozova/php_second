$(document).ready(function() {
    $('#app_form').validator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            age: {
                validators: {
                    between: {
                        min: 0,
                        max: 100,
                        message: 'The latitude must be between -90.0 and 90.0'
                    }
                }
            }
        }
    });
});
