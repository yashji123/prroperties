@extends('saas.frontend.layouts.app')

@section('content')
<div class=thankyoucontent>
 <div class="wrapper-1">
    <div class="wrapper-2">
     
     <h1>Thank you!</h1>
      <p>for contacting us, we will reply promptly</p> 
      <p>We appreciate your message. Our team is dedicated to providing a prompt response. Once your message is reviewed, we will get back to you as soon as possible. </p>
      <button class="go-home"><a href="/">
        home page</a>
      </button>
    </div>
   
    
      <p>
      </p>
    </div>
</div>
 



<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,600,900');


a {
  color: #fff;
  text-decoration: none;
  transition: all 0.30s linear 0s;
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding: 30px;
  text-align:center;
}
h1{
  font-family: 'Raleway', Arial Black, Sans-Serif;
  font-size:4em;
  font-weight: 900;
  letter-spacing:3px;
  color: black;
  margin:0;
  margin-top: 161px;
  margin-bottom:40px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:black;
  font-family: 'Raleway', sans-serif;
  letter-spacing:1px;
  line-height: 1.5;
}
.go-home{
  background: #2a6ed5;
  border:none;
  padding: 25px 30px;
  margin: 30px 0;
  border-radius: 5px;
  cursor: pointer;
}
.go-home:hover{
  opacity: 0.9;
}
.go-home a{
  font-family: 'Raleway', Arial Black;
  font-size: 1rem;
  font-weight: 700!important;
  text-transform: uppercase;
  letter-spacing: 2px;
  
}

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .thankyoucontent{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  }
  
  
}
</style>
@endsection
