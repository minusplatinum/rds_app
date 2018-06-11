@extends("layouts.app")

@section("content")
<div class="container-fluid welcomeImage py-5">
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Contact Us</h1>
        </div>
        <div class="col-12 col-md-6">
            <form action="{{route('contactForm')}}" method="POST">
                <div class="form-group font-weight-bold">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Your Name" class="form-control" name="name" id="name" value="">
                </div>
                <div class="form-group font-weight-bold">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Your Email" class="form-control" name="email" id="email" value="">
                </div>
                <div class="form-group font-weight-bold">
                    <label for="reason">Reason For Contact</label>
                    <select name="reason" id="reason" class="form-control">
                        <option selected="selected" value="">Select Your Reason For Contact</option>
                        <option value="one">Product Sales Inquiry</option>
                        <option value="two">Product Support Inquiry</option>
                        <option value="three">General Information Request</option>
                    </select>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="messageBody">Message</label>
                    <textarea name="messageBody" id="messageBody" cols="50" rows="5" class="form-control"></textarea>
                </div>
                @csrf
                <div class="form-group">
                    <input class="form-control bg-info border-info font-weight-bold" type="submit" value="Send Message">
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Delhi%2C%20Ontario&key=AIzaSyCB4DcrKyqUOX5jV8W0io_-fvhjQyHkTRg" allowfullscreen></iframe>
        </div>
        <div class="col-12 mt-5">
            <div class="row text-center font-weight-bold">
                <div class="col-md-4">
                    <i style="font-size: 35px" class="material-icons text-info">email</i>
                    <h5 class="font-weight-bold">Email Us</h5>
                    <ul class="list-unstyled">
                        <li>Support Inquiries - <a href="mailto:support@rdswebdesigns.com">support@rdswebdesigns.com</a></li>                        
                        <li>General Inquiries - <a href="mailto:contact@rdswebdesigns.com">contact@rdswebdesigns.com</a></li>
                        <li>Sales Inquiries - <a href="mailto:sales@rdswebdesigns.com">sales@rdswebdesigns.com</a></li>
                    </ul>
                </div>   
                <div class="col-md-4">
                    <i style="font-size:35px;" class="material-icons text-info">phone</i>
                    <h5 class="font-weight-bold">Call Us</h5>
                    <ul class="list-unstyled">
                        <li>Telephone 000-000-0000</li>
                        <li>Fax 000-000-0000</li>
                        <li>Skype 000-000-0000</li>
                    </ul>
                </div>             
                <div class="col-md-4">
                    <i style="font-size:35px;" class="material-icons text-info">add_location</i>
                    <h5 class="font-weight-bold">Address</h5>
                    <ul class="list-unstyled">
                        <li>123 Main Street</li>
                        <li>Delhi, Ontario</li>
                        <li>N4B 1C1, Canada</li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>    
</div>   
</div>
@endsection

