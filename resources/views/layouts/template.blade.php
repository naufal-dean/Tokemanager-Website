<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>TOKEMANAGER</title>
  </head>
  <body>
    <!-- Main -->
    <div class="wrapper">
      <!-- Sidebar -->
      @include('inc.sidebar')
      <!-- Content -->
      <div class="content">
        @include('inc.navbar', ['title' => $title])
        @include('inc.messages')
        <div class="content-box">
          @yield('content')
        </div>
        <div class="content-box-separator"></div>
        @include('inc.footer')
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    {{-- Script for sidebar --}}
    <script>
      $(document).ready(function(){
        $('#sidebarCollapse').on('click',function(){
          $('#sidebar').toggleClass('active');
        });
      });
    </script>

    {{-- Script for form --}}
    <script type="text/javascript">
        $(document).ready(function(){
          var postURL = "<?php echo url('/penjualan'); ?>";
          var i=1;

          $('#add').click(function(){
               i++;
               $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Kode" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Nama" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Harga" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Jumlah" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Subtotal" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
          });


          $(document).on('click', '.btn_remove', function(){
               var button_id = $(this).attr("id");
               $('#row'+button_id+'').remove();
          });

          $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $('#submit').click(function(){
               $.ajax({
                    url:postURL,
                    method:"POST",
                    data:$('#add_name').serialize(),
                    type:'json',
                    success:function(data)
                    {
                        if(data.error){
                            printErrorMsg(data.error);
                        }else{
                            i=1;
                            $('.dynamic-added').remove();
                            $('#add_name')[0].reset();
                            $(".print-success-msg").find("ul").html('');
                            $(".print-success-msg").css('display','block');
                            $(".print-error-msg").css('display','none');
                            $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                        }
                    }
               });
          });

          function printErrorMsg (msg) {
             $(".print-error-msg").find("ul").html('');
             $(".print-error-msg").css('display','block');
             $(".print-success-msg").css('display','none');
             $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
             });
          }
        });
    </script>
  </body>
</html>
