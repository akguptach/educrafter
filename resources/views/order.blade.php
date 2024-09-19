@extends('layout.app')
@section('content')
<!-- main-area -->
<style>
    .input-error{
        color: red;
    }
.navmenu {
    display: none;
}

.btn-plus,
.btn-minus {
    background: #fff;
    color: #0056D1;
    border: 1px solid #000;
}

.account__check-remember input:checked {
    background-color: #10C379;
    border-color: #10C379;
}

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
    border: 1px solid #FFF4E4;
}

.donate-now input[type="radio"] {
    opacity: 0.011;
    z-index: 100;
}

.donate-now input[type="radio"]:checked+label {
    background: #3B71ED;
    color: #ffffff;
    border: 1px solid #3B71ED;
    height: 81px;
}

.donate-now label {
    padding: 5px;
    border: 1px solid #FFF4E4;
    cursor: pointer;

}

.donate-now label:hover {
    background: #FFF4E4;
}

.donate-now input[type="radio"]:hover {
    background: #FFF4E4;
}

.summary-table td {
    padding: 10px;
    color: #000;
}
</style>
<main class="main-area fix">



    <!-- checkout-area -->
    <div class="checkout__area section-py-120" style="background:#FFF4E4;">
        <div class="container">
            <form class="customer__form-wrap" id="order_form" name="order_form" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-lg-7">


                        @php($orderSessionData = (session('orderRequestData'))?session('orderRequestData'):[])

                        @php($orderRequestData = array_merge($orderSessionData,app('request')->input()))

                        @csrf
                        <input type="hidden" id="valid_coupon_code" name="valid_coupon_code" />
                        <input type="hidden" id="uploadedFile" name="uploadedFile"
                            value="{{$orderRequestData['uploadedFile'] ?? ''}}" />
                        <input type="hidden" id="delivery_date" name="delivery_date"
                            value="{{(isset($orderRequestData['delivery_date']) && $orderRequestData['delivery_date']!='NA')?$orderRequestData['delivery_date']:'60 days'}}">
                        <input type="hidden" id="delivery_price" name="delivery_price"
                            value="{{$orderRequestData['delivery_price'] ?? 0}}">
                        <span class="title">Task Details</span>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp select-grp">
                                    <label for="country-name">Subject *</label>
                                    <select class="country-name" id="subject_id" name="subject_id" aria-label="Subject">
                                        <option selected value="">Select subject</option>
                                        @if(!empty($subjects)):
                                        @foreach ($subjects as $subject1)
                                        <option value="<?= $subject1['id']; ?>"
                                            @if(isset($orderRequestData['subject_id']) &&
                                            $orderRequestData['subject_id']==$subject1['id']) selected="selected"
                                            @endif><?= $subject1['subject_name']; ?></option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <span id="subject_id_error" class="input-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp select-grp">
                                    <label for="country-name">Referencing style *</label>
                                    <select class="country-name" id="referencing_style_id" name="referencing_style_id">
                                        <option selected value="">Select Referencing Style</option>
                                        @if(!empty($referencings)): @foreach ($referencings as $referencing) <option
                                            value="<?= $referencing['id']; ?>"
                                            @if(isset($orderRequestData['referencing_style_id']) &&
                                            $orderRequestData['referencing_style_id']==$referencing['id'])
                                            selected="selected" @endif><?= $referencing['style']; ?></option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <span id="referencing_style_id_error" class="input-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp select-grp">
                                    <label for="country-name">Task type *</label>
                                    <select class="country-name" id="task_type_id" name="task_type_id"
                                        aria-label="taskType">
                                        <option selected value="">Select task type</option>
                                        @if(!empty($task_types)):
                                        @foreach ($task_types as $task_type)
                                        <option value="<?= $task_type['id']; ?>"
                                            @if(isset($orderRequestData['task_type_id']) &&
                                            $orderRequestData['task_type_id']==$task_type['id']) selected="selected"
                                            @endif><?= $task_type['type_name']; ?></option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <span id="task_type_id_error" class="input-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="country-name">Word count *</label>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-secondary btn-minus" onclick="minus(this)"
                                            type="button">-</button>
                                        <input type="text" class="form-control" placeholder=""
                                            aria-label="taskDate text with button addon"
                                            aria-describedby="button-addon1"
                                            value="{{@$orderRequestData['no_of_words'] ??  200}}" id="no_of_words"
                                            name="no_of_words"
                                            style="width: 100px;text-align: center;border-top: 1px solid;border-bottom: 1px solid;">
                                        <button class="btn btn-outline-secondary btn-plus" onclick="add(this)"
                                            type="button">+</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp select-grp">
                                    <label for="country-name">Level of study *</label>
                                    <select class="country-name" id="studylabel_id" name="studylabel_id"
                                        aria-label="studylabel_id">
                                        <option selected value="">Select level of study</option>
                                        @if(!empty($levels)):
                                        @foreach ($levels as $level)
                                        <option value="<?= $level['id']; ?>"
                                            @if(isset($orderRequestData['studylabel_id']) &&
                                            $orderRequestData['studylabel_id']==$level['id']) selected="selected"
                                            @endif><?= $level['level_name']; ?></option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <span id="studylabel_id_error" class="input-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp select-grp">
                                    <label for="country-name">Desired grades *</label>
                                    <select class="country-name" id="grade_id" name="grade_id"
                                        aria-label="Desired grades">
                                        <option selected value="">Select grade</option>
                                        @if(!empty($grades)):
                                        @foreach ($grades as $grade)
                                        <option value="<?= $grade['id']; ?>" @if(isset($orderRequestData['grade_id']) &&
                                            $orderRequestData['grade_id']==$grade['id']) selected="selected" @endif>
                                            <?= $grade['grade_name']; ?></option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <span id="grade_id_error" class="input-error"></span>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="border: 1px solid #000;border-radius: 8px;">
                                    <div class="form-grp">

                                        <input type="text" id="title" name="title"
                                            placeholder="Add a title to your Task/Project."
                                            value="{{$orderRequestData['title'] ?? ''}}">
                                        <hr>
                                    </div>

                                    <div class="form-grp">

                                        <textarea id="task" name="task"
                                            placeholder="Tell us more about your task..">{{$orderRequestData['task'] ?? ''}}</textarea>
                                    </div>

                                    <div id="attachment_list">
                                        @if(isset($orderRequestData['uploadedFile']))

                                        @include('student_components.download_link',
                                        [
                                        'attachment'=>$orderRequestData['uploadedFile'],
                                        'attachmentTitle'=>"Your attachments"
                                        ])


                                        @endif
                                    </div>
                                    <div class="file-upload-box" style="text-align: center; margin-bottom: 10px;">
                                        <a style="padding: 6px 10px;" for="taskFile" class="form-label btn"
                                            data-bs-toggle="modal" href="#fileuploadModal"><i class="fa fa-paperclip"
                                                aria-hidden="true"></i> Attach files</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="title title-two">Upload your files here, if any. The file size limit is 25 Mb per
                            file</span>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="border: 1px solid #000;border-radius: 8px;margin-top: 10px;padding:10px;">
                                    <div class="form-grp">
                                        <p style="font-size:18px;">You will get your order on</p>
                                        <p style="font-size:32px;" class="delivery_at_title"></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <p style="text-align:center;">Choose your delivery time</p>

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


                            </div>

                        </div>



                    </div>
                    <div class="col-lg-5">
                        <div class="order__info-wrap">
                            <h2 class="title">Order summary</h2>
                            <ul class="list-wrap">
                                <li>Subject <span class="subject_div">NA</span></li>
                                <li>Referencing Style <span class="referencing_style_div">NA</span></li>
                                <li>Task type <span class="task_type_div">NA</span></li>
                                <li>Word count <span class="no_of_words_div">200</span></li>

                                <li>Level of study <span class="studylabel_div">NA</span></li>
                                <li>Grade required <span class="grade_div">NA</span></li>
                                <li>Delivery At <span class="delivery_at_div">NA</span></li>
                                <li>Total Price <span class="total_price">0</span></li>
                                <li id="discount_div" style="display:none;">Discount Price <span
                                        id="discountprice">0</span>
                                </li>

                            </ul>

                            <div class="row " id="couponBox" style="display: none;">
                                <div class="coupon__code-form" style="display: block;">
                                    <div class="col-sm-12">
                                        <p>Coupon Code</p>
                                        <div style="width:78%;float:left;">
                                            <input type="text" placeholder="Coupon code" id="coupon_code"
                                                name="coupon_code" style="width:100%"
                                                value="{{@$orderRequestData['coupon_code']}}">
                                            <p id="coupon_code_error"></p>
                                        </div>
                                        <div style="width:20%;float:left;">
                                            <button type="button" id="apply_coupon" name="apply_coupon" class="btn"
                                                style="width: 100%;padding: 8px;border-radius: 8px;">Apply</button>
                                            <button style="display:none;width: 100%;padding: 8px;border-radius: 8px;"
                                                type="button" class="btn btn-primary" id="remove_coupon"
                                                name="remove_coupon">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="account__check" style="display: none;" id="wallet-check-section">
                                <div class="account__check-remember">

                                    <?php
                                    $userId = @Auth::user()->id;
                                    $credits = App\Models\WalletTransaction::where('user_id', $userId)->where('type','credit')->sum('amount');
                                    $debits = App\Models\WalletTransaction::where('user_id', $userId)->where('type','debit')->sum('amount');
                                    $balance = number_format($credits-$debits,2);
                                    ?>
                                    @if($balance > 0)
                                    <input type="checkbox" class="form-check-input" value="1" id="wallet-check"
                                        name="wallet_check" @if(isset($orderRequestData['wallet_check']))
                                        checked="checked" @endif>
                                    <label for="wallet-check" class="form-check-label" style="font-size:16px">Use your
                                        wallet balance: <b>${{$balance}}</b></label>
                                    @endif
                                </div>
                            </div>

                            <p Style="font-size:16px"><span
                                    style="color:#000;float:left;font-size:18px;font-weight:700;">Total Price:</span>
                                <span style="color:#10C379;float:right;font-size:18px;font-weight:700;"
                                    id="final_price">
                                    0
                                </span>
                            </p>
                            <button type="button" class="btn" id="btn_checkout" name="btn_checkout">Place order</button>

                            <p style="text-align:center;">By proceeding to checkout you accept our <a
                                    href="{{route('terms-and-conditions')}}" target="_blank">Terms and Conditions</a>
                                and <a href="{{route('privacy-policy')}}" target="_blank">Privacy Policy.</a></p>

                            <div style="background: #F1F9FF;text-align:center;padding:10px;">
                                <h3 style="font-size:14px;">What happens next?</h3>
                                <p style="font-size:12px;">We will assign a tutor who's an <b>expert</b> in your
                                    subject.
                                    We'll keep you updated on the
                                    progress.</p>
                            </div>

                        </div>

                    </div>


                </div>
            </form>
        </div>
    </div>
    <!-- checkout-area-end -->

