<?php include('../connection.php'); ?>

<!DOCTYPE html>
<html lang="zxx" class="js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>npontu choir | users</title>
<style>

.center {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
}

.cardd {
  /* width: 450px; */
  height: 250px;
  background-color: #fff;
  background: linear-gradient(#f8f8f8, #fff);
  box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
  /* border-radius: 6px; */
  overflow: hidden;
  position: relative;
  /* margin: 1.5rem; */
}

.cardd h1 {
  text-align: center;
}

.cardd .additional {
  position: absolute;
  width: 150px;
  height: 100%;
  background: linear-gradient(#dE685E, #EE786E);
  transition: width 0.4s;
  overflow: hidden;
  z-index: 2;
}

.cardd.green .additional {
  background: linear-gradient(#ffffff, #797979);
}


/* .cardd:hover .additional {
  width: 100%;
  border-radius: 0 5px 5px 0;
} */

.cardd .additional .user-card {
  width: 150px;
  height: 100%;
  position: relative;
  float: left;
}

.cardd .additional .user-card::after {
  content: "";
  display: block;
  position: absolute;
  top: 10%;
  right: -2px;
  height: 80%;
  border-left: 2px solid rgba(0,0,0,0.025);
}

.cardd .additional .user-card .level,
.cardd .additional .user-card .points {
  top: 15%;
  color: #fff;
  text-transform: uppercase;
  font-size: 0.75em;
  font-weight: bold;
  background: rgba(0,0,0,0.15);
  padding: 0.125rem 0.75rem;
  border-radius: 100px;
  white-space: nowrap;
}

.cardd .additional .user-card .points {
  top: 85%;
}

.cardd .additional .user-card svg {
  top: 50%;
}

.cardd .additional .more-info {
  width: 300px;
  float: left;
  position: absolute;
  left: 150px;
  height: 100%;
}

.cardd .additional .more-info h1 {
  color: #fff;
  margin-bottom: 0;
}

.cardd.green .additional .more-info h1 {
  color: #224C36;
}

.cardd .additional .coords {
  margin: 0 1rem;
  color: #fff;
  font-size: 1rem;
}

.cardd.green .additional .coords {
  color: #325C46;
}

.cardd .additional .coords span + span {
  float: right;
}

.cardd .additional .stats {
  font-size: 2rem;
  display: flex;
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  right: 1rem;
  top: auto;
  color: #fff;
}

.cardd.green .additional .stats {
  color: #325C46;
}

.cardd .additional .stats > div {
  flex: 1;
  text-align: center;
}

.cardd .additional .stats i {
  display: block;
}

.cardd .additional .stats div.title {
  font-size: 0.75rem;
  font-weight: bold;
  text-transform: uppercase;
}

.cardd .additional .stats div.value {
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 1.5rem;
}

.cardd .additional .stats div.value.infinity {
  font-size: 2.5rem;
}

.cardd .general {
  width: 310px;
  height: 100%;
  position: absolute;
  top: 22px;
  margin-top: 4%;
  right: 0;
  z-index: 1;
  box-sizing: border-box;
  padding: 1rem;
  padding-top: 0;
}

.cardd .general .more {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
  font-size: 0.9em;
}
.img-thumbnail{
    width:110px;
    height:110px;
    margin-top: 15%;
    margin-left: 12.5%;
}

</style>

    <?php include('header.php'); ?>

    <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                    <div class="nk-block nk-block-lg" style="margin-top: 45px;">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">User Management</h4>
                                            </div>
                                        </div>


                                        <div class="card card-preview table-responsive">
                                            <div class="card-inner table-responsive">

                                                <table id="consumers" class="display nowrap nk-tb-list nk-tb-ulist"
                                                    data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col">
                                                                <span class="sub-text">User</span>
                                                            </th>
                                                            <th class="nk-tb-col tb-col-md">
                                                                <span class="sub-text">Status</span>
                                                            </th>
                                                            <th class="nk-tb-col tb-col-md">
                                                                <span class="sub-text">Action</span>
                                                            </th>
                                                            <!-- <th class="nk-tb-col nk-tb-col-tools text-right">Action</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                </table>

                                                <!-- consumer details modal start -->

                                                <div class="modal fade" tabindex="-1" id="consumerDetails">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">User Details</h5><a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                                            </div>
                                                            <div class="modal-body">

                                                            <i id="loadMore" style="display: none;" class="col-sm-12 fa fa-spinner fa-spin text-center"></i>

                                                            <div class="cardd green" id="showData">
                                                            <!-- <div class="row gx-6 gy-4"> -->
                                                            <div class="row">
                                                                <div class="col-6" style="position: unset !important;">
                                                                <div class="additional">
                                                                    <div class="user-card">
                                                                        <div class="level center">
                                                                            USER
                                                                        </div>
                                                                        <img id="profileAvatar" style="object-fit: cover;" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-6">
                                                                <div class="general">
                                                                    <h6 style="color: #8094ae;" class="timeline-head" id="name"></h6>
                                                                    <h6 style="color: #8094ae;" class="timeline-head" id="email"></h6>
                                                                    <h6 style="color: #8094ae;" class="timeline-head" id="accountStatus"></h6>
                                                                </div>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- consumer details modal end -->

                                                <!-- suspend consumer modal start -->

                                                <div class="modal fade" tabindex="-1" id="suspendConsumer">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Suspend Consumer</h5><a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                                            </div>
                                                            <div class="modal-body">

                                                            <i id="loadMoreSuspendConsumer" style="display: none;" class="col-sm-12 fa fa-spinner fa-spin text-center"></i>

                                                            <div class="cardd green" id="showDataSuspendConsumer">
                                                            <div class="row">
                                                                <div class="col-6" style="position: unset !important;">
                                                                <div class="additional">
                                                                <div class="user-card">
                                                                    <div class="level center">
                                                                    CONSUMER
                                                                    </div>
                                                                    <img id="profileAvatarSuspendConsumer" style="object-fit: cover;" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                                                                </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-6">
                                                                <div class="general">
                                                                <h6 style="color: #8094ae; display: none;" class="timeline-head" id="nameSuspendConsumerUuid"></h6>
                                                                <h6 style="color: #8094ae; display: none;" class="timeline-head" id="nameSuspendConsumerForEmailDraft"></h6>
                                                                <h6 style="color: #8094ae; display: none;" class="timeline-head" id="emailSuspendConsumerForEmailDraft"></h6>

                                                                <h6 style="color: #8094ae;" class="timeline-head" id="nameSuspendConsumer"></h6>
                                                                <h6 style="color: #8094ae;" class="timeline-head" id="emailSuspendConsumer"></h6>
                                                                <h6 style="color: #8094ae;" class="timeline-head" id="accountStatusSuspendConsumer"></h6>

                                                                </div>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            </div>
                                                            <div style="cursor: pointer;" id="suspendConsumerExtra" class="modal-footer bg-light"><span style="display: none;" id="suspendConsumerExtraHide" class="sub-text">Suspend Consumer</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- suspend consumer modal end -->

                                                <!-- activate consumer modal start -->

                                                <div class="modal fade" tabindex="-1" id="activateConsumer">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Approve User</h5><a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                                            </div>
                                                            <div class="modal-body">

                                                            <i id="loadMoreActivateConsumer" style="display: none;" class="col-sm-12 fa fa-spinner fa-spin text-center"></i>

                                                            <div class="cardd green" id="showDataActivateConsumer">
                                                            <div class="row">
                                                                <div class="col-6" style="position: unset !important;">
                                                                <div class="additional">
                                                                <div class="user-card">
                                                                    <div class="level center">
                                                                    USER
                                                                    </div>
                                                                    <img id="profileAvatarActivateConsumer" style="object-fit: cover;" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                                                                </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-6">
                                                                <div class="general">
        
                                                                <h6 style="color: #8094ae; display: none;" class="timeline-head" id="nameActivateConsumerUuid"></h6>
                                                                <h6 style="color: #8094ae; display: none;" class="timeline-head" id="nameActivateConsumerForEmailDraft"></h6>
                                                                <h6 style="color: #8094ae; display: none;" class="timeline-head" id="emailActivateConsumerForEmailDraft"></h6>

                                                                <h6 style="color: #8094ae;" class="timeline-head" id="nameActivateConsumer"></h6>
                                                                <h6 style="color: #8094ae;" class="timeline-head" id="emailActivateConsumer"></h6>
                                                                <h6 style="color: #8094ae;" class="timeline-head" id="accountStatusActivateConsumer"></h6>
                                                                </div>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            </div>
                                                            <div style="cursor: pointer;" id="activateConsumerExtra" class="modal-footer bg-light"><span id="activateConsumerExtraHide" style="display: none;" class="sub-text">Approve Consumer</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- activate consumer modal end -->

                                                <!-- delete consumer modal start -->

                                                <div class="modal fade" tabindex="-1" id="deleteConsumer">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Delete Consumer</h5><a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                                            </div>
                                                            <div class="modal-body">

                                                            <i id="loadMoreDeleteConsumer" style="display: none;" class="col-sm-12 fa fa-spinner fa-spin text-center"></i>

                                                            <div class="cardd green" id="showDataDeleteConsumer">
                                                            <div class="row">
                                                                <div class="col-6" style="position: unset !important;">
                                                                <div class="additional">
                                                                <div class="user-card">
                                                                    <div class="level center">
                                                                    CONSUMER
                                                                    </div>
                                                                    <div class="points center">
                                                                    0 PURCHASE(S)
                                                                    </div>
                                                                    <img id="profileAvatarDeleteConsumer" style="object-fit: cover;" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                                                                </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-6">
                                                                <div class="general">

                                                                <h6 style="color: #8094ae; display: none;" class="timeline-head" id="nameDeleteConsumerEmailDraft"></h6>
                                                                <h6 style="color: #8094ae; display: none;" class="timeline-head" id="emailDeleteConsumerEmailDraft"></h6>
                                                                <h6 style="color: #8094ae; display: none;" class="timeline-head" id="uuidDeleteConsumerEmailDraft"></h6>

                                                                <h6 style="color: #8094ae;" class="timeline-head" id="nameDeleteConsumer"></h6>
                                                                <h6 style="color: #8094ae;" class="timeline-head" id="emailDeleteConsumer"></h6>
                                                                <h6 style="color: #8094ae;" class="timeline-head" id="accountStatusDeleteConsumer"></h6>
                                                                <h6 style="color: #8094ae;" class="timeline-head" id="signin_typeDeleteConsumer"></h6>
                                                                <h6 style="color: #8094ae;" class="timeline-head" id="phoneNumberDeleteConsumer"></h6>
                                                                <h6 style="color: #8094ae;" class="timeline-head" id="ghanaPostDeleteConsumer"></h6>

                                                                </div>
                                                                </div>
                                                                </div>
                                                            </div>

                                                            </div>
                                                            <!-- <div class="nk-modal-action mt-5"><a href="#" class="btn btn-lg btn-mw btn-light">Suspend</a></div> -->
                                                            <div style="cursor: pointer;" id="deleteConsumerExtra" class="modal-footer bg-light"><span style="display: none;" id="deleteConsumerExtraHide" class="sub-text">Delete Consumer</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- delete consumer modal end -->

                                                <!-- suspend consumer email modal start -->

                                                <div class="modal fade" tabindex="-1" id="sendConsumerEmail">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Suspend Consumer</h5><a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                                            </div>
                                                            <div class="modal-body">

                                                            <form onsubmit="event.preventDefault(); loginFunction();" method="POST" id="authLoginForm">

                                                                <div class="form-group">
                                                                    <div class="form-label-group"><label class="form-label" for="emailContent">Reason for account suspension</label></div>
                                                                    <textarea id="extraComment" class="form-control form-control-lg" placeholder="Reason for account suspension"></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit" id="suspendConsumerBtn" class="btn btn-lg btn-primary btn-block">Suspend Consumer</button>
                                                                </div>

                                                            </form>

                                                            </div>
                                                            <div class="modal-footer bg-light"><span class="sub-text">Extra Comment will be included in email sent to consumer</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- suspend consumer email modal end -->

                                                <!-- activate consumer email modal start -->

                                                <div class="modal fade" tabindex="-1" id="sendConsumerActivateEmail">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Activate Consumer</h5><a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                                            </div>
                                                            <div class="modal-body">

                                                            <form onsubmit="event.preventDefault(); activateFunction();" method="POST" id="activateFunction">

                                                                <div class="form-group">
                                                                    <div class="form-label-group"><label class="form-label" for="emailContent">Reason for account activattion</label></div>
                                                                    <textarea id="activateConsumerExtraComment" class="form-control form-control-lg" placeholder="Reason for account activattion"></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit" id="activateConsumerBtn" class="btn btn-lg btn-primary btn-block">Activate Consumer</button>
                                                                </div>

                                                            </form>

                                                            </div>
                                                            <div class="modal-footer bg-light"><span class="sub-text">Extra Comment will be included in email sent to consumer</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- activate consumer email modal end -->

                                                <!-- delete consumer email modal start -->

                                                <div class="modal fade" tabindex="-1" id="sendConsumerDeleteEmail">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Delete Consumer</h5><a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                                            </div>
                                                            <div class="modal-body">

                                                            <form onsubmit="event.preventDefault(); loginFunction();" method="POST" id="authLoginForm">

                                                                <div class="form-group">
                                                                    <div class="form-label-group"><label class="form-label" for="emailContent">Reason for account termination</label></div>
                                                                    <textarea id="extraCommentDelete" class="form-control form-control-lg" placeholder="Reason for account termination"></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit" id="deleteConsumerBtn" class="btn btn-lg btn-primary btn-block">Delete Consumer</button>
                                                                </div>

                                                            </form>

                                                            </div>
                                                            <div class="modal-footer bg-light"><span class="sub-text">Extra Comment will be included in email sent to consumer</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- delete consumer email modal end -->

                                                <!-- suspend consumer modal start -->

                                                <div class="modal fade" tabindex="-1" id="modalAlert2">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body modal-body-lg text-center">
                                                                <div class="nk-modal"><em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                                                                    <h4 class="nk-modal-title">Suspend this user!</h4>
                                                                    <div class="nk-modal-text">
                                                                        <p class="lead">Are you sure you want to suspend { Username } <span class="badge badge-outline-danger">Danger</span></p>
                                                                        <!-- <p class="text-soft">If you need help please contact us at (855) 485-7373.</p> -->
                                                                    </div>
                                                                    <div class="nk-modal-action mt-5"><a href="#" class="btn btn-lg btn-mw btn-light" data-dismiss="modal">Suspend</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- suspend consumer modal end -->


                                            </div>
                                        </div>

                                        
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <?php include('footer.php'); ?>

            </div>
        </div>
    </div>
        </div>
    </div>
    <script src="assets/js/bundle7d4c.js?ver=1.7.0"></script>
    <script src="assets/js/scriptsee8b.js?ver=1.8.0"></script>
    <script src="assets/js/demo-settingsee8b.js?ver=1.8.0"></script>

    <!-- Datatables -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="assets/pages/datatables.init.js"></script>

    <!-- Bootstrap Datatables -->
    <script src="assets/plugins/bootstrap-table/js/bootstrap-table.min.js"></script>
    <script src="assets/pages/jquery.bs-table.js"></script>

    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

    <script>

        $(document).ready(function() {
            $('#cover-spin').show(0);
            $.ajax({
                url: '<?php echo $findme ?>' + "api/admin/consumers",
                headers: { "Authorization": `Bearer ${sessionStorage.getItem("access_token")}` },
                dataType: "json",
                success: function(response) {
                    goAheadWithReady();
                },
                error: function(xhr, textStatus, error) {
                    if(xhr.responseJSON.message == 'A token is required' || xhr.responseJSON.message.includes("is an invalid JWS")){
                        tokenIsRequired();
                    }
                    // console.log(xhr.responseText);
                    // console.log(xhr.statusText);
                    // console.log(textStatus);
                    // console.log(error);
                }
            });
        });

        function goAheadWithReady(){
            let iDoNotCheck = $('#consumers').DataTable({
            "footerCallback": function ( row, data, start, end, display ) {
                },
                dom: 'Bfrtip',
                buttons: [
                    // 'csv', 'pdf', 'print'
                ],
                "language": {
                "emptyTable": "No consumers available"
                },
                "initComplete": function(settings, json) {
                    $('#cover-spin').hide(0);
                },
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "headers": { "Authorization": `Bearer ${sessionStorage.getItem("access_token")}` },
                    "url":'<?php echo $findme ?>' + "api/admin/consumers",
                    error: function(){  // error handling
                    $(".example-error").html("");
                    $("#example_processing").css("display","none");
                    }
                },
            });
        }

        function consumerSuspendedToast() {
            new Noty({
            type: 'success',
            layout: 'topRight',
            theme: 'nest',
            text: '❕ Account suspended',
            timeout: '2000',
            progressBar: true,
            closeWith: ['click', 'button'],
            killer: true,
            }).show();
        }

        function consumerActivatedToast() {
            new Noty({
            type: 'success',
            layout: 'topRight',
            theme: 'nest',
            text: '❕ Account activated',
            timeout: '2000',
            progressBar: true,
            closeWith: ['click', 'button'],
            killer: true,
            }).show();
        }

        function consumerDeletedToast() {
            new Noty({
            type: 'success',
            layout: 'topRight',
            theme: 'nest',
            text: '❕ Account deleted',
            timeout: '2000',
            progressBar: true,
            closeWith: ['click', 'button'],
            killer: true,
            }).show();
        }

        function consumerDeletedIssueToast(message) {
            new Noty({
            type: 'success',
            layout: 'topRight',
            theme: 'nest',
            text: '❕ ' + message,
            timeout: '2000',
            progressBar: true,
            closeWith: ['click', 'button'],
            killer: true,
            }).show();
        }

        function unableToSuspendedConsumerToast() {
            new Noty({
            type: 'error',
            layout: 'topRight',
            theme: 'nest',
            text: '❕ We Encountered an Issue, please try again',
            timeout: '2000',
            progressBar: true,
            closeWith: ['click', 'button'],
            killer: true,
            }).show();
        }

        function extraCommentFieldRequiredToast() {
            new Noty({
            type: 'error',
            layout: 'topRight',
            theme: 'nest',
            text: '❕ Extra comment field required',
            timeout: '2000',
            progressBar: true,
            closeWith: ['click', 'button'],
            killer: true,
            }).show();
        }

///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////// show more details start ////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click','.getConsumers',function(e){
  e.preventDefault();
  let consumeruuid = $(this).data('id');
  $('#consumerDetails').modal('show');

  document.getElementById("loadMore").style.display = 'block';
  document.getElementById("showData").style.display = 'none';

    $.ajax({
    url: '<?php echo $findme ?>' + "api/admin/get-consumers-small-profile",
    data: {
        "consumeruuid": consumeruuid,
    },
    dataType: "json",
    success: function(response) {
        document.getElementById("loadMore").style.display = 'none';
        let come = JSON.stringify(response.data);
        let finalConsumersData = JSON.parse(come);
        let get8;

        $.each(finalConsumersData, function(key, value){
          firstName = value.firstName;
          otherName = value.otherNames;
          email = value.email;
          avatar = value.avatar;
          account_status = value.account_status;
        });
        
        document.getElementById("name").innerHTML = "Name: " + firstName + " " +otherName;
        document.getElementById("email").innerHTML = "Email: " + email;
        document.getElementById("accountStatus").innerHTML = "Account Status: " + account_status;
        document.getElementById("profileAvatar").src = avatar;

        document.getElementById("showData").style.display = 'block';

    },
    error: function(xhr, textStatus, error) {
        console.log(xhr.responseText);
        console.log(xhr.statusText);
        console.log(textStatus);
        console.log(error);
    }
});

});

