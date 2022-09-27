
<?php
 include_once('functions.php');
  include_once('data.php');
 
  $number = $_GET['index'];
  ?>
<html lang="en">      
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
	<body>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="index.php">Home</a></li>
  </ol>
  </nav>
		<link rel="stylesheet" href="assets/css/detail.css" />
		<title><?= "ASE 230 - "?><?=$students[$number]['name']?></title>
		<div class="container text-center mb-5">
			<h1> <?="This is ASE 230 - "?><?= $students[$number]['name'] ?></h1>
		</div>
		<div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6 ">
        <div class="mb-3">
          <img class="w-100" src='<?= $students[$number]['photo'] ?>' alt="">
        </div>
        <div class="mb-2 d-flex">
          <h4 class='font-weight-normal'><?=$students[$number]['name']?></h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal">Follow on:</p>
            <a href="../www.facebook.com" class="text-muted mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-muted">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
          <p class="pr-2 font-weight-normal"><?=agewithremainder($students[$number]['birthday']) ?></p>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
                <p class="w-25 text-black font-weight-normal">Age:</p>
                <p class='media-body'><?= age($students[$number]['birthday'])?></p>
            </li>
            <li class="media">
              <p class="w-25 text-black font-weight-normal">Dream profession:</p>
              <p class='media-body'><?= $students[$number]['dream profession']?></p>
            </li>
            <li class="media">
              <p class="w-25 text-black font-weight-normal">Dream company: </p>
              <p class='media-body'><?= $students[$number]['company'] ?></p>
            </li>
            <li class="media">
              <p class="w-25 text-black font-weight-normal">Email: </p>
              <p class='media-body'><a href='mailto:<?=$students[$number]['email']?>'><?= $students[$number]['email']?></a></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal">Short intro</h5>
        <p><?= $students[$number]['intro'] ?></p>
        <div class="my-2 bg-light p-2">
          <p class='font-italic mb-0'><?= $students[$number]['quote'] ?></p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal">Top skills</h5>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              <div class='progress-bar-title'><?= $students[$number]['skills'][0] ?></div>
              <span class="progress-bar-number">85%</span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <div class='progress-bar-title'><?= $students[$number]['skills'][1] ?></div>
              <span class="progress-bar-number">70%</span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <div class='progress-bar-title'><?= $students[$number]['skills'][2] ?></div>
              <span class="progress-bar-number">55%</span>
            </div>
          </div>
        </div>
        <h5 class="font-weight-normal">Fun fact</h5>
        <p><?= $students[$number]['fun fact'] ?></p>
      </div>
    </div>
  </div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
