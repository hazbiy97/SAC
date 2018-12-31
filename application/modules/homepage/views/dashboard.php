<!DOCTYPE html>
<html lang="en">

<head>
  <title>SAC</title>
  <link rel="stylesheet" href="assets/homepage/css/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/homepage/themed.css">
</head>

<style type="text/css">
  *,
*:before,
*:after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.stage {
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.wrapper {
  position: relative;
  color: #fff;
  /*font-size: 2.5rem;*/
  font-size: 4rem;
  text-transform: uppercase;
  letter-spacing: 0.25rem;
  padding-top: 0.65rem;
  padding-left: 0.5rem;
  padding-right: 0.36rem;
  padding-bottom: 0.2rem;
}
.slash {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
          transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
  -webkit-transform-origin: center center;
          transform-origin: center center;
  width: 0.15rem;
  height: 145%;
  background: #fff;
  z-index: 4;
  -webkit-animation: slash 6s ease-in infinite;
          animation: slash 6s ease-in infinite;
}
.slash:before {
  content: '';
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 0.75rem;
  height: 120%;
  z-index: -1;
}
.slash:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff;
}
.sides {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  overflow: hidden;
}
.sides .side {
  position: absolute;
  background: #fff;
}
.sides .side:nth-child(1) {
  top: 0;
  left: 0;
  width: 100%;
  height: 0.15rem;
  -webkit-transform: translateX(-101%);
          transform: translateX(-101%);
  -webkit-animation: side-top ease 6s infinite;
          animation: side-top ease 6s infinite;
}
.sides .side:nth-child(2) {
  top: 0;
  right: 0;
  width: 0.15rem;
  height: 100%;
  -webkit-transform: translateY(-101%);
          transform: translateY(-101%);
  -webkit-animation: side-right ease 6s infinite;
          animation: side-right ease 6s infinite;
}
.sides .side:nth-child(3) {
  left: 0;
  bottom: 0;
  width: 100%;
  height: 0.15rem;
  -webkit-transform: translateX(101%);
          transform: translateX(101%);
  -webkit-animation: side-bottom ease 6s infinite;
          animation: side-bottom ease 6s infinite;
}
.sides .side:nth-child(4) {
  top: 0;
  left: 0;
  width: 0.15rem;
  height: 100%;
  -webkit-transform: translateY(101%);
          transform: translateY(101%);
  -webkit-animation: side-left ease 6s infinite;
          animation: side-left ease 6s infinite;
}
.text {
  position: relative;
}
.text--backing {
  opacity: 0;
}
.text--left {
  position: absolute;
  top: 0;
  left: 0;
  width: 51%;
  height: 100%;
  overflow: hidden;
}
.text--left .inner {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
  -webkit-animation: text-left 6s ease-in-out infinite;
          animation: text-left 6s ease-in-out infinite;
}

#class_table>tbody>tr>td{
    cursor: pointer;
}

