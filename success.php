<?
  require 'vendor/autoload.php';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if( isset($_POST['nickname']) AND !empty($_POST['rating']) ) {

        $item_id = htmlentities($_POST['item_id'], ENT_QUOTES, 'UTF-8');
        $item_name = htmlentities($_POST['item_name'], ENT_QUOTES, 'UTF-8');
        $cat_id = htmlentities($_POST['item_category_id'], ENT_QUOTES, 'UTF-8');
        $nickname = htmlentities($_POST['nickname'], ENT_QUOTES, 'UTF-8');
        $content = htmlentities($_POST['content'], ENT_QUOTES, 'UTF-8');
        $ranking = htmlentities($_POST['rating'], ENT_QUOTES, 'UTF-8');
        $company_id = htmlentities($_POST['item_company_id'], ENT_QUOTES, 'UTF-8');
        $time=date("y-m-d H:i:s");
        $data_array = array('feedback_cat_id' => $cat_id , 'feedback_item_id' => $item_id , 'feedback_nickname' => $nickname , 'feedback_content' => $content , 'feedback_ranking' => $ranking , 'feedback_datetime' => $time ,'feedback_item_name' => $item_name , 'feedback_company_id' => $company_id);
        $DAO = new DAO();
        $result_user=$DAO->insert('feedback',$data_array);
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>顧客回應</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link href="assets/style.css" rel="stylesheet">

    <style type="text/css">
      body{
        padding-top: 15%;
      }
    </style>
  </head>

  <body>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <!-- <p>感謝您的回應，您的折扣碼為：</p> -->
         <div class="row">
            <div class="col-sm-12 col-md-4" id="slider-thumbs">
              <h2>感謝您的回應</h2>
            </div>
          </div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
