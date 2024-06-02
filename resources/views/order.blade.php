@extends('layout.app')
@section('content')

<style>
    .donate-now {
        list-style-type: none;
        margin: 25px 0 0 0;
        padding: 0;
    }

    .donate-now li {
        float: left;
        height: 40px;
        position: relative;
        border-radius: 0.3125rem;
        border: 1px solid #f5f5f5;
        background: #fafbff;
        color: #000;
        font-size: 1rem;
        font-weight: 400;
        text-align: center;
    }

    .donate-now label,
    .donate-now input {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        border-radius: 0.3125rem;
        border: 1px solid #0d6efd;
    }

    .donate-now input[type="radio"] {
        opacity: 0.011;
        z-index: 100;
    }

    .donate-now input[type="radio"]:checked+label {
        background: #3B71ED;
        color: #ffffff;
        border: 1px solid #3B71ED;
        height: 80px;
    }

    .donate-now label {
        padding: 5px;
        border: 1px solid #0d6efd;
        cursor: pointer;

    }

    .donate-now label:hover {
        background: #0d6efd;
    }

    .donate-now input[type="radio"]:hover {
        background: #0d6efd;
    }

    .select2-container .select2-selection--single {
        height: 52px !important;
    }

    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #868685;
        border-radius: 30px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 52px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 48px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 20px;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        display: block;
        padding-left: 20px;
        padding-right: 20px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .input-error{
        color: red;
        font-size: 14px;
        margin-left: 10px;
    }
