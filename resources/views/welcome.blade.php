@include('header')
@include('navbar')

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

        @foreach($contacts as $contact)
          <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->first_name}}</td>
            <td>{{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->phone_number}}</td>
            <td>{{$contact->landline_number}}</td>   
          </tr>
        @endforeach

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
 
@include('footer')