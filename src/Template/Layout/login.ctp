<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Mumkins Admin Console</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
 
 <?php echo $this->Html->css('/assets/main.css'); ?>
<!--<style>
div.message{
	text-align: center;
	cursor: pointer;
	display: block;
	font-weight: normal;
	padding: 0 1.5rem 0 1.5rem;
	transition: height 300ms ease-out 0s;
	background-color: #a0d3e8;
	color: #626262;
	top: 15px;
	right: 15px;
	z-index: 999;
	overflow: hidden;
	height: 50px;
	line-height: 2.5em;
}

div.message.error {
    background-color: #C3232D;
    color: #FFF;
}
</style>-->
</head>
<body style="background :#343a40 !important;">
       	<div class="container" >
		 
			 <?= $this->fetch('content') ?>
		</div>
	</body>
	</html>