</style>
<main class="flex-shrink-0">
    <section class="order-sec">
        <div class="container">

            @php($orderSessionData = (session('orderRequestData'))?session('orderRequestData'):[])

            @php($orderRequestData = array_merge($orderSessionData,app('request')->input()))
            <form class="order-form" id="order_form" name="order_form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="order-summary">
                            <h2 class="border-0">Task Details</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <select class="form-select select2" id="subject_id" name="subject_id" aria-label="Subject">
                                            <option selected value="">Select subject</option>
                                            @if(!empty($subjects)):
                                            @foreach ($subjects as $subject1)
                                            <option value="<?= $subject1['id']; ?>" @if(isset($orderRequestData['subject_id']) && $orderRequestData['subject_id']==$subject1['id']) selected="selected" @endif><?= $subject1['subject_name']; ?></option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <span id="subject_id_error" class="input-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="referencing_style_id" class="form-label">Referencing Style</label>
                                        <select class="form-select select2" id="referencing_style_id" name="referencing_style_id">
                                            <option selected value="">Select Referencing Style</option>
                                            @if(!empty($referencings)): @foreach ($referencings as $referencing) <option value="<?= $referencing['id']; ?>" @if(isset($orderRequestData['referencing_style_id']) && $orderRequestData['referencing_style_id']==$referencing['id']) selected="selected" @endif><?= $referencing['style']; ?></option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <span id="referencing_style_id_error" class="input-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="taskType" class="form-label">Task type</label>
                                        <select class="form-select select2" id="task_type_id" name="task_type_id" aria-label="taskType">
                                            <option selected value="">Select task type</option>
                                            @if(!empty($task_types)):
                                            @foreach ($task_types as $task_type)
                                            <option value="<?= $task_type['id']; ?>" @if(isset($orderRequestData['task_type_id']) && $orderRequestData['task_type_id']==$task_type['id']) selected="selected" @endif><?= $task_type['type_name']; ?></option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <span id="task_type_id_error" class="input-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="wordCount" class="form-label">Word count</label>
                                        <div class="input-group mb-3">
                                            <button class="btn btn-outline-secondary btn-minus" onclick="minus(this)" type="button">-</button>
                                            <input type="text" class="form-control" placeholder="" aria-label="taskDate text with button addon" aria-describedby="button-addon1" value="{{@$orderRequestData['no_of_words'] ??  200}}" id="no_of_words" name="no_of_words">
                                            <button class="btn btn-outline-secondary btn-plus" onclick="add(this)" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="studylabel_id" class="form-label">Level of study</label>
                                        <select class="form-select select2" id="studylabel_id" name="studylabel_id" aria-label="studylabel_id">
                                            <option selected value="">Select level of study</option>
                                            @if(!empty($levels)):
                                            @foreach ($levels as $level)
                                            <option value="<?= $level['id']; ?>" @if(isset($orderRequestData['studylabel_id']) && $orderRequestData['studylabel_id']==$level['id']) selected="selected" @endif><?= $level['level_name']; ?></option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <span id="studylabel_id_error" class="input-error"></span>
                                        <input type="hidden" id="uploadedFile" name="uploadedFile" value="{{$orderRequestData['uploadedFile'] ?? ''}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="grade_id" class="form-label">Desired grades</label>
                                        <select class="form-select select2" id="grade_id" name="grade_id" aria-label="Desired grades">
                                            <option selected value="">Select grade</option>
                                            @if(!empty($grades)):
                                            @foreach ($grades as $grade)
                                            <option value="<?= $grade['id']; ?>" @if(isset($orderRequestData['grade_id']) && $orderRequestData['grade_id']==$grade['id']) selected="selected" @endif>
                                                <?= $grade['grade_name']; ?></option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <span id="grade_id_error" class="input-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="title-task-box">
                                        <input id="title" name="title" type="text" class="form-control" placeholder="Add a title for your Task/Project" value="{{$orderRequestData['title'] ?? ''}}">
                                        <hr class="my-0">
                                        <textarea class="form-control" id="task" name="task" rows="3" placeholder="Tell us more about your task..">{{$orderRequestData['task'] ?? ''}}</textarea>
                                        <div id="attachment_list" style="text-align:center;">
                                            @if(isset($orderRequestData['uploadedFile']))
                                            <ul>
                                                <li>
                                                    <a href="{{$orderRequestData['uploadedFile']}}" target="_blank">{{$orderRequestData['uploadedFile']}}</a>
                                                </li>
                                            </ul>
                                            @endif
                                        </div>
                                        <div class="file-upload-box">
                                            <a for="taskFile" class="form-label" data-bs-toggle="modal" href="#fileuploadModal">Attach files</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p class="text-note">Upload your files here, if any. The file size limit is 100 Mb
                                        per file</p>
                                </div>
                                <div class="col-md-12 mb-3">

                                    <div class="row gy-3 hours-list mb-3">
                                        <div id="error_msg"></div>
                                    </div>
                                    <div id="datepicker1">
                                        <h4 Style="text-align:center;">
                                            <?php echo date('F'); ?>/<?php echo $effectiveDate = date('F', strtotime("+2 months", strtotime('Y-m-d'))); ?>
                                        </h4>
                                        <ul class="donate-now custom_date_div">
                                        </ul>
                                    </div>
                                    <input type="hidden" id="delivery_date" name="delivery_date" value="{{(isset($orderRequestData['delivery_date']) && $orderRequestData['delivery_date']!='NA')?$orderRequestData['delivery_date']:'12 hours'}}">
                                    <input type="hidden" id="delivery_price" name="delivery_price" value="{{$orderRequestData['delivery_price'] ?? 0}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="order-summary os-theme">
                            <h2>Order summary</h2>
                            <div class="row">
                                <div class="col-6">
                                    <p>Subject</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end subject_div">NA</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Referencing Style</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end referencing_style_div">NA</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Task type</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end task_type_div">NA</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Word count</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end no_of_words_div">200</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Level of study</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end studylabel_div">NA</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Grade required</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end grade_div">NA</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Delivery At</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end delivery_at_div">NA</p>
                                </div>
                            </div>
                            <hr class="opacity-25">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <p class="text-tp">Total Price:</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-ta text-end total_price">0</p>
                                </div>
                            </div>
                            <p class="text-center text-tcnp">
                                By proceeding to checkout you accept our <a href="{{route('terms-and-conditions')}}" class="link">Terms and
                                    Conditions</a> and <a href="{{route('privacy-policy')}}" class="link">Privacy Policy</a>.
                            </p>
                            <button type="submit" class="btn btn-primary w-100" id="btn_checkout" name="btn_checkout">Checkout</button>
                        </div>
                        <div class="whn-block">
                            <h3>What happens next?</h3>
                            <p>We will assign a tutor who's an expert in your subject. We'll keep you updated on the
                                progress.</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
