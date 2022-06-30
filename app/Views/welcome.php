<!DOCTYPE html>
<html lang="en">
<head>
    <title>Amulet - Subscriptions</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/util.css">
</head>
    <body>

        <div id="checkout-modal" class="modal fade" tabindex="-1" aria-labelledby="checkoutModal" aria-hidden="true">
            <div class="modal-dialog" style="height: 100%"> 
                <div class="modal-content" style="height: 100%">
                    <div class="modal-header">
                        <h5 class="modal-title" id="checkout-modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe style="width: 100%; height: 100%;" id="checkout-iframe" title="Amulet - Subscription"></iframe> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="subscription-modal" tabindex="-1" role="dialog" aria-labelledby="subscription-modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subscription-modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" id="trxId">
                        <div class="form-group">
                            <label for="amount" class="col-form-label">Amount:</label>
                            <input type="text" class="form-control" id="amount" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fullname" class="col-form-label">Fullname:</label>
                            <input type="text" class="form-control" id="fullname">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">E-mail Address:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-form-label">Phone Number:</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btn-subscribe-submit" type="button" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container py-5">

                <header class="text-center mb-5 text-white">
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <h1>Amulet - Subscriptions</h1>
                        </div>
                    </div>
                </header>

                    <div class="row text-center align-items-end">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="bg-white p-5 rounded-lg shadow">
                            <h1 class="h6 text-uppercase font-weight-bold mb-4">Basic</h1>
                            <del class="h1 font-weight-bold">Rp. 40.000<span class="text-small font-weight-normal ml-2">/ Day</span></del>
                            <h2 class="h1 font-weight-bold">Rp. 30.000<span class="text-small font-weight-normal ml-2">/ Day</span></h2>

                            <div class="custom-separator my-4 mx-auto bg-danger"></div>

                            <ul class="list-unstyled my-5 text-small text-left">
                                <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i>SOS</li>
                                <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i>Share to Emergency</li>
                                <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i>Contact with Your Friends and Family</li>
                            </ul>
                            <a id="btn-subscribe-1" data-amount="Rp. 30.000" data-trx="Amulet-1" href="javascript:void(0)" class="btn btn-danger btn-block p-2 shadow rounded-pill">Subscribe</a>
                        </div>
                    </div>

                    <!-- Pricing Table-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="bg-white p-5 rounded-lg shadow">
                        <h1 class="h6 text-uppercase font-weight-bold mb-4">Pro</h1>
                        <del class="h1 font-weight-bold">Rp. 400.000<span class="text-small font-weight-normal ml-2">/ Month</span></del>
                        <h2 class="h1 font-weight-bold">Rp. 300.000<span class="text-small font-weight-normal ml-2">/ month</span></h2>

                        <div class="custom-separator my-4 mx-auto bg-danger"></div>

                        <ul class="list-unstyled my-5 text-small text-left">
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i>SOS</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i>Share to Emergency</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i>Contact with Your Friends and Family</li>
                        </ul>
                        <a id="btn-subscribe-30" data-amount="Rp. 300.000" data-trx="Amulet-30" href="javascript:void(0)" class="btn btn-danger btn-block p-2 shadow rounded-pill">Subscribe</a>
                    </div>

                    
                </div>
                <!-- END -->

                </div>
            </div>
        </section>

    
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    $("#btn-subscribe-1").click((e) => {
        e.preventDefault()
        $('#subscription-modal').modal('toggle')
        $('#subscription-modal-title').text("Subscription 1 Day")
        var amount = $(e.target).data("amount")
        var trx = $(e.target).data("trx")
        $('#amount').val(amount)
        $('#trxId').val(trx)
    })

    $("#btn-subscribe-30").click((e) => {
        e.preventDefault()
        $('#subscription-modal').modal('toggle')
        $('#subscription-modal-title').text("Subscription 1 Month")
        var amount = $(e.target).data("amount")
        var trx = $(e.target).data("trx")
        $('#amount').val(amount)
        $('#trxId').val(trx)
    })

    $("#btn-subscribe-submit").click((e) => {
        e.preventDefault()
        var trxId = "Amulet-1"
        var description = "Subscription-1-day"
        var notes = "Subscription-1-day"
        var fullname = $("#fullname").val()
        var email = $("#email").val()
        var phone = $("#phone").val()
        var amount = $("#amount").val() 
        var trxId = $("#trxId").val()


        if(fullname.trim() == "") {
            Swal.fire(
                'Fullname is required',
                '',
                'error'
            )
            return
        }

        var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

        if(email.trim() == "") {
            Swal.fire(
                'E-mail Address is required',
                '',
                'error'
            )
            return
        }

        if(!email.match(validRegex)) {
            Swal.fire(
                'E-mail Address is invalid. Ex: johndoe@gmail.com',
                '',
                'error'
            )
            return
        }

        if(phone.trim() == "") {
            Swal.fire(
                'Phone Number is required',
                '',
                'error'
            )
            return
        }

        var data = new FormData()
        data.append("trx_id", trxId)
        data.append("fullname", fullname)
        data.append("email", email)
        data.append("phone", phone)
        data.append("amount", amount.replace(/[^\d]/g, ''))
        data.append("amount_include_admin", false)
        data.append("expire_at", -1)
        data.append("merchant", "amulet")
        data.append("remark", "OTHERS")
        $(e.target).text("...")
        $.ajax({
            url: `<?= base_url() ?>/subscription`,
            type: 'POST',
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                $(e.target).text("Submit")
                var data = response.data
                $('#subscription-modal').modal('hide')
                $('#checkout-modal').modal('show')
                $('#checkout-modal-title').text(`Amulet - Subscription`)
                $('#checkout-iframe').attr('src', data.url)
            },  
            error: function(data) {
                $('#subscription-modal').modal('hide')
                $('#checkout-modal').modal('hide')
                $(e.target).text("Submit")
                Swal.fire(
                    'There was problem!',
                    '',
                    'error'
                )
                return
            }
        })
    }) 
</script>