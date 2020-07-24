<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Form Demo Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <script src="{{ URL::asset('js/app.js') }}"></script>

    </head>
    <body>
        <div class="container">
            <div>
                <h1 class="mx-10 text-blue">Contact Form Demo Project</h1>
            </div>
            <div class="light-background hero mb-25">
                
                <div class="flex-container py-25 mx-auto my-auto">
                    <div class="column mx-auto my-auto">
                        <div class="flex-container text-center light-border br-8 py-10 mx-10 white-background">
                            <div class="column-auto mx-auto px-10"><img class="max-w-100" src="/images/play.png" alt="Play Icon"></div>
                            <div class="column-75"><p>Text + RIght Aligned Image in Two Lines</p></div>
                        </div>
                    </div>
                    <div class="column mx-auto text-center my-auto">
                        <div class="flex-container light-border br-8 py-10 mx-10 white-background">
                            <div class="column-auto mx-auto px-10"><img class="max-w-100" src="/images/target.png" alt="Target Icon"></div>
                            <div class="column-75"><p>Text + RIght Aligned Image</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <form id="contact_form">
                @csrf
                <div class="flex-container">
                    <div class="mx-10 column mb-25">
                        <label class="d-block w-100 mb-5" for="name">Name<span class="text-red">*</span></label>
                        <input class="d-block w-100" type="text" id="name" name="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="mx-10 column mb-25">
                        <label class="d-block w-100 mb-5" for="email">Email<span class="text-red">*</span></label>
                        <input class="d-block w-100" type="email" id="email" name="email" placeholder="Enter Your Email Address" required>
                        <span id="error_span"></span>
                    </div>

                </div>
                <div class="flex-container">
                    <div class="mx-10 column mb-25">
                        <label class="d-block w-100 mb-5" for="phone">Phone<span class="text-red">*</span></label>
                        <input class="d-block w-100" type="tel" id="phone" name="phone" placeholder="Enter Your Phone Number" required>
                    </div>
                    <div class="mx-10 column mb-25">
                        <label class="d-block w-100 mb-5" for="inquiry">Subject of Inquiry</label>
                        <select class="d-block w-100" id="inquiry" name="inquiry">
                            <option>&mdash; Please select one &mdash;</option>
                            <option value="cancel">Order Cancellation</option>
                            <option value="status">Order Status</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="mx-10">
                    <label class="d-block w-100 mb-5" for="message">Your Message</label>
                    <textarea class="d-block w-100" id="message" name="message" cols="30" rows="5"></textarea>
                </div>
                <div class="flex-container mt-10">
                    <div class="mx-10 my-auto column-25 center-mobile">
                        <input type="submit" id="submit_btn" class="btn-blue px-50">
                    </div>
                    <div class="mx-10 column-75">
                        <p>* Required Fields. Please be aware that we cannot ensure that communications sent over the internet are secure. This includes correspondence sent through this form or by email. If you are uncomfortable with such risks, you may contact us by phone instead of using this form.</p>
                    </div>
                </div>
            </form>
            <div class="loader">
                <div class="check">
                  <span class="check-one"></span>
                  <span class="check-two"></span>
                </div>
            </div>
            <p id="thank-you">Thank You! Your message has been received.</p>
            <div class="flex-container">
                <div class="column-75 mx-10">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class="column-25 mx-10">
                    <img class="br-8 mx-w-100" src="{{url('/images/thank-you.jpg')}}" loading="lazy" alt="Thank You">
                </div>
            </div>
        </div>
    </body>
</html>
