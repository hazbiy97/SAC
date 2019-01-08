<!DOCTYPE html>
<html lang="en">

<head>
  <title>SAC</title>
</head>

<style>
   .wrapper{
    display: flex;
    width: 85%;
    padding: 0px;
    margin: 10px auto;
    justify-content: center;
    /*min-height: calc(100vh - 70px);*/
    z-index: 0;
   }
  .body {
    flex: 1;
    flex-direction: row;
    justify-content: center;
    width: 75%;  
    padding: 0;
    margin: 0;
  }
  .nav{
    flex: 1;
    margin: 10px 0px;
    min-height: 50px;
  }
  .main {
    flex: 1;
    display: flex;
    width: 100%;
    background: white;
    margin-top: 10px;
    //min-height: calc(100vh - 70px);
    padding: 20px;
  }
  .main > .carousel-container{
    max-width: 40%;
    flex: 1;
    margin-right: 20px;
  }
  .carousel-inner > .item > .aspect{
    display: flex;
    padding-bottom: 75%;
    justify-content: center;
    background: gray;
    overflow: hidden;
  }
  .carousel img{
    position: absolute;
    height: 100%;
    width:auto;
    object-fit: cover;
    transform: scale(1);
    -webkit-transition: all 0.3s ease; /* Safari and Chrome */
    -moz-transition: all 0.3s ease; /* Firefox */
    -ms-transition: all 0.3s ease; /* IE 9 */
    -o-transition: all 0.3s ease; /* Opera */
    transition: all 0.3s ease;
  }
  .description {
    flex: 1;
  }
  .description button{
    margin: auto;
    margin-bottom: 10px;
    display: block;
    border: none;
    color: white;
    text-align: center;
    font-size: 18px;
    max-height: 40%;
    width: 40%;
    background-color: gray;
    text-decoration: none;
  }
  .tiles {
    width: 100%;
    height: 100%;
  }

  .tile {
    position: relative;
    float: left;
    width: 33.333%;
    height: 100%;
    overflow: hidden;
  }

  .photo {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    transition: transform .5s ease-out;
  }

  .txt {
    position: absolute;
    z-index: 2;
    right: 0;
    bottom: 10%;
    left: 0;
    font-family: 'Roboto Slab', serif;
    font-size: 9px;
    line-height: 12px;
    text-align: center;
    cursor: default;
  }

  .x {
    font-size: 32px;
    line-height: 32px;
  }
</style>

<!-- PHP checker -->
<? 
function issetor(&$var, $default = false) {
    return isset($var) ? $var : $default;
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<body style="background-color: rgb(245,245,245)">
  <div class="wrapper">
    <section id="kategori" style="background-color: rgb(255,255,255); padding: 50px; margin: 50px; width: 100%">
      <div class="title-body" style="margin-bottom: 50px">
        <h2 style="display: inline-block;"><?= issetor($class_details['name']) ?></h2>
        <h4 style="color: gray;"><?= issetor($class_details['place']) ?></h4>
		<br>
		<label for="usr" style="width: 40%; ">Name:</label>
        <div class="form-group md-6">
		  	<input type="text" class="form-control" id="user_name" style="width: 40%; display: inline;">
        	<button class="btn btn-outline-info" style=" margin-left: 10" onclick="insertTF()">Insert</button>
		</div>
      </div>
    </section>
    <section>
      <div class="footer">
      </div>
    </section>
  </div>
</body>
  
  <!-- <link rel="stylesheet" type="text/css" href="/sac/assets/js/plugins/datatables/jquery.dataTables.min.css"/> -->
  <link rel="stylesheet" type="text/css" href="/sac/assets/js/plugins/datatables/buttons.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script type="text/javascript">
    var insertTF = () => {
      var user_name = $('#user_name').val();
      $.ajax({
        'url': '<?= base_url()?>api/insertTF',
        'dataType': 'json',
        'type': 'POST',
        'data': {
        	user_name,
        },
        'success': function (data) {
          alert('Dataset insert successful!');
          window.location.replace('<?= base_url() ?>/kelas/attendance/<?= $class_details["class_id"] ?>');
        },
        'error':  function (data) {
          alert('Dataset insert failed!');
          console.log('Error occured: ', data);
        },
        cache: true
      })
    };
  </script>
</html>