///////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// show more details end /////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////// Suspend consumer start /////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click','.suspenConsumer',function(e){
  e.preventDefault();
  let consumeruuid = $(this).data('id');
  $('#suspendConsumer').modal('show');

  document.getElementById("loadMoreSuspendConsumer").style.display = 'block';
  document.getElementById("showDataSuspendConsumer").style.display = 'none';
  document.getElementById("suspendConsumerExtraHide").style.display = 'none';

    $.ajax({
    url: '<?php echo $findme ?>' + "api/admin/get-consumers-small-profile",
    data: {
        "consumeruuid": consumeruuid,
    },
    dataType: "json",
    success: function(response) {
        document.getElementById("loadMoreSuspendConsumer").style.display = 'none';
        document.getElementById("suspendConsumerExtraHide").style.display = 'block';
        let come = JSON.stringify(response.data);
        let finalConsumersData = JSON.parse(come);
        let get8;

        $.each(finalConsumersData, function(key, value){
          firstName = value.firstName;
          otherName = value.otherNames;
          email = value.email;
          avatar = value.avatar;
          account_status = value.account_status;
        });

        document.getElementById("nameSuspendConsumerUuid").innerHTML = consumeruuid;
        document.getElementById("nameSuspendConsumerForEmailDraft").innerHTML = firstName;
        document.getElementById("emailSuspendConsumerForEmailDraft").innerHTML = email;
        
        document.getElementById("nameSuspendConsumer").innerHTML = "Name: " + firstName + " " +otherName;
        document.getElementById("emailSuspendConsumer").innerHTML = "Email: " + email;
        document.getElementById("accountStatusSuspendConsumer").innerHTML = "Account Status: " + account_status;
        document.getElementById("profileAvatarSuspendConsumer").src = avatar;
        document.getElementById("showDataSuspendConsumer").style.display = 'block';

    },
    error: function(xhr, textStatus, error) {
        // console.log(xhr.responseText);
        // console.log(xhr.statusText);
        // console.log(textStatus);
        // console.log(error);
    }
});

});

