<html>
  <head>
    <meta charset="utf-8">
    <title>custom modal</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <style>
    .modal-header h4, .close {
    background-color: #3A73D5;
    color:white !important;
    text-align: center;
    font-size: 30px;
    }
    .modal-footer {
    background-color:#3A73D5;;
    }
    </style>
    
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>bootstrap custom modal</h1>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="padding:25px 50px;background-color: #3A73D5;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4> Welcome to furniture custom modal</h4>
          </div>
          <div class="modal-body" style="padding:40px 50px; ">
            <form role="form" method="post">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required="required">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" required="required">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Phone</label>
                <input type="text" class="form-control" id="phone" name="contact" placeholder="Enter Contact Number" required="required">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Requirements</label>
                <textarea class="form-control" id="rqm" name="message" placeholder="Enter Requirements" required="required">  </textarea>
              </div>
              <input type="submit" value="submit" name="submit" style=" background-color:#3A73D5; width:100%; padding:6px;color:#fff; font-size:16px; margin-top:0px;">
            </form>
          </div>
          <div class="modal-footer">
            <!--  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
$(window).load(function(){
$('#myModal').modal('show');
}); 

// $(document).ready(function() {
//   if ($.cookie('modal_shown') == null) {
//       $.cookie('modal_shown', 'yes', { expires: 7, path: '/' });
//       setTimeout(function(){
//        // $('#myModal').modal('show');
//          $("#myModal").foundation('reveal', 'open');
//       }, 3000);
//    }
// });
  </script>
</body>
</html>