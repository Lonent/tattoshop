<?php include 'header.php' ?>
<main>
	<div class="row w-75 mx-auto h-100 pb-5">
		<div class="  w-50 mx-auto row  p-4 m-5" style="height: 27em;">
			<h3>Log in to your account</h3>
			<div class="form-group">
    			<label for="exampleFormControlInput1">Email address</label>
    			<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  			</div>
  			<div class="form-group">
  			  <label for="exampleInputPassword1">Password</label>
  			  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  			</div>
  			 <form class="h-25">
  			 	<button type="submit" class="sign-btn w-100 ">Sign in</button>
  			 </form>
		</div>
		<div class="   w-50 mx-auto row  p-4 m-5" style="height: 27em;">
			<div class="mx-auto row h-50 " style="height: 27em;">
			<h3>Need an account?</h3>
  			 <form action="sign-up.php" class="h-25">
  			 	<button type="submit" class="sign-btn w-75 ">Sign up</button>
  			 </form>
		</div>
		</div>
	</div>
</main>
<?php include 'footer.php' ?>