</main>
<!-- main-area-end -->

<div class="modal fade" id="fileuploadModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="fileuploadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Upload Your Files</h5>
            </div>
            <form autocomplete="off" enctype="multipart/form-data" onsubmit="saveAttachment(event)">
                <div class="modal-body">
                    <div id="attachmentErrors"></div>
                    
                    <div class="form-group">
                        <label for="attachment">Upload Zip attachment</label>
                        <input type="file" accept="application/zip, .doc, .docx,.pdf, .jpeg, .jpg"
                            class="form-control shadow-none" name="attachment" id="attachment">
                        <small id="emailHelp" class="form-text text-muted" style="font-size: 12px;">You can upload your
                            attecment less then 25MB. Only Zip,Doc,Pdf, JPG, JPEG</small>
                    </div>
                    <div style="border: 1px #6a73fa solid;display:none;" id="uploadProgress">
                        <div id="uploadProgressBar"
                            style="height: 20px;background:#6a73fa; text-align:center;color:#fff;">
                        </div>
                    </div>

                    <div class="text-center my-4 text-muted">AND</div>
                    <div class="form-group">
                        <label for="fileUploadUrl">Copy/Paste WeTransfer Url</label>
                        <input type="text" class="form-control shadow-none" placeholder="" name="file_upload_url"
                            id="fileUploadUrl">
                        <small id="emailHelp" class="form-text text-muted" style="font-size: 12px;">More then 25MB file
                            go with wetransfer <a href="https://wetransfer.com/" target="_blank">click here</a></small>
                    </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-primary bg-secondary border-secondary"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="order_error" tabindex="-1" role="dialog" aria-labelledby="order_error" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="msg" style="font-size: 16px;text-align: center;"></div>
                <div style="text-align: center;"><button style="margin-top: 20px;" type="button"
                        class="btn btn-secondary" data-bs-dismiss="modal" data-dismiss="modal">Close</button></div>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="order_summary" tabindex="-1" role="dialog" aria- labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="">
            <div class="modal-header" style="display: block;">
                <h5 class="modal-title text-center" style="width: 100%;float: left;font-size: 30px;">Order summary</h5>

            </div>
            <div class="modal-body" style="padding:40px;">
                <table style="width:400px;" class="summary-table">
                    <tr>
                        <td width="50%">Subject:</td>
                        <td id="summary_suject">dd</td>
                    </tr>

                    <tr>
                        <td>Referencing Style:</td>
                        <td id="summary_referencing_style">dd</td>
                    </tr>


                    <tr>
                        <td>Task type:</td>
                        <td id="summary_task_type"></td>
                    </tr>


                    <tr>
                        <td>Word count:</td>
                        <td id="summary_word_count"></td>
                    </tr>

                    <tr>
                        <td>Level of study</td>
                        <td id="summary_level_of_study"></td>
                    </tr>


                    <tr>
                        <td>Grade required</td>
                        <td id="summary_grade_required"></td>
                    </tr>


                    <tr>
                        <td>Delivery At</td>
                        <td id="summary_delivery_at"></td>
                    </tr>

                    <tr>
                        <td>Total Price:</td>
                        <td id="summary_total_price"></td>
                    </tr>
                    <tr>
                        <td><button type="button" data-bs-toggle="modal" class="btn btn-primary w-100" id="btn_pay"
                                name="btn_checkout">Pay Now
                            </button></td>
                        <td><button type="button" data-bs-toggle="modal" class="btn w-100" id="btn_pay_cancel"
                                name="btn_checkout" style="background-color: #6D747D;">Cancel
                            </button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@php($deliveryAt = \Carbon\Carbon::parse(new \DateTime())->format('Y-m-d'))
