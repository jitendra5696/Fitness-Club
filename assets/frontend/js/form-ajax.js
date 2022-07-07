$('#send').click(function () {
  // var file_data = $('#uploadfile').prop('files')[0];
  // var form_data = new FormData();
  // form_data.append('file', file_data);
  // alert(form_data);
  // $.ajax({
  //     url:_base_url + '/home/membership', // <-- point to server-side PHP script
  //     dataType: 'text',  // <-- what to expect back from the PHP script, if anything
  //     cache: false,
  //     contentType: false,
  //     processData: false,
  //     data: form_data,
  //     type: 'post',
  //     success: function(php_script_response){
  //         alert(php_script_response); // <-- display response from the PHP script, if any
  //     }
  //  });
  $('#memberForm').validate({

      rules:{

          name:{
              required: true
          },
          email:{
              required: true,
              email:true,
              remote: {
               url: _base_url + '/Members/check_email',
               type: "post",
               data: {
                  email: function() {
                   return $("#email").val();
                   }
               }
          }
          },
          password:{
              required: true,
              minlength: 5
          },
          conf_password:{
              required: true,
              minlength: 5,
              equalTo: "#password"
          },
          mobile:{
              required: true,
              digits: true
          },
          date:{
              required: true
          },
          gender:{
              required: true
          },
          age:{
              required: true,
              digits: true
          },
          batch:{
              required: true
          },
          current_weight:{
              required: true,
              number: true
          },
          desired_weight:{
              required: true,
              number: true
          },
          trainer:{
              required: true
          }

      },
      messages:{

        name:{
            required: 'Please Enter your name'
        },
        email:{
            required: 'Please Enter your Mail id',
            remote: 'This Email-id is already Register'
        },
        password:{
            required: 'Enter your secret password'
        },
        conf_password:{
            required: 'Password Not match'
        },
        mobile:{
            required: 'Please Enter your Mobile No.',
            digits: 'Please Enter numbers only'
        },
        date:{
            required: 'Please select joining Date'
        },
        gender:{
            required: 'Please Select your Gender'
        },
        age:{
            required: 'Please Enter your Age',
            digits:'Numbers and Special charcters not allowed'
        },
        fees:{
            required: 'Please Confirm Fees Paid or Pending'
        },
        batch:{
            required: 'Please Select your Batch Schedule'
        },
        current_weight:{
            required: 'Please Enter your Current weight in kgs',
            number: 'Please Enter numbers only'
        },
        desired_weight:{
            required: 'Please Enter your Desired weight in kgs',
            number: 'Please Enter numbers only'
        },
        trainer:{
            required: 'Please Confirm Do you need Personal Trainer?'
        }

      },
      submitHandler: function(form) {
          var FormData = $('#memberForm').serialize();

          $.ajax({
              url: _base_url + '/home/membership',
              type:'post',
              data: FormData,
              success:function(data){
                $('#memberForm').trigger('reset');
                swal({
                  title: "Registration Done!",
                  text: "Try Log-In!",
                  icon: "success",
                });
              }
          });
      }
  });

   if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(memberForm.email.value)){
     $("#invalid").text("");
      return (true);
    }else{
      $("#invalid").text("Email id is not valid");
      $('#email').focus();
      return (false);
  }
});
$('#sendMessageButton').click(function () {
  $('#contactForm').validate({

      rules:{

          fullname:{
              required: true
          },
          email:{
              required: true,
              email:true
          },
          subject:{
              required: true
          }

      },
      messages:{

        fullname:{
            required: 'Please Enter your Fullname'
        },
        email:{
            required: 'Please Enter your Mail id'
        },
        subject:{
            required: 'Enter your Enquiry Subject'
        }
      },
      submitHandler: function(form) {
          var details = $('#contactForm').serialize();
          $.ajax({
              url: _base_url + '/home/contact',
              type:'post',
              data: details,
              success:function(data){
                swal({
                  title: "Thanks....!",
                  text: "We will contact you soon....!!",
                  icon: "success",
                });
                $('#contactForm').trigger('reset');
              }
          });
      }
  });
  if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(contactForm.email.value)){
    $("#invalid_email").text("");
    return (true);
  }else{
    $("#invalid_email").text("Email id is not valid");
    $('#email').focus();
    return (false);
  }
});
