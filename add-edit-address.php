<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCDEX</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #change_address span{color: red; font-size: 14px; }
        .form{margin: auto; margin-top: 50px;}
    </style>

</head>

<body>
    <section class="form create-pages pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="form-item">
                        <h4 class="text-center pb-3 mb-4 border-bottom">Change Address</h4>
                        <form id="change_address" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                    <label for="address1" class="form-label">Address1</label>
                                    <input type="text" class="form-control" id="address1" placeholder="Enter Address1...">
                                    <span id="address1_err"></span>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="address2" class="form-label">Address2</label>
                                    <input type="text" class="form-control" id="address2" placeholder="Enter Address2...">
                                    <span id="address2_err"></span>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="address3" class="form-label">Address3</label>
                                    <input type="text" class="form-control" id="address3" placeholder="Enter Address3...">
                                    <span id="address3_err"></span>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="address4" class="form-label">Address4</label>
                                    <input type="text" class="form-control" id="address4" placeholder="Enter Address4...">
                                    <span id="address4_err"></span>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="district" class="form-label">District</label>
                                    <input type="text" class="form-control" id="district" placeholder="Enter District...">
                                    <span id="district_err"></span>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="Enter City...">
                                    <span id="city_err"></span>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="state" class="form-label">State</label>
                                    <select class="form-select form-control" id="state">
                                        <option selected value="">Select State</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Pune">Pune</option>
                                    </select>
                                    <span id="state_err"></span>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="region" class="form-label">Region</label>
                                    <input type="text" class="form-control" id="region" placeholder="Enter Region...">
                                    <span id="region_err"></span>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="pincode" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="pincode" placeholder="Enter Pincode...">
                                    <span id="pincode_err"></span>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="attachment" class="form-label">Add Attachment</label>
                                    <input type="file" multiple class="form-control" id="attachment" placeholder="Add Attachment...">
                                </div>

                                <div class="mb-3 col-sm-12 text-center">
                                    <button type="button" class="btn btn-success button-text me-2" id="save_address"> Submit </button>
                                    <a href="change-address.php" class="btn btn-danger button-text"> Cancel </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
               
               $('#save_address').click(function(){
                    var address1 = $('#address1').val();
                    var address2 = $('#address2').val();
                    var address3 = $('#address3').val();
                    var address4 = $('#address4').val();
                    var district = $('#district').val();
                    var city = $('#city').val();
                    var state = $('#state').val();
                    var region = $('#region').val();
                    var pincode = $('#pincode').val();
                    if(address1 == ""){
                        $('#address1_err').html('Please Enter Address 1');
                        return false
                    }else{
                        $('#address1_err').html('');
                    }
                    if(address2 == ""){
                        $('#address2_err').html('Please Enter Address 2');
                        return false
                    }else{
                        $('#address2_err').html('');
                    }

                    if(address3 == ""){
                        $('#address3_err').html('Please Enter Address 3');
                        return false
                    }else{
                        $('#address3_err').html('');
                    }

                    if(address4 == ""){
                        $('#address4_err').html('Please Enter Address 4');
                        return false
                    }else{
                        $('#address4_err').html('');
                    }

                    if(district == ""){
                        $('#district_err').html('Please Enter District');
                        return false
                    }else{
                        $('#district_err').html('');
                    }

                    if(city == ""){
                        $('#city_err').html('Please Enter City');
                        return false
                    }else{
                        $('#city_err').html('');
                    }

                    if(state == ""){
                        $('#state_err').html('Please Enter State');
                        return false
                    }else{
                        $('#state_err').html('');
                    }

                    if(region == ""){
                        $('#region_err').html('Please Enter Region');
                        return false
                    }else{
                        $('#region_err').html('');
                    }

                    if(pincode == ""){
                        $('#pincode_err').html('Please Enter Pincode');
                        return false
                    }else{
                        $('#pincode_err').html('');
                    }

               })

            });
        </script>
</body>

</html>