@if($orderRequestData && isset($orderRequestData['delivery_date']))
@php($tempDate = explode('-', $orderRequestData['delivery_date']))
@if(count($tempDate) == 3)
@php($deliveryAt=@$orderRequestData['delivery_date'])
@endif
@endif

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
var coupon = "{{@$orderRequestData['coupon_code']}}"
var delivery_date_val = "{{$deliveryAt}}"
window.onhashchange = function() {
    pricecal();

    if (delivery_date_val) {
        var dateFormat = moment(new Date(delivery_date_val)).format('DD MMMM dddd');
        $('.delivery_at_title').html(dateFormat);
    }

    if (coupon)
        applyCoupon();
}
$(function() {

    $(document).on('click', '.delivery_at', function() {
        var date = $(this).val();
        var dateFormat = moment(new Date(date)).format('DD MMMM dddd');
        $('.delivery_at_title').html(dateFormat);
    })

    $('#btn_pay_cancel').click(function() {
        $('#order_summary').modal('hide');
    });


    $('#btn_pay').click(function() {
        $('#order_form').submit();
    });

    $('#btn_checkout').click(function() {

        var formData = $('#order_form').serialize();
        $.ajax({
            type: 'POST',
            url: "{{route('orderValidate')}}",
            data: formData,
            success: function(response) {
                showSummary();
            },
            error: function(xhr, status, error) {
                if (xhr.status == 401) {
                    $("#loginModal").modal("show");
                } else if (xhr.status == 422) {
                    $.each(xhr.responseJSON.data, function(index, value) {
                        console.log('index', index)
                        $('#' + index + '_error').html(value[0]);
                    })
                } else if (xhr.status == 403) {
                    $('#order_error').modal("show");
                    $('#order_error #msg').html(xhr.responseJSON.status);
                }
            }
        });
    })



    $('#wallet-check').click(function() {
        pricecal();

    });



    $('#remove_coupon').click(function() {
        $('#remove_coupon').hide();
        $('#apply_coupon').show();

        $('#coupon_code_error').html('');
        $('#valid_coupon_code').val('');
        $('#coupon_code').val('');
        pricecal();
    })

    $('#apply_coupon').click(function() {
        applyCoupon();

    });


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
                    pricecal();
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
                        window.location.href = "{{ route('pay') }}?order_id=" + response
                            .order_id;
                    } else {
                        //window.location.reload();
                    }
                })
                .fail(function(xhr, status, error) {
                    if (xhr.status == 401) {
                        $("#loginModal").modal("show");
                    } else if (xhr.status == 422) {


                        //$("#order_error #msg").html(xhr.responseJSON.status)
                        $.each(xhr.responseJSON.data, function(index, value) {
                            console.log('index', index)
                            $('#' + index + '_error').html(value[0]);
                        })

                    } else if (xhr.status == 403) {
                        $('#order_error').modal("show");
                        $('#order_error #msg').html(xhr.responseJSON.status);
                    }
                })
                .always(function() {
                    //console.log('Request completed.');                                            
                });
            return false;
        }
    });
});