$(document).on('click','#suspendConsumerExtra',function(e){
$('#sendConsumerEmail').modal('show');
});

$(document).on('click','#suspendConsumerBtn',function(e){
let extraComment = document.getElementById("extraComment").value;
let uuid = document.getElementById("nameSuspendConsumerUuid").innerHTML;
let nameSuspendConsumerForEmailDraft = document.getElementById("nameSuspendConsumerForEmailDraft").innerHTML;
let emailSuspendConsumerForEmailDraft = document.getElementById("emailSuspendConsumerForEmailDraft").innerHTML;

if(extraComment == ""){
    extraCommentFieldRequiredToast();
    return
}

if (confirm('Are you sure you want to suspend this user?')) {
document.getElementById("suspendConsumerBtn").disabled = true;
document.getElementById("suspendConsumerBtn").innerHTML = '<i class="fa fa-spinner fa-spin fa-lg"></i>';

  $.ajax({
    url: '<?php echo $findme ?>' + "api/admin/suspend-consumer",
    method: "POST",
    data: {
        "consumeruuid": uuid,
        "extraComment": extraComment,
        "firstName": nameSuspendConsumerForEmailDraft,
        "email": emailSuspendConsumerForEmailDraft
    },
    dataType: "json",
    success: function(data) {
        $('#consumers').dataTable().fnClearTable();
        $('#consumers').dataTable().fnDestroy();

        $('#suspendConsumer').modal('hide');
        $('#sendConsumerEmail').modal('hide');

        document.getElementById("suspendConsumerBtn").disabled = false;
        document.getElementById("suspendConsumerBtn").innerHTML = 'Suspend Consumer';
        consumerSuspendedToast()

        $('#consumers').DataTable({
            dom: 'Bfrtip',
            buttons: [
            'csv', 'pdf', 'print'
            ],
            // "lengthMenu": [[10, 25, 50, 400, -1], [10, 25, 50, 400, "All"]],
            "processing": true,
            "serverSide": true,
            "ajax": '<?php echo $findme ?>' + "api/admin/consumers"
        });
    },
    error: function(xhr, textStatus, error) {
        // console.log(xhr.responseText);
        // console.log(xhr.statusText);
        // console.log(textStatus);
        // console.log(error);
        document.getElementById("suspendConsumerBtn").disabled = false;
        document.getElementById("suspendConsumerBtn").innerHTML = 'Suspend Consumer';
        unableToSuspendedConsumerToast()
    }
});

}

});

