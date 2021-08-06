   <template>
    <div class="container">
   <section class="get-in-touch">
      <h1 class="title">Infomation Form</h1>
      
      <form class="contact-form row" method="post" action="{{route('infomationform.store')}}" enctype="multipart/form-data">
         {{csrf_field()}}
         <div class="form-field col-lg-6">
            <input id="fnameth" class="input-text js-input" type="text" name="fnameth" required>
            <label class="label" for="fnameth">Frist Name (TH)</label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="lnameth" class="input-text js-input" type="text" name="lnameth" required>
            <label class="label" for="lnameth">Last Name (TH)</label>
         </div>
         <div class="form-field col-lg-6">
            <input id="fnameen" class="input-text js-input" type="text" name="fnameen" required>
            <label class="label" for="fnameen">Frist Name (En)</label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="lnameen" class="input-text js-input" type="text" name="lnameen" required>
            <label class="label" for="lnameen">Last Name (TH)</label>
         </div>
         <div class="form-field col-lg-6">
            <input id="phone" class="input-text js-input" type="text" name="phone"  required>
            <label class="label" for="phone">Phone</label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="email" class="input-text js-input" type="text" name="email" required>
            <label class="label" for="email">Email</label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="citizenid" class="input-text js-input" type="text" name="citizenid" required>
            <label class="label" for="citizenid">Citizen id</label>
         </div>
         <div class="form-field col-lg-6 ">
            <input id="income" class="input-text js-input" type="text" name="income" required>
            <label class="label" for="income">Income pre month</label>
         </div>
         <div class="form-field col-lg-6 ">
            <select name="gender" class="input-text js-input" required>
               <option value="">-----------Select-----------</option>
               <option value="Male">Male</option>
               <option value="Femail">Femail</option>
           
            </select>
            <label class="label" for="gender">Gender</label>
         </div>
         <div class="form-field col-lg-6 ">
         <input id="address" class="input-text js-input" type="text" name="address" required>
            <label class="label" for="address">Address</label>
         </div>

         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
         </div>
      </form>

     
   </section>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
