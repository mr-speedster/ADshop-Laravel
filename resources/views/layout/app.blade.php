<!DOCTYPE html>
<html>

<head>
	<title>@yield('title')</title>
	<link rel="icon" href="../assets/icons/icon.png">
	<link rel="icon" href="../assets/icons/header-icon.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/app.css">
</head>

<body>
    <img class="wave" src="../assets/icons/wave.png">
	<div class="container">
		<div class="img">
            <img src="images/lion.svg" alt="" class="img-fluid">
		</div>
		<div class="login-content">
        <!--form-->
            @yield('form')
        <!--form-->
        </div>
	</div>
	<script>
		const inputs = document.querySelectorAll(".input");


		function addcl() {
			let parent = this.parentNode.parentNode;
			parent.classList.add("focus");
		}

		function remcl() {
			let parent = this.parentNode.parentNode;
			if (this.value == "") {
				parent.classList.remove("focus");
			}
		}


		inputs.forEach(input => {
			input.addEventListener("focus", addcl);
			input.addEventListener("blur", remcl);
		});
	</script>

</body>

</html>