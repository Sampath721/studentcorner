<?= view('Modules\Home\Views\common\header') ?>
<p style="margin-top: 80px;"></p>
<div class="container mt-5">
    <div class="d-flex justify-content-end">
        <a href="<?= base_url('/exit') ?>" class="logout-link mb-2"><i class="fa fa-arrow-left"
                aria-hidden="true">&nbsp;</i>
            </i>Exit Chat</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="d-flex justify-content-center board">
                <p>
                    <?= session('frm-sts') ?> To
                    <?= session('to-sts') ?>
                </p>
            </div>
            <div class="chat-container mb-3" id="chat-container"></div>
            <!-- Chat Message Form -->
            <form action="#" id="chat-message-form" method="post" autocomplete="off">
                <div class="input-group mb-3">
                    <input type="text" class="form-control shadow none ss" name="message"
                        placeholder="Type your message..." required>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary shadow none">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= view('Modules\Home\Views\common\footer') ?>
<script>
    $(document).ready(function () {
        fetchChatMessages();
        // Fetch and display new chat messages every 5 seconds
        setInterval(fetchChatMessages, 1000);
        $("#chat-message-form").submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $(".ss").val('');
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('/receive_chat_message'); ?>",
                data: formData,
                dataType: "json",
                success: function (response) {
                    // Clear the input field after sending the message
                    $("#chat-message-form input[name='message']").val('');
                    fetchChatMessages();
                }
            });
        });
        function formatTimestamp(timestamp) {
            var date = new Date(timestamp);
            return date.toLocaleString();
        }

        function fetchChatMessages() {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('/get_last_10_minutes_chat'); ?>",
                dataType: "json",
                success: function (response) {
                    var chatContainer = $("#chat-container");
                    chatContainer.empty();
                    console.log(response)

                    $.each(response, function (index, message) {
                        var messageHtml = '<div class="chat-message">';
                        messageHtml += '<strong>' + message.user_name + '</strong>: ' + message.chat_messages;
                        messageHtml += '<div class="timestamp">' + message.message_time + '</div>';
                        messageHtml += '</div>';
                        chatContainer.append(messageHtml);
                    });
                    var chatContainer = document.getElementById('chat-container');
                    chatContainer.scrollTop = chatContainer.scrollHeight;

                }
            });
        }
    });
    // window.onbeforeunload = function () {
    //     // Ask for confirmation only if the session needs to be unset
    //     if (sessionNeedsToBeUnset()) {
    //         return "Are you sure you want to leave this page?";
    //     }
    // };
    window.addEventListener("unload", function (event) {
        console.log('kkkk')
        $.ajax({
            type: "POST",
            url: "<?= base_url('/exit') ?>",
            success: function (data) {
                // The session has been successfully unset
            },
            error: function (xhr, status, error) {
                // An error occurred while unsetting the session
            }
        });
    });
</script>




