<!doctype html>
<html lang="en">
<head>
	<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/index.css" />
	<title>ASE 230 - Class of Fall 2022</title>
</head>
<body>
<?php
	$students =[['name'=>'Andrew Keller',
				'designation'=>'CIT Student',
				'quote'=>'"Whether you believe you can or can\'t, you\'re right."',
				'dream profession'=>'Remote Developer',
				'company'=>'Intel',
				'intro'=>'"I am a CIT student with a focus on programming and data analytics. My working career has lead me to a wide variety of experiences. Problem solving is at the root of what I do and I am not afraid to ask questions or say I don\'t know."',
				'email'=>'"kellera11@mymail.nku.edu"',
				'skills'=>['Python','Java','Tableau'],
				'funfact'=>'"Secretariat was a champion thouroughbred most know for winning the Triple Crown in 1973. He set and still holds the record at all three Triple Crown races: The Kentucky Derby, The Preakness Stakes and The Belmont Stakes. Considered by most to be the greatest racehorses of all time, he is considered by some as one of the greatest athletes of all time. He became the 9th Triple Crown winner when he won the Belmont Stakes by 31 lengths, approximately 248 feet. There are 13 total Triple Crown winners: Sir Barton (1919), Gallant Fox (1930), Omaha (1935), War Admiral (1937), Whrilaway (1941), Count Fleet (1943), Assault (1946), Citation (1948), Secretariat (1973), Seattle Slew (1977), Affirmed (1978), American Pharoah (2015), Justify (2018)."'],
				['name'=>'Noah Dees',
				'designation'=>'PHP Designer',
				'quote'=>'I may not always have good habits in terms of spending my time or money (which I am working on), but I do have the knowledge to get me out of trouble most of the time!',
				'dream profession'=>'Python Coder',
				'company'=>'IBM',
				'intro'=>'I am a senior at Northern Kentucky University in my final semester. I am ready to finish off my college career with some Server-Side Programming!',
				'email'=>'deesn1@mymail.nku.edu',
				'skills'=>['Finance','Information Technologies','Education'],
				'fun fact'=>'I graduated as the Salutatorian of my high school class and I love to fish.'],['name'=>'Tony Stark','designation'=>'Iron Man','quote'=>'I am Iron Man','dream profession'=>'Avenger','company'=>'Stark Industries','intro'=>'I am Iron Man, and the leading (and strongest) Avenger','email'=>'tstark@Stark.com','skills'=>['World Saving','Engineering','Math'],'fun fact'=>'The Avengers are a group of superheroes.']];
	
	?>
	<div class="container text-center">
		<h1>This is ASE 230 - class of Fall 2022</h1>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-8 col-lg-6">
				<!-- Section Heading-->
					<div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
						<h3>Our Creative <span> Team</span></h3>
						<div class="line"></div>
					</div>
			</div>
		</div>
<div class="row">
<?php	
	for($i=0;$i,$i<count($students);$i++){
		?>
	<div class="col-12 col-sm-6 col-lg-3">
		<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
			<!-- Team Thumb-->
			<div class="advisor_thumb"><a href="detail.php?index=<?= $i ?>"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
				<!-- Social Info-->
				<div class="social-info"><a href="detail.php?index=<?= $i ?>"><i class="fa fa-facebook"></i></a><a href="detail.php?index=<?= $i ?>"><i class="fa fa-twitter"></i></a><a href="detail.php?index=<?= $i ?>"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
			<!-- Team Details-->
			<div class="single_advisor_details_info">
				<h6><?=$students[$i]['name']?></h6> 
				 <p class="designation"><?=$students[$i]['designation']?></p>
			</div>
		</div>
	</div>
	<?php
	}
	?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
