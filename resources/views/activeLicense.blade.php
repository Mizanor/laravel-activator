<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
    <title>Key Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        
            /* Coded with love by Mutiullah Samim */
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #9CC16D !important;
            color: white;
        }
      
        
        
        .form_container {
            margin-top: 100px;
        }
        .login_btn {
            width: 100%;
            background: #0b301d !important;
            color: white !important;
        }
       
      
       
    </style>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
    <div class="text-center" style="height: 300px; width: 400px;">
    <table class="text-center" border="1" width="100%">
                    <tbody>
                        <tr>
                            <td style="width: 50%">First Name</td>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Last Name</td>
                            <td>{{$data->lname}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Organization</td>
                            <td>{{$data->organization}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Street</td>
                            <td>{{$data->street}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">City</td>
                            <td>{{$data->city}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Mobile No</td>
                            <td>{{$data->mobile}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Email</td>
                            <td>{{$data->email}}</td>
                        </tr>
                        
                        <tr>
                            <td style="width: 50%">License Key</td>
                            <td>{{$data->license_key}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%">Expire Date</td>
                            <td>{{$data->expire_date}}</td>
                        </tr>
                        
                        
                    </tbody>
                    
                </table>
                </div>


    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">




            <div class="user_card">
                <div class="text-center">Active License</div>
                <div class="d-flex justify-content-center form_container">

                    






                


                     <form method="post" action="{{ route('activated') }}" id="myForm" enctype="multipart/form-data">
                {{csrf_field()}}

                <input type="hidden" id="custId" name="custId" value="{{$data->id}}">
             
                        <div class="input-group mb-5">
                            <div class="text-left" style="margin-right: 50px">Liscense Key  :   </div>
                            <input id="password" type="password" class="form-control" name="license"  autocomplete="current-password">

                               
                        </div>
                        <div class="form-group">
                      
                            <div class="d-flex justify-content-center mt-3 login_container mb-5">
                    <!-- <button type="submit" name="button" class="btn login_btn">Save</button>
                   </div> --> 

                 
                

                        <div style="margin-left: 30px"><button class="btn login_btn">Active License</button> <br> Back To <a href="" style="color: yellow">login </a> Page</div>
      
          

              </form>

                    
                </div>
        
                <div class="mt-4">
                  
                </div>
            </div>
        </div>
    </div>
</body>
</html>