<div class="modal fade" id="fileuploadModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="fileuploadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Upload Your Files</h5>
            </div>
            <form autocomplete="off" enctype="multipart/form-data" onsubmit="saveAttachment(event)">
                <div class="modal-body">
                    <div id="attachmentErrors"></div>
                    <div class="form-group">
                        <label for="attachment">Upload Zip attecment</label>
                        <input type="file" onchange="blankFileUploadUrl()" accept="application/zip, .doc, .docx,.pdf" class="form-control shadow-none" name="attachment" id="attachment">
                        <small id="emailHelp" class="form-text text-muted" style="font-size: 12px;">You can upload your attecment less then 100MB. Only Zip,Doc,Pdf</small>
                    </div>
                    <div class="text-center my-4 text-muted">OR</div>
                    <div class="form-group">
                        <label for="fileUploadUrl">Copy/Paste WeTransfer Url</label>
                        <input type="text" onchange="blankAttachment()" oninput="blankAttachment()" class="form-control shadow-none" placeholder="" name="file_upload_url" id="fileUploadUrl">
                        <small id="emailHelp" class="form-text text-muted" style="font-size: 12px;">More then 100MB file
                            go with wetransfer <a href="https://wetransfer.com/" target="_blank">click here</a></small>
                    </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-primary bg-secondary border-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@if(session()->has('payment_status') && session('payment_status') == 'Success')
<script>
    Swal.fire({
        title: "Thank You",
        text: "Your order has been added successfully.",
        icon: "success"
    });
</script>
@endif
@if(session()->has('payment_status') && session('payment_status') == 'Failed')
<script>
    Swal.fire({
        title: "Failed",
        text: "Your order has been failed.",
        icon: "error"
    });
