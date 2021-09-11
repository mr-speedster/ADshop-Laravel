<!DOCTYPE html>
<html>

<head>
	<title>@yield('title')</title>
	<link rel="icon" href="../assets/icons/icon.png">
	<link rel="icon" href="../assets/icons/header-icon.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <img class="wave" src="../assets/icons/wave.png">
	@yield('admin-user')
	<div class="container">
		<div class="img">
            <img src="../assets/icons/lion.svg" alt="" class="img-fluid">
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
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>