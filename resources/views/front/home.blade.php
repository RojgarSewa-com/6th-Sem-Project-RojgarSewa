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
    margin: 0px 240px 0px 200px;
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
    
    background-color: #026176;
    width:200px;
    height:200px;
    margin:20px;
    text-align: center;
    border-radius: 16px;
    
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

.card.hover:hover{
    background-color: #212d39;
    color: #ffffff;
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
  
}
.containers:hover{
    background-color: #033f4c;
    color: white;
    transition: all 0.5s ease;
}

h1.Top_services {
    margin-top: 50px;
}
.card.topservices {
    border: none;
    color: black;
    background-color: white;
}
.container {

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


<!-- TOP SERVICES PART START -->

<div class="containerss">
       <div class="card topservices">
            <h1 class="Top_services">Top Services</h1>
        </div>

        <div class="card hover">
            <div class="icon">
            </div>
            <h1 id="teext">Electrician</h1>
            
        </div>

        <div class="card hover">
            <div class="icon1">
            </div>
            <h1 id="teext">Teacher</h1>
        </div>

        <div class="card hover">
            <div class="icon2">
            </div>
            <h1 id="teext">Web Designer</h1>
        </div>

        <div class="card hover">
            <div class="icon3">
            </div>
            <h1 id="teext">Plumber</h1>
        </div>
       <div class="card hover">
            <div class="icon4">
            </div>
            <h1 id="teext">Laptop Repair</h1>
        </div>

</div>

<!-- TOP SERVICES PART END -->

<!-- {{-- Footer navigation bar End --}} -->
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
<div class="container m-5" >

</div>


@endsection