///////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// Suspend consumer end //////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Activate consumer start /////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click','.activateConsumer',function(e){
  e.preventDefault();
  let consumeruuid = $(this).data('id');
  $('#activateConsumer').modal('show');

  document.getElementById("loadMoreActivateConsumer").style.display = 'block';
  document.getElementById("showDataActivateConsumer").style.display = 'none';
  document.getElementById("activateConsumerExtraHide").style.display = 'none';

    $.ajax({
    url: '<?php echo $findme ?>' + "api/admin/get-consumers-small-profile",
    data: {
        "consumeruuid": consumeruuid,
    },
    dataType: "json",
    success: function(response) {
        document.getElementById("loadMoreActivateConsumer").style.display = 'none';
        document.getElementById("activateConsumerExtraHide").style.display = 'block';
        let come = JSON.stringify(response.data);
        let finalConsumersData = JSON.parse(come);
        let get8;

        $.each(finalConsumersData, function(key, value){
          firstName = value.firstName;
          otherName = value.otherNames;
          email = value.email;
          avatar = value.avatar;
          account_status = value.account_status;
        });

        document.getElementById("nameActivateConsumerUuid").innerHTML = consumeruuid;
        document.getElementById("nameActivateConsumerForEmailDraft").innerHTML = firstName;
        document.getElementById("emailActivateConsumerForEmailDraft").innerHTML = email;
        
        document.getElementById("nameActivateConsumer").innerHTML = "Name: " + firstName + " " +otherName;
        document.getElementById("emailActivateConsumer").innerHTML = "Email: " + email;
        document.getElementById("accountStatusActivateConsumer").innerHTML = "Account Status: " + account_status;
        document.getElementById("profileAvatarActivateConsumer").src = avatar;

        document.getElementById("showDataActivateConsumer").style.display = 'block';

    },
    error: function(xhr, textStatus, error) {
        // console.log(xhr.responseText);
        // console.log(xhr.statusText);
        // console.log(textStatus);
        // console.log(error);
    }
});

});

