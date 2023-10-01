<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="form mt-5">
    <form method="post" action="/add_contacts">
        <div class="mb-3 ">
            <label class="form-label">نام</label>
            <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 ">
            <label class="form-label">نام خانوادگی</label>
            <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">ایمیل</label>
            <input type="text" name="email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 ">
            <label class="form-check-label" >شماره تلفن </label>
            <input type="input" name="phone_number" class="form-control mt-1" id="exampleCheck1">
        </div>
        <div class="mb-3">
            <label class="form-check-label" >شماره ثابت</label>
            <input type="input" name="landline_number" class="form-control mt-1" id="exampleCheck1">
        </div>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <button type="submit" class="btn btn-primary" id="submit">فرستادن</button>
    </form>
</div>

    
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nastaran/PhoneNumber/resources/views/addContactsForm.blade.php ENDPATH**/ ?>