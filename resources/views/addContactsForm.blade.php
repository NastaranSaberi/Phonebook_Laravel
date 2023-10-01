@include('header')
@include('navbar')

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
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit" class="btn btn-primary" id="submit">فرستادن</button>
    </form>
</div>

    
@include('footer')