$(document).on('click','#activateConsumerExtra',function(e){
$('#sendConsumerActivateEmail').modal('show');

});

$(document).on('click','#activateConsumerBtn',function(e){
let uuid = document.getElementById("nameActivateConsumerUuid").innerHTML;
let extraComment = document.getElementById("activateConsumerExtraComment").value;
let nameActivateConsumerForEmailDraft = document.getElementById("nameActivateConsumerForEmailDraft").innerHTML;
let emailActivateConsumerForEmailDraft = document.getElementById("emailActivateConsumerForEmailDraft").innerHTML;

if(extraComment == ""){
    extraCommentFieldRequiredToast();
    return
}

if (confirm('Are you sure you want to approve this user?')) {
document.getElementById("activateConsumerBtn").disabled = true;
document.getElementById("activateConsumerBtn").innerHTML = '<i class="fa fa-spinner fa-spin fa-lg"></i>';

  $.ajax({
    url: '<?php echo $findme ?>' + "api/admin/activate-consumer",
    headers: { "Authorization": `Bearer ${sessionStorage.getItem("access_token")}` },
    method: "POST",
    data: {
        "consumeruuid": uuid,
        "extraComment": extraComment,
        "firstName": nameActivateConsumerForEmailDraft,
        "email": emailActivateConsumerForEmailDraft,
    },
    dataType: "json",
    success: function(response) {
        if(response.data == true){
        $('#consumers').dataTable().fnClearTable();
        $('#consumers').dataTable().fnDestroy();

        $('#activateConsumer').modal('hide');
        $('#sendConsumerActivateEmail').modal('hide');
        document.getElementById("activateConsumerBtn").disabled = false;
        document.getElementById("activateConsumerBtn").innerHTML = 'Activate Consumer';
        consumerActivatedToast()()

        $('#consumers').DataTable({
            dom: 'Bfrtip',
            buttons: [
            'csv', 'pdf', 'print'
            ],
            // "lengthMenu": [[10, 25, 50, 400, -1], [10, 25, 50, 400, "All"]],
            "processing": true,
            "serverSide": true,
            "ajax": '<?php echo $findme ?>' + "api/admin/consumers"
        });
    }
    },
    error: function(xhr, textStatus, error) {
        // console.log(xhr.responseText);
        // console.log(xhr.statusText);
        // console.log(textStatus);
        // console.log(error);
        document.getElementById("activateConsumerBtn").disabled = false;
        document.getElementById("activateConsumerBtn").innerHTML = 'Activate Consumer';
        unableToSuspendedConsumerToast()
    }
});

}

});

