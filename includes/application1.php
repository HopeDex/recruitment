<?php
include("config.php");
$getData = mysqli_query($link, "SELECT*FROM vacancy");
$i = 1;
// while ( $i<=3) {
// while ($fetch=mysqli_fetch_array($getData)




//  $qry = $conn->query("SELECT * FROM vacancy where id=".$_GET['id'])->fetch_array();
// foreach($qry as $k =>$v){
//    $$k = $v;
//  }
?>
<div class="container-fluid">
  <form id="manage-application" method="post" action="../includes/resumeUpload.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="">

    <input type="hidden" name="position_id" value="<?php ?>">
    <div class="col-md-12">
      <div class="row">
        <h3>Application Form for <?php ?></h3>
      </div>
      <hr>

      <div class="row form-group">
        <div class="input-group col-md-4 mb-3">


          <input type="file" name="resume" required>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-7">

          <input type="submit" name="submit" class="btn btn-sm btn-primary">
        </div>
      </div>
    </div>
  </form>
</div>

<?php
// require("application.php");
?>

<script>
  function displayfname(input, _this) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        console.log(input.files[0].name)
        _this.siblings('label').html(input.files[0].name);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
  $(document).ready(function() {
    $('#manage-application').submit(function(e) {
      e.preventDefault()
      start_load()
      $.ajax({
        url: 'index.php?action=save_application',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        error: err => {
          console.log(err)
        },
        success: function(resp) {
          if (resp == 1) {
            alert_toast('Application successfully submitted.', 'success')
            setTimeout(function() {
              location.reload()
            }, 1000)
          }
        }
      })

    })
  })
</script>