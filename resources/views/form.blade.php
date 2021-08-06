
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link href="/css/formstyle.css" rel="stylesheet" id="bootstrap-css">
    <script src="{{ asset('/js/app.js')}}" ></script>
</head>
<body>

<div id="app">
<div class="container">
   
   <section class="get-in-touch">
      <h1 class="title">Information Form</h1>
      
      <form class="contact-form row" method="post" action="{{route('infomationform.store')}}" enctype="multipart/form-data">
         {{csrf_field()}}
         <div class="form-field col-lg-6">
            <input id="fnameth" class="input-text js-input" type="text" name="fnameth" required>
            <label class="label" for="fnameth">First Name (TH) <span class="text-danger"> *</span></label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="lnameth" class="input-text js-input" type="text" name="lnameth" required>
            <label class="label" for="lnameth">Last Name (TH) <span class="text-danger"> *</span></label>
         </div>
         <div class="form-field col-lg-6">
            <input id="fnameen" class="input-text js-input" type="text" name="fnameen" required>
            <label class="label" for="fnameen">First Name (En) <span class="text-danger"> *</span></label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="lnameen" class="input-text js-input" type="text" name="lnameen" required>
            <label class="label" for="lnameen">Last Name (TH) <span class="text-danger"> *</span></label>
         </div>
         <div class="form-field col-lg-6">
            <input id="phone" class="input-text js-input" type="text" name="phone"  required>
            <label class="label" for="phone">Phone <span class="text-danger"> *</span></label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="email" class="input-text js-input" type="text" name="email" required>
            <label class="label" for="email">Email <span class="text-danger"> *</span></label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="citizenid" class="input-text js-input" type="text" name="citizenid" required>
            <label class="label" for="citizenid">Citizen id <span class="text-danger"> *</span></label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="income" class="input-text js-input" type="text" name="income" required>
            <label class="label" for="income">Income <span class="text-danger"> *</span></label>
         </div>
         <div class="form-field col-lg-6 ">
            <select name="gender" class="input-text js-input" required>
               <option value="">-----------Select-----------</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
            </select>
            <label class="label" for="gender">Gender <span class="text-danger"> *</span></label>
         </div>
         <div class="form-field col-lg-6 ">
         <input id="address" class="input-text js-input" type="text" name="address" required>
            <label class="label" for="address">Address <span class="text-danger"> *</span></label>
         </div>

         <div class="form-field col-lg-12">
         <input id="ip" class="input-text js-input" type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
            <input class="submit-btn" type="submit" value="Submit">
         </div>
      </form>

     
   </section>
</div> 
</div>
</body>
</html>