///////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// Activate consumer end /////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////// Delete consumer start //////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click','.deleteConsumer',function(e){
  e.preventDefault();
  let consumeruuid = $(this).data('id');
  $('#deleteConsumer').modal('show');

  document.getElementById("loadMoreDeleteConsumer").style.display = 'block';
  document.getElementById("showDataDeleteConsumer").style.display = 'none';
  document.getElementById("deleteConsumerExtraHide").style.display = 'none';

    $.ajax({
    url: '<?php echo $findme ?>' + "api/admin/get-consumers-small-profile",
    data: {
        "consumeruuid": consumeruuid,
    },
    dataType: "json",
    success: function(response) {
        document.getElementById("loadMoreDeleteConsumer").style.display = 'none';
        document.getElementById("deleteConsumerExtraHide").style.display = 'block';
        let come = JSON.stringify(response.data);
        let finalConsumersData = JSON.parse(come);
        let get8;

        $.each(finalConsumersData, function(key, value){
          firstName = value.firstName;
          otherName = value.otherNames;
          email = value.email;
          signin_type = value.signin_type;
          avatar = value.avatar;
          account_status = value.account_status;
          phoneNumber = value.phoneNumber;
          ghanaPost = value.ghanaPost;
        });

        document.getElementById("nameDeleteConsumerEmailDraft").innerHTML = firstName;
        document.getElementById("emailDeleteConsumerEmailDraft").innerHTML = email;
        document.getElementById("uuidDeleteConsumerEmailDraft").innerHTML = consumeruuid;
        
        document.getElementById("nameDeleteConsumer").innerHTML = "Name: " + firstName + " " +otherName;
        document.getElementById("emailDeleteConsumer").innerHTML = "Email: " + email;
        document.getElementById("signin_typeDeleteConsumer").innerHTML = "Sign up Type: " + signin_type;
        document.getElementById("accountStatusDeleteConsumer").innerHTML = "Account Status: " + account_status;
        document.getElementById("phoneNumberDeleteConsumer").innerHTML = "Phone Number: " + phoneNumber;
        document.getElementById("ghanaPostDeleteConsumer").innerHTML = "Ghana Post: " + ghanaPost;
        document.getElementById("profileAvatarDeleteConsumer").src = avatar;

        document.getElementById("showDataDeleteConsumer").style.display = 'block';
        document.getElementById("DeleteConsumerBtn").style.display = 'block';

    },
    error: function(xhr, textStatus, error) {
        console.log(xhr.responseText);
        console.log(xhr.statusText);
        console.log(textStatus);
        console.log(error);
    }
});

});

