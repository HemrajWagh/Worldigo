$(document).ready(function () {

    $('#form1').on('click', function (e) {
        e.preventDefault();
        var name = $.trim($('#name1').val());
        var firstname = $.trim($("#firstname").val());
        var email = $.trim($('#email1').val());
        var mobile = $.trim($("#mobile1").val());
        
        var message = $.trim($("#message1").val());
        var EmailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        var phonePattern = /^[0-9]*$/;
        var namePattern = /^([\s\.]?[a-zA-Z]+)+$/;
        // var messagePattern = /^([\s\.]?[a-zA-Z]+)+$/;
        var messagePattern = /^[A-Za-z]+([ .][A-Za-z]+)*$/;
        var flag = 0;
        var utm_source = $.trim($('#utm_source').val());
        var utm_medium = $.trim($('#utm_medium').val());
        var utm_campaign = $.trim($('#utm_campaign').val());
        var utm_term = $.trim($("#utm_term").val());
        var utm_display = $.trim($("#utm_display").val());
        var csrf_token = $.trim($("#csrf_token").val());
        var form_submission_id = $.trim($("#form_submission_id").val());

        var project_name = $.trim($("#project_name").val());
        var project_url = $.trim($("#project_url").val());

        // if (name == null || name == '') {
        //     $('#name1_error').removeClass('error_msg');
        //     flag++;
        // } else if (!namePattern.test(name)) {
        //     $('#name1_error').removeClass('error_msg');
        //     $('#name1_error').html('Please Enter Alphabet only');
        //     flag++;
        // } else {
        //     $('#name1_error').addClass('error_msg');

        // }

        if (name == null || name == "") {
          $("#name1_error").removeClass("error_msg");
          flag++;
        } else if (!namePattern.test(name)) {
          $("#name1_error").removeClass("error_msg");
          $("#name1_error").html("Please Enter Alphabet only");
          flag++;
        } else {
          $("#name1_error").addClass("error_msg");
        }

        // if (email == null || email == '' || !EmailPattern.test(email)) {
        //     $('#email1_error').removeClass('error_msg');
        //     flag++;
        // } else {

        //     $('#email1_error').addClass('error_msg');
        // }

        // if (mobile == null || mobile == '' || !phonePattern.test(mobile)) {
        //     $('#mobile1_error').removeClass('error_msg');
        //     flag++;
        // } else if (mobile.length != 10) {
        //     $('#mobile1_error').removeClass('error_msg');
        //     $('#mobile1_error').html('Please Enter 10 Digit Mobile Number');
        //     flag++;
        // } else {
        //     $('#mobile1_error').addClass('error_msg');
        // }

                let emailValid = email && EmailPattern.test(email);
                let mobileValid = mobile && phonePattern.test(mobile) && mobile.length === 10;

        if (!emailValid && !mobileValid) {
            // Both invalid or empty — show errors
            if (!emailValid) {
                $('#email1_error').removeClass('error_msg').html('Please enter a valid email or phone number');
            } else {
                $('#email1_error').addClass('error_msg').html('');
            }

            if (!mobileValid) {
                $('#mobile1_error').removeClass('error_msg').html('Please enter a valid 10-digit phone number or email');
            } else {
                $('#mobile1_error').addClass('error_msg').html('');
            }

            flag++;
        } else {
            $('#email1_error').addClass('error_msg').html('');
            $('#mobile1_error').addClass('error_msg').html('');
        }





        // if (message == null || message == "") {
        //   $("#message1_error").removeClass("error_msg");
        //   flag++;
        // } else if (!messagePattern.test(message)) {
        //   $("#message1_error").removeClass("error_msg");
        //   $("#message1_error").html("Please Enter Alphabet only");
        //   flag++;
        // } else {
        //   $("#message1_error").addClass("error_msg");
        // }

        // Allow only alphabets and spaces
        var messagePattern = /^[A-Za-z\s]+$/;

        if (message && !messagePattern.test(message)) {
            $("#message1_error").removeClass("error_msg");
            $("#message1_error").html("Please Enter Alphabets only");
            flag++;
        } else {
            $("#message1_error").addClass("error_msg");
        }


        if (flag == 0) {
            var data = {
            		 name: name,
                     firstname: firstname,
                     email: email,
                     mobile: mobile,
                     message: message,
                     project_name,
                     project_url,
                     utm_source: utm_source,
                     utm_medium: utm_medium,
                     utm_campaign: utm_campaign,
                     utm_term: utm_term,
                     utm_display: utm_display,
                     csrf_token: csrf_token,
                     form_submission_id:form_submission_id   			
            };

            $('#form1').prop('disabled', true).text('Wait...');

            $.ajax({
                type: "POST",
                url: 'savedSend.php',
                data: data,
                // beforeSend: function (result) {
                //     $('#form1').html('Wait..');
                // },
                success: function (result) {
                                  // alert("in result");
                                    // if (result == 1) 
                                    // {
                                        window.location.replace("thank-you.php");
                                    // } 
                                    // else if (result == 0) 
                                    // {
                                    //     $('#form1').val('Error');
                                    //     alert('Something went wrong');
                                    // }
                                },

                // success: function (result) {
                  // alert("in result");
                    // if (result == 1) 
                    // {
                        // window.location.replace("thank-you.php");
                    // } 
                    // else if (result == 0) 
                    // {
                    //     $('#form1').val('Error');
                    //     alert('Something went wrong');
                    // }
                // },
                error: function () {
                    $('#form1').val('Error');
                }
            });
        }

    });


    $('#form2').on('click', function (e) {
        e.preventDefault();
        var name = $.trim($('#name2').val());
        var firstname = $.trim($("#firstname").val());
        var email = $.trim($('#email2').val());
        var mobile = $.trim($("#mobile2").val());
        var pid = $.trim($("#pid2").val());
        var message = $.trim($("#message2").val());
        var EmailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        var phonePattern = /^[0-9]*$/;
        var namePattern = /^([\s\.]?[a-zA-Z]+)+$/;
        var messagePattern = /^([\s\.]?[a-zA-Z]+)+$/;
        var flag = 0;
        var utm_source = $.trim($('#utm_source').val());
        var utm_medium = $.trim($('#utm_medium').val());
        var utm_campaign = $.trim($('#utm_campaign').val());
        var utm_term = $.trim($('#utm_term').val());
        var utm_display = $.trim($("#utm_display").val());
        var csrf_token = $.trim($("#csrf_token").val());
        var form_submission_id = $.trim($("#form_submission_id").val());

        if (name == null || name == '') {
            $('#name2_error').removeClass('error_msg');
            flag++;
        } else if (!namePattern.test(name)) {
            $('#name2_error').removeClass('error_msg');
            $('#name2_error').html('Please Enter Alphabet only');
            flag++;
        } else {
            $('#name2_error').addClass('error_msg');

        }

        let emailValid = email && EmailPattern.test(email);
        let mobileValid = mobile && phonePattern.test(mobile) && mobile.length === 10;

if (!emailValid && !mobileValid) {
    // Both invalid or empty — show errors
    if (!emailValid) {
        $('#email2_error').removeClass('error_msg').html('Please enter a valid email or phone number');
    } else {
        $('#email2_error').addClass('error_msg').html('');
    }

    if (!mobileValid) {
        $('#mobile2_error').removeClass('error_msg').html('Please enter a valid 10-digit phone number or email');
    } else {
        $('#mobile2_error').addClass('error_msg').html('');
    }

    flag++;
} else {
    $('#email2_error').addClass('error_msg').html('');
    $('#mobile2_error').addClass('error_msg').html('');
}


        if ( pid == null || pid == '') {
                    $('#project2_error').removeClass('error_msg');
                    flag++;
                } else if (!namePattern.test(name)) {
                    $('#project2_error').removeClass('error_msg');
                    $('#project2_error').html('Please Enter Alphabet only');
                    flag++;
                } else {
                    $('#project2_error').addClass('error_msg');

                }

        if ( message == null || message == "") {
          $("#message2_error").removeClass("error_msg");
          flag++;
        } else if (!messagePattern.test(message)) {
          $("#message2_error").removeClass("error_msg");
          $("#message2_error").html("Please Enter Alphabet only");
          flag++;
        } else {
          $("#message2_error").addClass("error_msg");
        }



        if (flag === 0) {
            flag = 1;
            var data = {
                name: name,
                firstname: firstname,
                email: email,
                mobile: mobile,
                pid: pid,
                message: message,
                utm_source: utm_source,
                utm_medium: utm_medium,
                utm_campaign: utm_campaign,
                utm_term: utm_term,
                utm_display: utm_display,
                csrf_token: csrf_token,
                form_submission_id:form_submission_id
            };

            $('#form2').prop('disabled', true).text('Wait...');

            $.ajax({
                type: "POST",
                url: 'savedSend.php',
                data: data,
                success: function (result) {
                   // console.log("Raw result:", result); 
                    // try {
                        // var response = JSON.parse(result);
                   // if (result.status === "success") {  // ✅ Correct variable
                           window.location.replace("thank-you.php");
                       // } else {
                           // $('#form2').prop('disabled', false).text('Submit');
                           // alert(result.message || 'Something went wrong');
                           // flag = 0;
                       // }
                    // } 
                    // catch (e) {
                    //     $('#form2').prop('disabled', false).text('Submit');
                    //     alert('Invalid server response');
                    //     flag = 0;
                    // }
                },
                error: function () {
                    $('#form2').prop('disabled', false).text('Submit');
                    alert('AJAX error');
                    flag = 0;
                }
            });
        }


    });

    $("#form3").on("click", function (e) {
      e.preventDefault();
      var name = $.trim($("#name3").val());
      var firstname = $.trim($("#firstname").val());
      var email = $.trim($("#email3").val());
      var mobile = $.trim($("#mobile3").val());
      var pid = $.trim($("#pid3").val());
      var message = $.trim($("#message3").val());
      var EmailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
      var phonePattern = /^[0-9]*$/;
      var namePattern = /^([\s\.]?[a-zA-Z]+)+$/;
      var messagePattern = /^([\s\.]?[a-zA-Z]+)+$/;
      var flag = 0;
      var utm_source = $.trim($("#utm_source").val());
      var utm_medium = $.trim($("#utm_medium").val());
      var utm_campaign = $.trim($("#utm_campaign").val());
      var utm_term = $.trim($("#utm_term").val());
      var utm_display = $.trim($("#utm_display").val());
      var csrf_token = $.trim($("#csrf_token").val());
      var form_submission_id = $.trim($("#form_submission_id").val());


      if (name == null || name == "") {
        $("#name3_error").removeClass("error_msg");
        flag++;
      } else if (!namePattern.test(name)) {
        $("#name3_error").removeClass("error_msg");
        $("#name3_error").html("Please Enter Alphabet only");
        flag++;
      } else {
        $("#name3_error").addClass("error_msg");
      }

      // if (email == null || email == "" || !EmailPattern.test(email)) {
      //   $("#email3_error").removeClass("error_msg");
      //   flag++;
      // } else {
      //   $("#email3_error").addClass("error_msg");
      // }

      // if (mobile == null || mobile == "" || !phonePattern.test(mobile)) {
      //   $("#mobile3_error").removeClass("error_msg");
      //   flag++;
      // } else if (mobile.length != 10) {
      //   $("#mobile3_error").removeClass("error_msg");
      //   $("#mobile3_error").html("Please Enter 10 Digit Mobile Number");
      //   flag++;
      // } else {
      //   $("#mobile3_error").addClass("error_msg");
      // }


              let emailValid = email && EmailPattern.test(email);
              let mobileValid = mobile && phonePattern.test(mobile) && mobile.length === 10;

      if (!emailValid && !mobileValid) {
          // Both invalid or empty — show errors
          if (!emailValid) {
              $('#email3_error').removeClass('error_msg').html('Please enter a valid email or phone number');
          } else {
              $('#email3_error').addClass('error_msg').html('');
          }

          if (!mobileValid) {
              $('#mobile3_error').removeClass('error_msg').html('Please enter a valid 10-digit phone number or email');
          } else {
              $('#mobile3_error').addClass('error_msg').html('');
          }

          flag++;
      } else {
          $('#email3_error').addClass('error_msg').html('');
          $('#mobile3_error').addClass('error_msg').html('');
      }


      if ( pid == null || pid == '') {
                  $('#project3_error').removeClass('error_msg');
                  flag++;
              } else if (!namePattern.test(name)) {
                  $('#project3_error').removeClass('error_msg');
                  $('#project3_error').html('Please Enter Alphabet only');
                  flag++;
              } else {
                  $('#project3_error').addClass('error_msg');

              }


      if (message == null || message == "") {
        $("#message3_error").removeClass("error_msg");
        flag++;
      } else if (!messagePattern.test(message)) {
        $("#message3_error").removeClass("error_msg");
        $("#message3_error").html("Please Enter Alphabet only");
        flag++;
      } else {
        $("#message3_error").addClass("error_msg");
      }
      

      if (flag == 0) {
        var data = {
          name: name,
          firstname: firstname,
          email: email,
          mobile: mobile,
          pid: pid,
          message: message,
          utm_source: utm_source,
          utm_medium: utm_medium,
          utm_campaign: utm_campaign,
          utm_term: utm_term,
          utm_display: utm_display,
          csrf_token: csrf_token,
          form_submission_id:form_submission_id
        };

        $('#form3').prop('disabled', true).text('Wait...');

        $.ajax({
          type: "POST",
          url: "savedSend.php",
          data: data,
          // beforeSend: function (result) {
          //   $("#form3").prop("disabled", true).html("Wait...");
          // },
          success: function (result) {
            // alert("Inside Result"result);
            // if (result == 1) {
              window.location.replace("thank-you.php");
            // } else if (result == 0) {
            //   $("#form3").val("Error");
            //   alert("Something went wrong");
            // }
          },
          error: function () {
            // alert("Inside Error");
            $("#form3").val("Error");
          },
        });
      }
    });

    $("#form4").on("click", function (e) {
      e.preventDefault();
      var name = $.trim($("#name4").val());
      var email = $.trim($("#email4").val());
      var mobile = $.trim($("#mobile4").val());
    //   var message = $.trim($("#message3").val());
      var EmailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
      var phonePattern = /^[0-9]*$/;
      var namePattern = /^([\s\.]?[a-zA-Z]+)+$/;
      var flag = 0;
      var utm_source = $.trim($("#utm_source").val());
      var utm_medium = $.trim($("#utm_medium").val());
      var utm_campaign = $.trim($("#utm_campaign").val());
      var utm_term = $.trim($("#utm_term").val());
      var utm_display = $.trim($("#utm_display").val());
      var csrf_token = $.trim($("#csrf_token").val());

      if (name == null || name == "") {
        $("#name4_error").removeClass("error_msg");
        flag++;
      } else if (!namePattern.test(name)) {
        $("#name4_error").removeClass("error_msg");
        $("#name4_error").html("Please Enter Alphabet only");
        flag++;
      } else {
        $("#name4_error").addClass("error_msg");
      }

      if (email == null || email == "" || !EmailPattern.test(email)) {
        $("#email4_error").removeClass("error_msg");
        flag++;
      } else {
        $("#email4_error").addClass("error_msg");
      }

      if (mobile == null || mobile == "" || !phonePattern.test(mobile)) {
        $("#mobile4_error").removeClass("error_msg");
        flag++;
      } else if (mobile.length != 10) {
        $("#mobile4_error").removeClass("error_msg");
        $("#mobile4_error").html("Please Enter 10 Digit Mobile Number");
        flag++;
      } else {
        $("#mobile4_error").addClass("error_msg");
      }

      if (flag == 0) {
        var data = {
          name: name,
          email: email,
          mobile: mobile,
          utm_source: utm_source,
          utm_medium: utm_medium,
          utm_campaign: utm_campaign,
          utm_term: utm_term,
          utm_display: utm_display,
        };

        $.ajax({
          type: "POST",
          url: "send-inquiry.php",
          data: data,
          beforeSend: function (result) {
            $("#form4").html("Wait..");
          },
          success: function (result) {
            if ($('#download-brochure-doc').val() == '1') {
              var link = document.createElement('a');
              link.href = "../pdf/STARDOM-Brochure.pdf";
              link.download = "../pdf/STARDOM-Brochure.pdf";
              link.click();
              link.remove();
            }
            if (result == 1) {
              window.location.replace("thank-you.php");
            } else if (result == 0) {
              $("#form4").val("Error");
              alert("Something went wrong");
            }
          },
          error: function () {
            $("#form3").val("Error");
          },
        });
      }
    });


$(document).on("click", "#download-brochure", function (eve) {
  eve.preventDefault();
  $("#download-brochure-doc").val(1);
});



});
