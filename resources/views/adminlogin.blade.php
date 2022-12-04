@extends('master')
@section("content")

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="{{asset('img/lo.png')}}"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">We are The Cloud Team</h4>
                  </div>
   
       
                  <form action="admin_login" method="post">
                    @csrf
                    <p>Please login to your account</p>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" class="form-control"
                        placeholder="email address" name="email"/>
                      <label class="form-label" for="form2Example11">email</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" class="form-control" name="password" />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                        in</button>
    
                    </div>
  
                  </form>
  
                </div>
              
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <h3 class="small text-white">We expertise in Cloud computing and handle cloud operations proessionaly and efficiently</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection