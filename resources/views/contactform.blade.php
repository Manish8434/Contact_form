@extends('layouts.app')

@section('content')
  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">Let's talk about everything!</h3>
              <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" method="POST" action="" id="contact-form" >
          @csrf
          
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                    <span class="text-danger font-weight-bold nameerror"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    <span class="text-danger font-weight-bold emailerror"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                    <span class="text-danger font-weight-bold subjecterror"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                    <span class="text-danger font-weight-bold messageerror"></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4" id="submitButton">
                    <div id="finalresult"></div>
                  </div>
                </div>
              </form>

              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

<script>


$('#submitButton').click(function(e){
  e.preventDefault();
  console.log('button clicked')
    
//Input Field Declaration
  let name = $('#name').val();
  let email = $('#email').val();
  let subject = $('#subject').val();
  let message = $('#message').val();

//Form Validation part

  if(name == ""){
    $('.nameerror').html('Name is Required')
  }else{
    name = $('#name').val();
  }
  if(email == ""){
    $('.emailerror').html('Email is Required')
  }else{
    email = $('#email').val();
  }
  if(subject == ""){
    $('.subjecterror').html('Subject is Required')
  }else{
    subject = $('#subject').val();
  }
  if(message == ""){
    $('.messageerror').html('Message is Required')
  }else{
    message = $('#message').val();
  }

  console.log('Validation is done');
  if(name != "" && email != "" && subject != "" && message != ""){

    //Form error empty section
            $('.nameerror').html('');
            $('.emailerror').html('');
            $('.subjecterror').html('');
            $('.messageerror').html('');


  var newdata = $("#contact-form").serialize();
  console.log(newdata);
  

//   $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

  $.ajax({
      type: "POST",
      url: "{{route('contact-data-submit')}}",
      data: newdata,
      dataType: "json",
      success: function (response) {
          if(response.status == 200){
            
            // alert('Your Query is Submitted');
            $('#finalresult').html(response.message);
            $('#name').val('');
            $('#email').val('');
            $('#subject').val('');
            $('#message').val('');
            
          }
          
      }
  });

}else{
  // $('#finalresult').html('Something Wenr Wrong');
}


})


    </script>

  @endsection