.text--right {
  position: absolute;
  top: 0;
  right: 0;
  width: 50%;
  height: 100%;
  overflow: hidden;
}
.text--right .inner {
  -webkit-transform: translateX(-200%);
          transform: translateX(-200%);
  -webkit-animation: text-right 6s ease-in-out infinite;
          animation: text-right 6s ease-in-out infinite;
}
@-webkit-keyframes slash {
  0% {
    -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
            transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
  }
  6% {
    -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(1);
            transform: translate(-50%, -50%) rotate(-24deg) scaleY(1);
  }
  13% {
    -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(1);
            transform: translate(-50%, -50%) rotate(-24deg) scaleY(1);
  }
  16.6% {
    -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
            transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
  }
  100% {
    -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
            transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
  }
}
@keyframes slash {
  0% {
    -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
            transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
  }
  6% {
    -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(1);
            transform: translate(-50%, -50%) rotate(-24deg) scaleY(1);
  }
  13% {
    -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(1);
            transform: translate(-50%, -50%) rotate(-24deg) scaleY(1);
  }
  16.6% {
    -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
            transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
  }
  100% {
    -webkit-transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
            transform: translate(-50%, -50%) rotate(-24deg) scaleY(0);
  }
}
@-webkit-keyframes text-left {
  0% {
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
  10% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  58% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  70% {
    -webkit-transform: translateX(-200%);
            transform: translateX(-200%);
  }
  100% {
    -webkit-transform: translateX(-200%);
            transform: translateX(-200%);
  }
}
@keyframes text-left {
  0% {
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
  10% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  58% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  70% {
    -webkit-transform: translateX(-200%);
            transform: translateX(-200%);
  }
  100% {
    -webkit-transform: translateX(-200%);
            transform: translateX(-200%);
  }
}
@-webkit-keyframes text-right {
  0% {
    -webkit-transform: translateX(-200%);
            transform: translateX(-200%);
  }
  10% {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  58% {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  70% {
    -webkit-transform: translateX(-300%);
            transform: translateX(-300%);
  }
  100% {
    -webkit-transform: translateX(-300%);
            transform: translateX(-300%);
  }
}
@keyframes text-right {
  0% {
    -webkit-transform: translateX(-200%);
            transform: translateX(-200%);
  }
  10% {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  58% {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  70% {
    -webkit-transform: translateX(-300%);
            transform: translateX(-300%);
  }
  100% {
    -webkit-transform: translateX(-300%);
            transform: translateX(-300%);
  }
}
@-webkit-keyframes side-top {
  0%, 14% {
    -webkit-transform: translateX(-101%);
            transform: translateX(-101%);
  }
  24%, 55% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  65% {
    -webkit-transform: translateX(101%);
            transform: translateX(101%);
  }
  100% {
    -webkit-transform: translateX(101%);
            transform: translateX(101%);
  }
}
@keyframes side-top {
  0%, 14% {
    -webkit-transform: translateX(-101%);
            transform: translateX(-101%);
  }
  24%, 55% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  65% {
    -webkit-transform: translateX(101%);
            transform: translateX(101%);
  }
  100% {
    -webkit-transform: translateX(101%);
            transform: translateX(101%);
  }
}
@-webkit-keyframes side-right {
  0%, 14%, 23% {
    -webkit-transform: translateY(-101%);
            transform: translateY(-101%);
  }
  30%, 62% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  72% {
    -webkit-transform: translateY(101%);
            transform: translateY(101%);
  }
  100% {
    -webkit-transform: translateY(101%);
            transform: translateY(101%);
  }
}
@keyframes side-right {
  0%, 14%, 23% {
    -webkit-transform: translateY(-101%);
            transform: translateY(-101%);
  }
  30%, 62% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  72% {
    -webkit-transform: translateY(101%);
            transform: translateY(101%);
  }
  100% {
    -webkit-transform: translateY(101%);
            transform: translateY(101%);
  }
}
@-webkit-keyframes side-bottom {
  0%, 14%, 24%, 28% {
    -webkit-transform: translateX(101%);
            transform: translateX(101%);
  }
  37%, 70% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  79% {
    -webkit-transform: translateX(-101%);
            transform: translateX(-101%);
  }
  100% {
    -webkit-transform: translateX(-101%);
            transform: translateX(-101%);
  }
}
@keyframes side-bottom {
  0%, 14%, 24%, 28% {
    -webkit-transform: translateX(101%);
            transform: translateX(101%);
  }
  37%, 70% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  79% {
    -webkit-transform: translateX(-101%);
            transform: translateX(-101%);
  }
  100% {
    -webkit-transform: translateX(-101%);
            transform: translateX(-101%);
  }
}
@-webkit-keyframes side-left {
  0%, 14%, 24%, 34%, 35% {
    -webkit-transform: translateY(101%);
            transform: translateY(101%);
  }
  44%, 79% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  86% {
    -webkit-transform: translateY(-101%);
            transform: translateY(-101%);
  }
  100% {
    -webkit-transform: translateY(-101%);
            transform: translateY(-101%);
  }
}
@keyframes side-left {
  0%, 14%, 24%, 34%, 35% {
    -webkit-transform: translateY(101%);
            transform: translateY(101%);
  }
  44%, 79% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  86% {
    -webkit-transform: translateY(-101%);
            transform: translateY(-101%);
  }
  100% {
    -webkit-transform: translateY(-101%);
            transform: translateY(-101%);
  }
}

</style>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700');
    .sr-item{
        display: none;
    }
    .card-img-bottom-mr {
      color: #fff;
      height: 13rem;
      /*background: url(assets/coroowicaksono/homepage/images/bg/15.jpg) center no-repeat;*/
      background-size: cover;
    }
    .card-img-bottom-act {
      color: #fff;
      height: 12rem;
      /*background: url(assets/coroowicaksono/homepage/images/bg/16.jpg) center no-repeat;*/
      background-size: cover;
    }
    .card-img-bottom-asg {
      color: #fff;
      height: 13rem;
      /*background: url(assets/coroowicaksono/homepage/images/bg/11.jpg) center no-repeat;*/
      background-size: cover;
    }
    div[class^="card-img-bottom-"]:before{
        content: '\A';
        position: absolute;
        width: 100%;
        height:100%;
        top:0;
        left:0;
        background:rgba(0,0,0,0.5);
        opacity: 1;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    .table>thead:first-child>tr:first-child>th {
        text-align: center;
    }

    .table > tbody > tr > td,
    .table > tfoot > tr > td {
        border-width: 0;
        vertical-align: middle;
    }
    b{color:#00285f;}
    .labelselect {
        width: 20% !important
    }
    .text-muted>.fa{
        font-size:15px;
        margin-bottom: 10px;
        line-height:20px;
    }
    .select {
        width: 80% !important;
        float: left;
    }
    .tile{
        margin-bottom:8px;
    }

    .switch {
        margin: 0;
        padding: 0;
    }
    span.item-count.animate-number.semi-bold {
        font-size: 20px;
    }
    .item-1,
    .item-2,
    .item-3 {
        font-family:'Roboto';
        position: absolute;
        display: block;
        top: 2em;
        font-size: 2em;

        animation-duration: 10s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
    }

    .item-1{
        animation-name: anim-1;
    }

    .item-2{
        animation-name: anim-2;
    }

    .item-3{
        animation-name: anim-3;
    }

    @keyframes anim-1 {
        0%, 8.3% { top: -50px; opacity: 0.5; }
        8.3%,25% { top: 25%; opacity: 1; }
        33.33%, 100% { top: 50px; opacity: 0; }
    }

    @keyframes anim-2 {
        0%, 33.33% { top: -50px; opacity: 0; }
        41.63%, 58.29% { top: 25%; opacity: 1; }
        66.66%, 100% { top: 50px; opacity: 0; }
    }

    @keyframes anim-3 {
        0%, 66.66% { top: -50px; opacity: 0; }
        74.96%, 91.62% { top: 25%; opacity: 1; }
        100% { top: 50px; opacity: 0; }
    }
</style>

<!-- PHP checker -->
<? 
function issetor(&$var, $default = false) {
    return isset($var) ? $var : $default;
}
?>

<body style="background-color: rgb(255,255,255)">
  <section id="kategori" style="background-color: rgb(245,245,245); padding-top: 20px; padding-bottom: 60px; padding-top: 60px; margin: 0;">
    <div class="container" >
      <div style="padding-top: 10px; padding-bottom: 10px">
        <h3>Class</h3>
      </div>
      <div class="flexslider carousel">
        <ul class="slides">
          <?php if (issetor($classes)): ?>
            <?php foreach ($classes as $key => $class): ?>
              <li>
              <a href="<?= base_url('kelas/attendance/'.$class['class_id'])?>">
                <div class="item">
                  <div class="item-image-no-padding">
                      <div class='card-img-bottom-act'>
                          <div class='stage'>
                            <div class='wrapper' style='font-size: 2.7rem;'>
                              <div class='slash'></div>
                              <div class='sides'>
                                <div class='side'></div>
                                <div class='side'></div>
                                <div class='side'></div>
                                <div class='side'></div>
                              </div>
                              <div class='text'>
                                <div class='text--backing'><?= $class['short_name']?></div>
                                <div class='text--left'>
                                  <div class='inner'><?= $class['short_name']?></div>
                                </div>
                                <div class='text--right'>
                                  <div class='inner'><?= $class['short_name']?></div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="item-body">
                    <div class="item-title">
                      <?= $class['name']?>
                    </div>
                    <div class="item-desc">
                      <?= $class['place']?>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <?php endforeach ?>
          <?php endif ?>

          <?php 
            $s = array_fill(0,3, '');
            foreach($s as $S) :
          ?>
            <li>
              <!-- <a href="<?= base_url('homepage/kelas/all')?>"> -->
                <div class="item">
                  <div class="item-image">
                    <!-- <img src="<?php echo asset_url().'img/'.$TPs[1]['dashboardImage']?>" alt='' /> -->
                    <div class="item-image-desc">
                      <ul>
                        <li>
                          
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="item-body">
                    <div class="item-title">
                      Cooming Soon
                    </div>
                    <div class="item-desc">
                      -
                    </div>
                  </div>
                </div>
              <!-- </a> -->
            </li>
          <? endforeach; ?>
        </ul>
      </div>
    </div>
  </section>
    <div class="container" style="padding: 50px 0 50px 0">
      <h2>Class List</h2><br>
        <table id="class_table" class="stripe row-border order-column nowrap" style="width:100%; "></table>
      </div>
  <section>
    <div class="footer">

    </div>
  </section>
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="/sac/assets/js/plugins/datatables/buttons.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <!-- FlexSlider -->
  <script defer src="assets/homepage/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(window).load(function () {
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 210,
        itemMargin: 10,
        minItems: 2,
        maxItems: 4,
        start: function (slider) {
          $('body').removeClass('loading');
        }
      });
    });
    $(document).ready(function () {
      var dataObject = <?php echo json_encode($tableDataObject); ?>;

      var columns = [];

      $('#class_table').dataTable({
        "data": dataObject.data,
        "columns": dataObject.columns
      });

      setTimeout(function () {
        $('#load-refresh-1').fadeOut("slow");
      }, 1500);

      var table = $('#class_table').DataTable();
        $('#class_table tbody').on('click', 'tr', function () {
            var data = table.row( this ).data();
            console.log(data);
            window.location.href = "<?= base_url() ?>kelas/attendance/" + data[0];
        } );
    })
    
  </script>

</html>