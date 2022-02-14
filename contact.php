<?php $page='contact';  include "header.php";  ?>
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Get In Touch</p>
                        <h2>For Any Query</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="flaticon-address"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>Address - 1197/3, Ground Floor, Surbhi Vihar Colony Harishchandra Nagar, Near Mithapur Bus Stand Dhelwan Patna BR 800020 IN.</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-call"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+012 345 67890</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-send-mail"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>r3starengicon@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                    <div>
                                        <button class="btn" type="button" id="sendMessageButton">Send Message</button><div class="spinner-border mx-3 load" style="display:none;" role="status"></div>
                                    </div>

                                    <div class="my-3">
                                    <div class="error-message">error</div>
                                    <div class="sent-message">success</div>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->


 <?php include "footer.php"; ?>

 <script>
     $(document).ready(function(){
         $("#sendMessageButton").click(function(e){
            event.preventDefault();
             var name = $("#name").val();
             var email = $("#email").val();
             var subject = $("#subject").val();
             var msg = $("#message").val();
             if(name==""){
                $(".error-message").html("Please fill the name section first.").slideDown();
                $(".sent-message").slideUp();
             }else{
                if(name.length >= 3){
                  var pattern  = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g
                    if(email == ""){
                        $(".error-message").html("Please fill the email section.").slideDown();
                        $(".sent-message").slideUp();
                    }else{
                        if(pattern.test(email)){
                            if(msg == ""){
                                $(".error-message").html("Please fill the message section.").slideDown();
                                $(".sent-message").slideUp();
                            }else{
                               
                                $.ajax({
                                    url : "process.php",
                                    type : "post",
                                    data : {name:name,email:email,subject:subject,message:msg},
                                    beforeSend:function(){
                                        $('.load').show();
                                        $('.sendbtn').hide();
                                    },
                                    success : function(data){
                                        if(data == 1){
                                            $('.sendbtn').show();
                                            $('.load').hide();

                                            $("#contactForm").trigger("reset");
                                            $(".sent-message").html("Message Send.").slideDown();
                                            $(".error-message").slideUp();
                                            
                                        }else{
                                            $('.sendbtn').show();
                                            $('.load').hide();
                                            
                                            $(".error-message").html("Message not Send.").slideDown();
                                            $(".sent-message").slideUp();
                                        }
                                    }
                                })
                            }
                    }else{
                        $(".error-message").html("Email is Wrong please put right email.").slideDown();
                        $(".sent-message").slideUp();
                    }
                 }
                 
             }else{
                $(".error-message").html("Name length minimum 3 characters.").slideDown();
                $(".sent-message").slideUp();
             }
             }
             
         })
     })
 </script>