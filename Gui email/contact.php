
<?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

if (isset($_GET['action']) && $_GET['action'] == "send") {
            if (empty($_POST['email'])) {
                $error = "Bạn phải nhập địa chỉ email";
            } elseif (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error = "Bạn phải nhập email đúng định dạng";
            } elseif (empty($_POST['comments'])) { 
                $error = "Bạn phải nhập nội dung";
            }
            if (!isset($error)) {
                include 'library.php'; // include the library file
                require 'vendor/autoload.php';
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, $_POST['contactName']);
                    $mail->addAddress(SMTP_UNAME, 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = $_POST['email'];
                    $mail->Body = $_POST['comments'];
                    $mail->AltBody = $_POST['comments']; //None HTML
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }
            ?>
<!--    Footer     -->

<div class = "container">
                <div class = "error"><?= isset($error) ? $error : "Gửi email thành công" ?></div>
                <a href = "/HLB-master/index.php">Quay lại form gửi mail</a>
            </div>
        <?php } else { ?>

<link rel="stylesheet" href="style.css">
<section id="contact" class="add-padding border-top-color2">
    

    <div class="container text-center">
        
 <div class="row">

           
            <!--=== Contact Form ===-->

            <form id="contact-form" class="col-sm-6 col-md-offset-1 scrollimation fade-left d3" action="?action=send" method="post" novalidate>

                <div class="form-group">
                    <label class="control-label" for="contact-name">Name</label>
                    <div class="controls">
                        <input id="contact-name" name="contactName" placeholder="Your name" class="form-control requiredField" data-new-placeholder="Your name" type="text" data-error-empty="Please enter your name">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <!-- End name input -->

                <div class="form-group">
                    <label class="control-label" for="contact-mail">Email</label>
                    <div class=" controls">
                        <input id="contact-mail" name="email" placeholder="Your email" class="form-control requiredField" data-new-placeholder="Your email" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <!-- End email input -->

                <div class="form-group">
                    <label class="control-label" for="contact-message">Message</label>
                    <div class="controls">
                        <textarea id="contact-message" name="comments" placeholder="Your message" class="form-control requiredField" data-new-placeholder="Your message" rows="6" data-error-empty="Please enter your message"></textarea>
                        <i class="fa fa-comment"></i>
                    </div>
                </div>
                <!-- End textarea -->

                <p><button name="submit1" type="submit" class="btn btn-color2 btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-paper-plane"></i>Send Message</button></p>
                <input type="hidden" name="submitted" id="submitted" value="true" />

            </form>
            <!-- End contact-form -->

        </div>

    </div>
<?php } ?>