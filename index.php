<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link href="assets/style.css" rel="stylesheet">
  </head>

  <body>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <p>您好，請選擇商品分類：</p>
         <div class="row">
            <div class="col-sm-12 col-md-4" id="slider-thumbs">
              <select class="form-control shop-category" onchange="item_load()">
              </select>
            </div>
          </div>
      </div>
    </div>


    <div class="container shop-item">
        <div id="main_area">
            <!-- Slider -->
            <div class="row">
                <div class="col-sm-12" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                    </ul>
                </div>
                <!--/Slider-->
            </div>

        </div>
    </div><!--container-->


    <div class="item_modal">
      <div class="modal_close">
        X
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 item_detail_pic">
            <h3>商品標題</h3>
            <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/1000x500&text=15"></a>
          </div>
          <div class="col-sm-12 col-md-6 item_detail_data">
            <p>感謝您的購買</p>
            <form action="success.php" method="post">
              <div class="form-group">
                <fieldset class="rating">
                  <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                  <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
                <br><br>
              </div>
              <div class="form-group">
                <label for="nickname">您的暱稱</label>
                <input type="text" class="form-control" name="nickname" placeholder="暱稱">
              </div>
              <div class="form-group">
                <label for="content">您的意見</label>
                <textarea class="form-control" name="content" rows="5"></textarea>
              </div>
              <input type="submit" class="btn btn-default" value="送出">
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/script.js"></script>
  </body>
</html>