</script>
@endif
<script>
    $(function() {
        pricecal();
        $('.select2').select2({
            placeholder: 'Select an option'
        });
        $("#subject_id").change(function() {
            pricecal();
        });
        $("#referencing_style_id").change(function() {
            pricecal();
        });

        $("#task_type_id").change(function() {
            pricecal();
        });
        $("#studylabel_id").change(function() {
            pricecal();
        });
        $("#grade_id").change(function() {
            pricecal();
        });
        $("#no_of_words").on("keyup", function() {
            var end = this.value;
            $('.no_of_words_div').text(end);
            pricecal();
        });
        $(document).on("click", ".delivery_at", function() {
            console.log('------', $(this).val())
            $('.total_price').text($(this).attr('rel'));
            $('#delivery_price').val($(this).attr('rel'));
            $('#delivery_date').val($(this).val());
            //$('.delivery_at_div').text($(this).val());
            if ($(this).val() != 'NA') {
                $.ajax({
                    type: 'GET',
                    url: "dateformat?date=" + $(this).val(),
                    processData: false,
                    contentType: false,
                    success: function(response1) {
                        $('.delivery_at_div').text(response1);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                    }
                });
            }
        });
        add = function(obj) {
            var count = $(obj).siblings('input').val();
            $(obj).siblings('input').val(parseInt(++count))
            //var at = $(obj).siblings('button.addToCard');
            //var valcount = at.attr("onClick").split(',');
            //at.attr("onClick", valcount[0] + "," + valcount[1] + "," + count + ")")
            $('.no_of_words_div').text(parseInt(count));
            pricecal();
        }
        minus = function(obj) {
            var count = $(obj).siblings('input').val();
            if (count > 0) {
                $(obj).siblings('input').val(parseInt(count - 1))
                var at = $(obj).siblings('button.addToCard');
                //var valcount = at.attr("onClick").split(',');
                //at.attr("onClick", valcount[0] + "," + valcount[1] + "," + parseInt(count - 1) + ")")
                $('.no_of_words_div').text(parseInt(count - 1));
                pricecal();
            }
        }
        $("#order_form").validate({
            // In 'rules' user have to specify all the             
            // constraints for respective fields            
            rules: {
                title1: {
                    required: true,
                },
                task1: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                //$('#invalid_login_data').hide();                
                var formData = $(form).serialize();
                $.post("{{route('neworder')}}", formData)
                    .done(function(response) {
                        if (response.status && response.status == 'order added successfully.' &&
                            response.order_id) {
                            window.location.href = 'payment?id=' + response.order_id;
                        } else {
                            //window.location.reload();
                        }
                    })
                    .fail(function(xhr, status, error) {
                        if (xhr.status == 401){
                            $("#loginModal").modal("show");
                        }
                        else if(xhr.status == 422) {
                            
                            
                            $.each(xhr.responseJSON.data, function(index, value) {
                                console.log('index',index)
                                $('#'+index+'_error').html(value[0]);
                            })

                        }
                    })
                    .always(function() {
                        //console.log('Request completed.');                                            
                    });
                return false;
            }
        });
    });
    function pricecal() {
        $('.subject_div').text($("#subject_id option:selected").text());
        $('.referencing_style_div').text($("#referencing_style_id option:selected").text());
        $('.task_type_div').text($("#task_type_id option:selected").text());
        $('.studylabel_div').text($("#studylabel_id option:selected").text());
        $('.grade_div').text($("#grade_id option:selected").text());
        $('.no_of_words_div').text($("#no_of_words").val());
        var data = $('#order_form').serialize();
        $.ajax({
            type: 'post',
            url: "{{ route('price') }}",
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                //before sending the request
            },
            success: function(response) {
                $('#error_msg').html('');
                if (response.success == 'false') {
                    /*let error = response.message;
                    $.each(error, function(index, value) {
                        $('#error_msg').append('<div class="alert alert-danger">' + value + '<div>');
                    });*/
                } else {

                    //$('#my_hour1').val(response.price.hour1);
                    //$('#my_hour2').val(response.price.hour2);
                    //$('#6_hours_div').text('6 Hours('+response.price.hour1+'₹)');
                    //$('#12_hours_div').text('12 Hours('+response.price.hour2+'₹)');
                    $('.custom_date_div').html(response.price.custom_date);
                    $('.total_price').text(response.price1);
                    $('#delivery_date').val(response.price.delivery_date);
                    $('#delivery_price').val(response.price.delivery_date_price);
                    $('.delivery_at_div').text(response.price.delivery_date);
                    if (response.price.delivery_date != 'NA') {
                        $.ajax({
                            type: 'GET',
                            url: "dateformat?date=" + response.price.delivery_date,
                            processData: false,
                            contentType: false,
                            success: function(response1) {

                                $('.delivery_at_div').text(response1);
                            },
                            error: function(xhr, status, error) {
                                // Handle errors
                            }
                        });
                    }
                }
            },
            complete: function(response) {
                //the request is completed
            }
        });
    }
    function saveAttachment(e) {
        e.preventDefault();
        let attachmentList = [];
        let attachment = $('#attachment')[0].files;
        let fileUploadUrl = $('#fileUploadUrl').val();
        if (attachment.length && attachment.length > 0) {
            if (attachment.length > 5) {
                $('#attachmentErrors').html(
                    '<div class="alert alert-danger">More than 5 attchment are not allowed.<div></div></div>');
            } else {
                let attachmentSize = 0;
                for (var item of attachment) {
                    attachmentSize = attachmentSize + item.size;
                }
                attachmentSize = (attachmentSize / 1024) / 1024;
                if (attachmentSize > 100) {
                    $('#attachmentErrors').html(
                        '<div class="alert alert-danger">Attachment size more than 100 MB are not allowed.<div></div></div>'
                    );
                } else {
                    sendAttachment('file', attachment);
                }
            }
        } else {
            if (fileUploadUrl && fileUploadUrl != null && fileUploadUrl != '') {
                sendAttachment('url', fileUploadUrl);
            } else {
                $('#attachmentErrors').html(
                    '<div class="alert alert-danger">Please provide a valid file or link.<div></div></div>');
            }
        }
    }
    function sendAttachment(attachmentType, attachmentData) {
        let attachmentFormData = new FormData();
        attachmentFormData.append('type', attachmentType);
        if (attachmentType == 'file') {
            for (let i = 0; i < $('#attachment')[0].files.length; i++) {
                attachmentFormData.append('attachment_' + i, $('#attachment')[0].files[i]);
            }
            attachmentFormData.append('total_file', $('#attachment')[0].files.length);
        } else {
            attachmentFormData.append('attachment', attachmentData);
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log(attachmentFormData)
        $.ajax({
            url: "process-attachment",
            type: "POST",
            cache: false,
            processData: false,
            contentType: false,
            data: attachmentFormData,
            success: function(sendAttachmentResponse) {
                attachmentData = '<ul>';
                (sendAttachmentResponse.attachment).forEach((item) => {
                    attachmentData += '<li><a href="' + item + '" target="_blank">' + item +
                        '</a></li>';
                    $('#uploadedFile').val(item);

                });
                attachmentData += '</ul>'
                $('#attachment_list').html(attachmentData);
                $('#fileuploadModal').modal('hide');
            },
            error: function(sendAttachmentErrors) {
                console.log(sendAttachmentErrors);
            }
        });
    }

    function blankFileUploadUrl() {
        $('#fileUploadUrl').val('');
        $('#attachmentErrors').html('');
    }

    function blankAttachment() {
        $('#attachment').val('');
        $('#attachmentErrors').html('');
    }
</script>
@endsection