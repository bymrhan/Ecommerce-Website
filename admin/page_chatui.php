<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">ChatUI</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- ChatUI -->
    <h3 class="page-header page-header-top"><i class="fa fa-comments"></i> ChatUI <small>Ready to use UI for creating your chat functionality</small></h3>

    <!-- Chat Container -->
    <div class="chat-container clearfix">
        <!-- Chat People -->
        <div class="chat-people">
            <ul>
                <li class="active">
                    <a href="javascript:void(0)" class="chat-online">
                        <span class="chat-name">Public</span><br>
                        <span class="chat-info">4 Online</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-online" data-toggle="tooltip" data-placement="left" title="Online!">
                        <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                        <span class="chat-name">John Doe</span><br>
                        <span class="chat-info">Web Designer</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-online" data-toggle="tooltip" data-placement="left" title="Online!">
                        <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                        <span class="chat-name">John Doe</span><br>
                        <span class="chat-info">Visitor</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-online" data-toggle="tooltip" data-placement="left" title="Online!">
                        <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                        <span class="chat-name">John Doe</span><br>
                        <span class="chat-info">UX Designer</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-away" data-toggle="tooltip" data-placement="left" title="Away (since 5 hours)">
                        <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                        <span class="chat-name">John Doe</span><br>
                        <span class="chat-info">Ceo</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-away" data-toggle="tooltip" data-placement="left" title="Away (since 12 min)">
                        <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                        <span class="chat-name">John Doe</span><br>
                        <span class="chat-info">Artist</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-offline" data-toggle="tooltip" data-placement="left" title="Offline">
                        <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                        <span class="chat-name">John Doe</span><br>
                        <span class="chat-info">Web Developer</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-offline" data-toggle="tooltip" data-placement="left" title="Offline">
                        <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                        <span class="chat-name">John Doe</span><br>
                        <span class="chat-info">Web Designer</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-offline" data-toggle="tooltip" data-placement="left" title="Offline">
                        <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                        <span class="chat-name">John Doe</span><br>
                        <span class="chat-info">Visitor</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-offline" data-toggle="tooltip" data-placement="left" title="Offline">
                        <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                        <span class="chat-name">John Doe</span><br>
                        <span class="chat-info">Client</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Chat People -->

        <!-- Chat Messages -->
        <div class="chat-messages">
            <ul>
                <li class="chat-msg-right">
                    <span class="label label-success chat-msg-time"><em>3 min ago</em> by <em>Demo User</em></span>
                    <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                    Hi there! How are you?
                </li>
                <li class="chat-msg-left">
                    <span class="label label-inverse chat-msg-time"><em>2 min ago</em> by <em>You</em></span>
                    <img src="img/placeholders/image_light_64x64.png" alt="avatar">
                    Fine! We just started the new project and I feel great!
                </li>
                <li class="chat-msg-right">
                    <span class="label label-success chat-msg-time"><em>1 min ago</em> by <em>Demo User</em></span>
                    <img src="img/placeholders/image_dark_64x64.png" alt="avatar">
                    That's awesome!
                </li>
            </ul>
        </div>
        <!-- END Chat Messages -->
    </div>
    <!-- END Chat Container -->

    <!-- Chat Input -->
    <div class="chat-input">
        <img src="img/placeholders/image_light_64x64.png" alt="Avatar">
        <div class="chat-input-inner">
            <form id="form-chat" action="page_chatui.php" class="remove-margin">
                <input type="text" id="chat-message" name="chat-message" class="form-control" placeholder="Type a message and hit enter..">
            </form>
        </div>
    </div>
    <!-- END Chat Input -->

    <!-- END ChatUI -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        var peopleList      = $('.chat-people ul');
        var messageListCon  = $('.chat-messages');
        var messageInput    = $('#chat-message');
        var userId, msg;

        // When a user is clicked
        $('a', peopleList).click(function(){
            // Remove .active class from every user
            $('li', peopleList).removeClass('active');

            // Add the class .active to its parent li
            $(this).parent('li').addClass('active');

            // User with id 'userId' was clicked (eg for loading chat messages from backend)
            userId = $(this).attr('id');

            //...
        });

        // On form chat submit
        $('#form-chat').submit(function(e){

            // Get text from message input
            msg = messageInput.val();

            // If the user typed a message
            if (msg) {
                // Add it to the message list (here you could sync with your backend)
                $('ul', messageListCon).append('<li class="chat-msg-left">' +
                                        '<span class="label label-inverse chat-msg-time"><em>just now</em> by <em>You</em></span>' +
                                        '<img src="img/placeholders/image_light_64x64.png" alt="avatar">' + msg +
                                    '</li>');
                // Just a demo answer message
                setTimeout(function(){$('ul', messageListCon).append('<li class="chat-msg-right">' +
                                        '<span class="label label-success chat-msg-time"><em>just now</em> by <em>pixelcave</em></span>' +
                                        '<img src="img/template/avatar@2x.png" alt="avatar">Thanks for trying out the <strong>ChatUI</strong>! I hope you like it!' +
                                    '</li>');}, 500);

                // Scroll the message list to the bottom
                messageListCon.animate({ scrollTop: messageListCon[0].scrollHeight}, 500);
            }

            // Reset the message input
            messageInput.val('');

            // Don't submit the message form
            e.preventDefault();
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>