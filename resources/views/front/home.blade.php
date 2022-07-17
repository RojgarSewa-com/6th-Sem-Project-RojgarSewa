@extends('front.layouts.app')
@section('content')
<style>
    *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
    .box_nav_bar {
    height: 10em;
}
 

.containerss{
    
    display: flex;
    margin-left:63px;
    padding: 10px 10px 10px 10px;
    flex-wrap: wrap;
    flex-direction : row;
    
}

.card {
    margin: 8px;
    cursor: pointer;
    color: white;
}
.card{
    
    background-color: rgb(94, 58, 128);
    width:200px;
    height:239px;
    margin:20px;
    text-align: center;
    border-radius: 20px;
    
}
.icon{
    
    height:200px;
    background-image:url("http://127.0.0.1:8000/images/elec.jpg");
    background-size: cover;
    border-radius: 15px 15px 0 0;

}
.icon1{
    
    height:200px;
    background-image:url("http://127.0.0.1:8000/images/teacher.png");
    background-size: cover;
    border-radius: 15px 15px 0 0;

}
.icon2{
    
    height:200px;
    background-image:url("http://127.0.0.1:8000/images/web.jpg");
    background-size: cover;
    border-radius: 15px 15px 0 0;

}
.icon3{
    
    height:200px;
    background-image:url("http://127.0.0.1:8000/images/plumber.png");
    background-size: cover;
    border-radius: 15px 15px 0 0;

}
.icon4{
    
    height:200px;
    background-image:url("http://127.0.0.1:8000/images/laptop-repair-3690681-3073968.png");
    background-size: cover;
    border-radius: 15px 15px 0 0;

}
.icon5{
    
    height:200px;
    background-image:url("http://127.0.0.1:8000/images/Tech support.jpg");
    background-size: cover;
    border-radius: 15px 15px 0 0;

}
.icon6{
    
    height:200px;
    background-image:url("http://127.0.0.1:8000/images/salesman (1).jpg");
    background-size: cover;
    border-radius: 15px 15px 0 0;

}
.icon7{
    
    height:200px;
    background-image:url("http://127.0.0.1:8000/images/plumber.png");
    background-size: cover;
    border-radius: 15px 15px 0 0;

}
.icon8{
    
    height:200px;
    background-image:url("http://127.0.0.1:8000/images/IT technician.jpg");
    background-size: cover;
    border-radius: 15px 15px 0 0;

}
.icon9{
    
    height:200px;
    background-image:url("http://127.0.0.1:8000/images/HomeTutor.png");
    background-size: cover;
    border-radius: 15px 15px 0 0;

}
.card:hover{
    background-color: lightcoral;
    color: wheat;
    transform: scale(1.2);
    transition: all 0.5s ease;

}
#teext{
    font-size:20px;
}
.containers {
  display:flex;
  justify-content:center;
  color:black;
  margin-top:2px;
}
.containers:hover{
    background-color: lightcoral;
    color: wheat;
    transform: scale(1.2);
    transition: all 0.5s ease;
}

 </style>
<div class="container-fluid banner text-center">
<h1 style="padding-top: 6rem;">Services On Your Finger.</h1>
    <h3 class="pt-4">An innovative, more efficient platform for service providers and <br> users ask and give services.
    </h3>
    <div class="input-group container mt-5">
        <input type="search" class="form-control" placeholder="Enter a Profession....." aria-label="Search" aria-describedby="search-addon" />
            <button class="search">Search</button>
    </div>
</div>
{{-- Footer navigation bar start --}}

<!-- TOP SERVICES PART START -->

<div class="containers">
<h1>Top Services</h1>
</div>

<div class="containerss">

        <div class="card">
            <div class="icon">
            </div>
            <h1 id="teext">Electrician</h1>
            
        </div>

        <div class="card">
            <div class="icon1">
            </div>
            <h1 id="teext">Teacher</h1>
        </div>

        <div class="card">
            <div class="icon2">
            </div>
            <h1 id="teext">Web Designer</h1>
        </div>

        <div class="card">
            <div class="icon3">
            </div>
            <h1 id="teext">Plumber</h1>
        </div>
       <div class="card">
            <div class="icon4">
            </div>
            <h1 id="teext">Laptop Repair</h1>
        </div>
         
        <div class="card">
            <div class="icon5">
            </div>
            <h1 id="teext">Tech-Support</h1>
        </div>
                <div class="card">
            <div class="icon6">
            </div>
            <h1 id="teext">SalesMan</h1>
        </div>
                <div class="card">
            <div class="icon7">
            </div>
            <h1 id="teext">Photographer</h1>
        </div>

         <div class="card">
            <div class="icon8">
            </div>
            <h1 id="teext">IT Technician</h1>
            
        </div>

         <div class="card">
            <div class="icon9">
            </div>
            <h1 id="teext">Home Tutor</h1>
            
        </div>

    </div>


</div>

<!-- TOP SERVICES PART END -->

<!-- OTHER SERVICES PART START -->

<div class="containers">
<h1>Other Services</h1>
</div>










    

{{-- Footer navigation bar End --}}


<section class="join" style="background-color: #026176">
    <div class="container">
        <div class="row p-5">
            <div class="col-9">
                <p>Find the best person for your Work via Rojgar Sewa. Join Rojgar Sewa for the emplyoment Opportunities and finding clients . Click here to learn more.</p>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-outline-primary join-button">Join RojgarSewa</button>
            </div>
        </div>
    </div>
</section>
{{-- <div class="container" style="height: 200px; background-color: white"> --}}
</div>
@endsection
