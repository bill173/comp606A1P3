$(document).ready(function(){
    $("#registration").validate({
       rules:{
           email:{
               required:true,
               email:true
           },
           firstname:"required",
         
           lastname:{
               required:true,
               minlength:3
           },
           phoneno:{
            required:true,
            minlength:8
            },
           pwd:{
            required:true,
            minlength:3
           },
           name:"required",
           type:"required",
           motivation:"required",
           date:"required",
           timeslot:"required",
       },
       messages:{
            firstname:'First name can not be empty',
            name:'name can not be empty',
            type:'Select a massage type',
            motivation:'Select a motivation',
            date:'Date can not be empty',
            timeslot:'timeslot can not be empty',
            lastname:{
                required:'Last name can not be empty',
                minlength:'Must be 3 characters or more'
            },
            phoneno:{
                required:'phone number can not be empty',
                minlength:'Must be 8 numbers or more'
            },
            email:{
                required:'email can not be empty',
                email:'Enter a valid email!'

            },
            pwd:{
                required:'Password can not be empty',
                minlength:'Must be 3 characters or more'
            },
            submitHandler: function(form){
                form.submit();
            }

       }
    });
})