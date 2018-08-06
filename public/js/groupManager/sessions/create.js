$(function () {
    $("#cancelBtn").on('click', function () {
        window.location.href = base_url + '/group-manager/session/list';
    });

    $("#sessionDate").inputmask("mm/dd/yyyy" );
    $("#sessionStart").inputmask("hh:mm");
    $("#sessionLength").inputmask("hh:mm");
    
    $("#createSessionForm").validate({
        errorElement: 'span', errorClass: 'help-block text-right',
        rules: {
            projectId: {
                required: true
            },
            sessionName: {
                required: true
            },
            sessionSpeakerCount: {
                required: true,
                number: true,
                min: 1
            },
            sessionLength: {
                required: true
            },
            sessionDate: {
                required: true
            },
            sessionStart: {
                required: true
            },
            sessionLocation: {
                required: true
            },
            sessionReportNeeded: {
                required: true
            }
            //sessionListId: {
            //    required: true
           // }
        },
        messages: {
            projectId: {
                required: "Project is required"
            },
            sessionName: {
                required: "Session title is required"
            },
            sessionSpeakerCount: {
                required: "Number of speakers is required",
                number: "Invalid number of speakers",
                min: "Invalid number of speakers"
            },
            sessionLength: {
                required: "Session length is required"
            },
            sessionDate: {
                required: "Session date is required"
            },
            sessionStart: {
                required: "Session start time is required"
            },
            sessionLocation: {
                required: "Session location is required"
            },
            sessionReportNeeded: {
                required: "Report needed is required"
            }
          //  sessionListId: {
          //      required: "Session list  is required"
         //   }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        success: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
            $(element).closest('.form-group').children('span.help-block').remove();
        },
        errorPlacement: function (error, element) {
            error.appendTo(element.closest('.form-group'));
        },
        submitHandler: function (form) {
            $(window).block({
                'message': '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>',
                'css': {
                    border: '0',
                    padding: '0',
                    backgroundColor: 'none',
                    marginTop: '5%',
                    zIndex: '10600'
                },
                overlayCSS: {backgroundColor: '#555', opacity: 0.3, cursor: 'wait', zIndex: '10600'},
            });
            $.post('', $("#createSessionForm").serialize(), function (result) {
                if (result.code == '1') {
                    swal({title: '', text: result.message, type: 'success'}, function () {
                        window.location.href = base_url + '/group-manager/session/list';
                    });
                } else {
                    swal('', result.message, 'error');
                }
                $(window).unblock();
            });
        }
    });
});
