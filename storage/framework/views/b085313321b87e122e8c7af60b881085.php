<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

             
    
      <div class="col-12">
          <div class="table-responsive">
              <table class="table table-bordered text-center table-dark table-striped mt-2">
              <thead>
              <tr>
                  <th scope="col">کد</th>
                  <th scope="col">نام</th>
                  <th scope="col">نام خانوادگی</th>
                  <th scope="col">ایمیل</th>
                  <th scope="col">شماره تلفن</th>
                  <th scope="col">شماره ثابت</th>
              </tr>
              </thead>
                <tbody>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($contact->id); ?></td>
                        <td><?php echo e($contact->first_name); ?></td>
                        <td><?php echo e($contact->last_name); ?></td>
                        <td><?php echo e($contact->email); ?></td>
                        <td><?php echo e($contact->phone_number); ?></td>
                        <td><?php echo e($contact->landline_number); ?></td>   
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
              </table>
              </div>  
            </div>
          </div>

          <a href="addContactsForm">
              <div class="new_contact">
                  <img src="Images/312-256.webp" alt="add_contact" width="40px">
                  افزودن مخاطب جدید
              </div>
          </a>
        
          <!-- Button trigger modal -->
          <button type="button" class="btn message" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img src="Images/9223632.png" alt="add_contact" width="40px">
          پاک کردن لیست مخاطبین    
          </button>

          <!-- Modal -->
          
          <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form  method="post" action="delet_contact_list.php">
                  <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel" style="margin-right:10%;">پاک بشه دیگه برنمیگرده هاااااپاک بشه ؟😩🤦🏻‍♀️</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-footer mrg" >
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="margin-left:9%;">نه بیخیال 😅</button>
                    <button type="submit" class="btn btn-primary" style="margin-left:20%;" name="delet_list">ارههههههههه😏</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
  
    </div>
 
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nastaran/PhoneNumber/resources/views/welcome.blade.php ENDPATH**/ ?>