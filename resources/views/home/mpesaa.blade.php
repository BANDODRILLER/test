<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELICIOUS EATS</title>
    @include('home.css')
    <style>
        .div2{
            padding-top: 50px;
        }
    </style>
</head>
<body>
@include('sweetalert::alert')
@include('home.header')


<!-- services section start -->
<section class="services" id="services">
    <div class="max-width">
        <h4 style="color: black" class="title">MPESA STANDARD FORM</h4>
        <div class="serv-content">

            <div class="column left">
                <p>Make sure you finish after submitting the form. If you finish the purchase without submitting the form you will receive an email advising on the details about the standard mpesa form in accordance to processing your payment</p>
                <form method="POST" action="{{route('contact.submit')}} ">
                @csrf
                <p style="font-size: 1.6rem; color: limegreen">Standard Mpesa Form</p>
                <div class="md:w-72 flex flex-col">
                    <label style="font-size: 1.5rem;padding: 20px;  color: limegreen" >Name</label>
                    <input tabindex="0" aria-label="Please input name" type="text" placeholder="Please Input Your Name" required="" name="name" style=" color: limegreen; width: 300px">
                </div>
                <div class="md:w-72 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label style="font-size: 1.5rem;padding: 20px;  color: limegreen">Email</label>
                    <input tabindex="0" aria-label="Please input address" type="email" class="text-base leading-none
                        text-gray-900 " placeholder="Please Input Your Email" required="" name="email" style="padding-top: 20px;  color: limegreen; width: 300px">
                </div>
                <div class="md:w-72 flex flex-col md:ml-6 md:mt-0 mt-4">
                <label style="font-size: 1.5rem;padding: 20px;  color: limegreen">Message</label>
                <textarea tabindex="0" aria-label="Leave message" role="textbox" name="content" style="padding-top: 100px ;  color: black" placeholder="the mpesa code for example QRRHS562RRG4 and amount paid"></textarea>
                </div>
                <div style="text-align: center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('home.footer')
<!-- script-->
@include('home.script')

</body>
</html>
<script>
    import Buttons from "../../../public/admin/pages/ui-features/buttons.html";
    export default {
        components: {Buttons}
    }
</script>