function applyCoupon() {
    $('#coupon_code_error').html('');
    $('#valid_coupon_code').val('');

    // var values = {};
    // $.each($("#order_form").serializeArray(), function(i, field) {
    //     values[field.name] = field.value;
    // });
    // var getValue = function(valueName) {
    //     return values[valueName];
    // };
    // var delivery_price = getValue("delivery_price");


    var data = $('#order_form').serialize();
    data += "&coupon_code=" + $('#coupon_code').val();

    $.ajax({
        type: 'POST',
        url: "{{route('validateCouponCode')}}",
        data: data,
        success: function(response) {
            $('#valid_coupon_code').val($('#coupon_code').val());
            pricecal();
            $('#remove_coupon').show();
            $('#apply_coupon').hide();

            $('#coupon_code_error').html(
                '<span style="font-size:12px;color:#10C379;">' + response.message +
                '</span>');
        },
        error: function(xhr, status, error) {
            if (xhr.status == 401) {
                $("#loginModal").modal("show");
            } else {
                $('#coupon_code_error').html('<span style="color:red;font-size:12px;">' +
                    xhr.responseJSON.message + '</span>');
            }
        }
    });
}

function pricecal() {
    $('.subject_div').text($("#subject_id option:selected").text());
    $('.referencing_style_div').text($("#referencing_style_id option:selected").text());
    $('.task_type_div').text($("#task_type_id option:selected").text());
    $('.studylabel_div').text($("#studylabel_id option:selected").text());
    $('.grade_div').text($("#grade_id option:selected").text());
    $('.no_of_words_div').text($("#no_of_words").val());

    var walletCheck = 0;
    if ($('#wallet-check').is(':checked'))
        walletCheck = 1;

    var data = $('#order_form').serialize();
    data += "&wallet_check=" + walletCheck;
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

                $('.total_price').text(response.price.delivery_date_price);
                $('#delivery_date').val(response.price.delivery_date);
                $('#delivery_price').val(response.price.delivery_date_price);
                $('.delivery_at_div').text(response.price.delivery_date);

                $('#final_price').html(response.finalPrice);

                if (response.price.delivery_date_price != 0) {
                    $('#couponBox').show();
                    $('#wallet-check-section').show();
                } else {
                    $('#couponBox').hide();
                    $('#wallet-check-section').hide();
                }

                if (response.discount > 0) {
                    $('#discount_div').show();
                    $('#discountprice').html(response.discountprice);
                    $('.total_price').attr('style', 'text-decoration: line-through;')
                } else {
                    $('#discount_div').hide();
                    $('#discountprice').html('');
                    $('.total_price').removeAttr('style')
                }

                if (response.price.delivery_date != 'NA' && response.price.delivery_date != '12 hours') {
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


function showSummary() {
    $('#order_summary').modal('show');
    $('#summary_suject').html($('.subject_div').html());
    $('#summary_referencing_style').html($('.referencing_style_div').html());
    $('#summary_task_type').html($('.task_type_div').html());
    $('#summary_word_count').html($('.no_of_words_div').html());
    $('#summary_level_of_study').html($('.studylabel_div').html());
    $('#summary_grade_required').html($('.grade_div').html());
    $('#summary_delivery_at').html($('.delivery_at_div').html());
    $('#summary_total_price').html($('#final_price').html());
}

function saveAttachment(e) {
    $('#attachmentErrors').html('')
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
            
            if (attachmentSize > 25) {
                $('#attachmentErrors').html(`<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    Attachment size more than 25 MB are not allowed.
  </div>
</div>`);
            } else {

                sendAttachment(attachment, fileUploadUrl);
            }
        }
    } else if (fileUploadUrl) {
        sendAttachment(null, fileUploadUrl);
    }
}


