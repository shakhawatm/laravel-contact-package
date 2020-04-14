<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Us</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <h2 class="text-center">Contact Form</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">

                <!--Form with header-->

                <form action="{{route('contact')}}" method="post">
                    @csrf
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Contact Form</h3>
                                <p class="m-0">Keep in Touch</p>
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Fullname" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="your.mail@gmail.com" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control" name="message" placeholder="Your Query" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
                <!--Form with header-->

            </div>
        </div>
    </div>
    </body>
</html>
