<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">Inbox</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Inbox -->
    <h3 class="page-header page-header-top"><i class="fa fa-envelope"></i> Inbox <small>With a rich and clean user interface!</small></h3>

    <!-- Inbox Container -->
    <div class="inbox-container clearfix">
        <!-- Inbox Menu -->
        <div class="inbox-menu">
            <ul class="nav nav-pills nav-stacked push">
                <li>
                    <!-- Modal is under the Inbox Container div -->
                    <a href="#inbox-compose-modal" data-toggle="modal"><i class="fa fa-pencil"></i> New Message</a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-stacked push">
                <li class="active">
                    <a href="javascript:void(0)"><i class="fa fa-inbox"></i> Inbox <span id="count-inbox" class="inbox-menu-count"></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-fighter-jet"></i> Sent</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-star"></i> Starred</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-briefcase"></i> Archive</a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-circle text-danger"></i> Important <span class="inbox-menu-count">18</span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-circle text-warning"></i> Work <span class="inbox-menu-count">15</span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i> Personal <span class="inbox-menu-count">20</span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-circle text-info"></i> Vacation <span class="inbox-menu-count">6</span></a>
                </li>
            </ul>
        </div>
        <!-- END Inbox Menu -->

        <!-- Inbox Messages Outer -->
        <div class="inbox-messages-outer">
            <!-- Inbox Messages -->
            <div class="inbox-messages">
                <!-- Inbox Messages List -->
                <div class="inbox-messages-list">
                    <input type="text" id="inbox-search" name="inbox-search" class="form-control" placeholder="Search..">
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="javascript:void(0)" id="msg1" class="unread">
                                <span class="inbox-messages-list-username">Username</span> <span class="inbox-messages-list-meta">2 min ago</span><br>
                                <span class="inbox-messages-list-title">Message Subject</span><br>
                                <span class="inbox-messages-list-preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0)" id="msg2">
                                <span class="inbox-messages-list-username">Username</span> <span class="inbox-messages-list-meta">3 min ago</span><br>
                                <span class="inbox-messages-list-title">Message Subject</span><br>
                                <span class="inbox-messages-list-preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="msg3" class="unread">
                                <span class="inbox-messages-list-username">Username</span> <span class="inbox-messages-list-meta">20 min ago</span><br>
                                <span class="inbox-messages-list-title">Message Subject</span><br>
                                <span class="inbox-messages-list-preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="msg4" class="unread">
                                <span class="inbox-messages-list-username">Username</span> <span class="inbox-messages-list-meta">3 hours ago</span><br>
                                <span class="inbox-messages-list-title">Message Subject</span><br>
                                <span class="inbox-messages-list-preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="msg5" class="unread">
                                <span class="inbox-messages-list-username">Username</span> <span class="inbox-messages-list-meta">25 hours ago</span><br>
                                <span class="inbox-messages-list-title">Message Subject</span><br>
                                <span class="inbox-messages-list-preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="msg6" class="unread">
                                <span class="inbox-messages-list-username">Username</span> <span class="inbox-messages-list-meta">Yesterday</span><br>
                                <span class="inbox-messages-list-title">Message Subject</span><br>
                                <span class="inbox-messages-list-preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="msg7">
                                <span class="inbox-messages-list-username">Username</span> <span class="inbox-messages-list-meta">Yesterday</span><br>
                                <span class="inbox-messages-list-title">Message Subject</span><br>
                                <span class="inbox-messages-list-preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Inbox Messages List -->

                <!-- Inbox Messages Content -->
                <div class="inbox-messages-container">
                    <!-- Actions -->
                    <ul class="inbox-messages-content-actions clearfix">
                        <li><a href="javascript:void(0)"><i class="fa fa-mail-reply"></i> Reply</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-mail-reply-all"></i> Reply to all</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-mail-forward"></i> Forward</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-print"></i> Print</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-briefcase"></i> Archive</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a></li>
                    </ul>
                    <!-- END Actions -->

                    <!-- Message Header -->
                    <div class="inbox-messages-content-header content-text">
                        <img src="img/placeholders/image_dark_64x64.png" class="pull-left" alt="avatar">
                        <a href="javascript:void(0)"><strong>Username</strong></a>
                        <span class="label label-info">June 4, 2013</span>
                        <span class="label label-info">12:15</span>
                        <h5>Project Details - Let's get started!</h5>
                    </div>
                    <!-- END Message Header -->

                    <div class="inbox-messages-content-body">
                        <p>Hi!</p>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>All the best,<br>John</p>
                    </div>
                    <div class="inbox-messages-content-reply">
                        <form action="page_inbox.php" method="post" class="form-horizontal remove-margin" onsubmit="return false;">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea id="inbox-reply-message" name="inbox-reply-message" class="textarea-editor" rows="6"></textarea>
                                    <button class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Reply</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Inbox Messages Content -->
            </div>
            <!-- END Inbox Messages -->
        </div>
        <!-- END Inbox Messages Outer -->
    </div>
    <!-- END Inbox Container -->

    <!-- New Message Modal -->
    <div id="inbox-compose-modal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4><i class="fa fa-pencil"></i> New Message</h4>
                </div>
                <div class="modal-body">
                    <form action="page_inbox.php" class="form-horizontal remove-margin" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="text" id="inbox-to" name="inbox-to" class="form-control" placeholder="To:">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <textarea id="inbox-new-message" name="inbox-new-message" class="form-control" rows="10" placeholder="Message.."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer remove-margin">
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" data-dismiss="modal">Sent</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END New Message Modal -->
    <!-- End Inbox -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        var msgList     = $('.inbox-messages-list');
        var countInbox  = $('#count-inbox');
        var linkId, num;

        // Count unread messages and add the number to the inbox
        countInbox.text($('.unread', msgList).length);

        // When a message is clicked
        $('a', msgList).click(function(){
            // Message with id 'linkId' was clicked (for loading the message or marking it as read in your backend)
            linkId = $(this).attr('id');

            // Just a small effect you could apply when loading a message
            $('.inbox-messages-container > div').hide(250, function(){

                // New content should be loaded here
                // ...

                $(this).slideDown(250);
            });

            // Remove .active class from every message
            $('li', msgList).removeClass('active');

            // Add the class .active to its parent li
            $(this).parent('li').addClass('active');

            // Remove class .unread if there is one and update the inbox unread number
            if ($(this).hasClass('unread')) {

                // Remove .unread class
                $(this).removeClass('unread');

                // Get the unread messages number
                num = parseInt(countInbox.text());

                // Hide the number if all the messages are read else the number goes minus 1!
                if (num === 1) {
                    countInbox.slideUp(50, function(){
                        $(this).html('<i class="fa fa-check"></i>').slideDown(50, function(){
                            $(this).fadeOut(500);
                        });
                    });
                } else {
                    countInbox.slideUp(50, function(){
                        $(this).text(num - 1).slideDown(50);
                    });
                }
            }
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>