$(document).on('click','#deleteConsumerExtra',function(e){
$('#sendConsumerDeleteEmail').modal('show');

});

$(document).on('click','#deleteConsumerBtn',function(e){
let uuid = document.getElementById("uuidDeleteConsumerEmailDraft").innerHTML;
let extraComment = document.getElementById("extraCommentDelete").value;
let nameDeleteConsumerEmailDraft = document.getElementById("nameDeleteConsumerEmailDraft").innerHTML;
let emailDeleteConsumerEmailDraft = document.getElementById("emailDeleteConsumerEmailDraft").innerHTML;

if(extraComment == ""){
    extraCommentFieldRequiredToast();
    return
}

if (confirm('Are you sure you want to delete this user?')) {
    document.getElementById("deleteConsumerBtn").disabled = true;
    document.getElementById("deleteConsumerBtn").innerHTML = '<i class="fa fa-spinner fa-spin fa-lg"></i>';

  $.ajax({
    url: '<?php echo $findme ?>' + "api/admin/delete-consumer",
    method: "POST",
    data: {
        "consumeruuid": uuid,
        "extraComment": extraComment,
        "firstName": nameDeleteConsumerEmailDraft,
        "email": emailDeleteConsumerEmailDraft
    },
    dataType: "json",
    success: function(response) {
        if (response.success == false) {
            consumerDeletedIssueToast(response.message);
        }
        else{
        $('#consumers').dataTable().fnClearTable();
        $('#consumers').dataTable().fnDestroy();

        $('#deleteConsumer').modal('hide');
        $('#sendConsumerDeleteEmail').modal('hide');
        document.getElementById("deleteConsumerBtn").disabled = false;
        document.getElementById("deleteConsumerBtn").innerHTML = 'Delete Consumer';
        consumerDeletedToast();

        $('#consumers').DataTable({
            dom: 'Bfrtip',
            buttons: [
            'csv', 'pdf', 'print'
            ],
            // "lengthMenu": [[10, 25, 50, 400, -1], [10, 25, 50, 400, "All"]],
            "processing": true,
            "serverSide": true,
            "ajax": '<?php echo $findme ?>' + "api/admin/consumers"
        });
    }
    },
    error: function(xhr, textStatus, error) {
        // console.log(xhr.responseText);
        // console.log(xhr.statusText);
        // console.log(textStatus);
        // console.log(error);
        document.getElementById("deleteConsumerBtn").disabled = false;
        document.getElementById("deleteConsumerBtn").innerHTML = 'Delete Consumer';
        unableToSuspendedConsumerToast()
    }
});

}

});

///////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// Delete consumer end ///////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

    </script>
</body>
</html>