function uploadProgressHandler(event) {
    // $("#loaded_n_total").html("Uploaded " + event.loaded + " bytes of " + event.total);
    var percent = (event.loaded / event.total) * 100;
    var progress = Math.round(percent);
    //$("#uploadProgressBar").html(progress);
    $("#uploadProgressBar").css("width", progress + "%");
    //$("#status").html(progress + "% uploaded... please wait");
}

function sendAttachment(attachmentFile, attachmentUrl) {

    let attachmentFormData = new FormData();
    if (attachmentFile) {
        for (let i = 0; i < $('#attachment')[0].files.length; i++) {
            attachmentFormData.append('attachment_' + i, $('#attachment')[0].files[i]);
        }
        attachmentFormData.append('total_file', $('#attachment')[0].files.length);
    }
    if (attachmentUrl) {
        attachmentFormData.append('attachmentUrl', attachmentUrl);
    }


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var attachmentJson = [];
    $('#uploadProgress').show();
    $.ajax({
        url: "process-attachment",
        type: "POST",
        cache: false,
        processData: false,
        contentType: false,
        data: attachmentFormData,
        xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress",
                uploadProgressHandler,
                false
            );
            return xhr;
        },
        success: function(sendAttachmentResponse) {

            $('#uploadProgress').hide();
            attachmentData = `<ul style="background: #fff;font-size: 14px;">
            <li class="list-group-item">
            <b>Your Attachments</b>`;


            attachmentData += '<ul>';
            var i = 0;
            (sendAttachmentResponse.attachment).forEach((item) => {
                i++;
                // attachmentData += '<li><a href="' + item + '" target="_blank">Attechemnt File' + i +
                //  '</a></li>';

                attachmentData += `<li>
                <div>
                    <a href="${item}" target="_blank" class="float-right1 download-attachment"
                        style="overflow-wrap: anywhere;"><i class='fas fa-file-download'></i>
                        View attachment</a>
                </div>
            </li>`;



                attachmentJson.push({
                    url: item
                })

            });
            attachmentData += `</li></ul>`
            $('#uploadedFile').val(JSON.stringify(attachmentJson));
            attachmentData += '</ul>'
            $('#attachment_list').html(attachmentData);
            $('#fileuploadModal').modal('hide');
        },
        error: function(sendAttachmentErrors) {
            
            $('#uploadProgress').hide();
            $('#attachmentErrors').html(`<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    There was an error in file uploading. make sure you are uploading a valid file
  </div>
</div>`);
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
@endsection