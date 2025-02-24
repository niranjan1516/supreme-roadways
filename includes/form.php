

<!-- 
 
Estimate_area start  -->
<div class="Estimate_area overlay" style="padding: 220px 0">
        <div class="container-form" align="center">
                <h2 style="color:white; padding-bottom:20px" align="center">Enter Details</h2>
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="form">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide" name="depart" id="depart">
                                            <option data-display="City of departure">City of departure</option>
                                            <option value="kolhapur">Kolhapur</option>
                                            <option value="sangli">Sangli</option>
                                            <option value="satara">Satara</option>
                                            <option value="pune">Pune</option>
                                            <option value="mumbai">Mumbai</option>
                                            <option value="Bengalore">Bengalore</option>
                                            <option value="Chennai">Chennai</option>
                                            <option value="Panaji">Panaji</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide" name="delivery" id="delivery">
                                            <option data-display="Delivery city">City of departure</option>
                                            <option value="kolhapur">Kolhapur</option>
                                            <option value="sangli">Sangli</option>
                                            <option value="satara">Satara</option>
                                            <option value="pune">Pune</option>
                                            <option value="mumbai">Mumbai</option>
                                            <option value="Bengalore">Bengalore</option>
                                            <option value="Chennai">Chennai</option>
                                            <option value="Panaji">Panaji</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <script>

                                    let depart = document.querySelector(".depart").value;
                                    let delivery= document.querySelector(".delivery").value;

                                    if(depart == delivery)
                                    {
                                        alert("Both are same cities ! please select different city")
                                    }

                                </script> -->
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide" name="goods">
                                            <option data-display="Select goods type">Select Goods Type</option>
                                            <option value="Industrial Machinery">Industrial Machinery</option>
                                            <option value="Household Goods">Household Goods</option>
                                            <option value="Healthcare / Pharmacy Products /">Healthcare / Pharmacy Products</option>
                                            <option value="Electronic Goods / Home Appliances">Electronic Goods / Home Appliances</option>
                                            <option value="Textile / Garments">Textile / Garments</option>
                                            <option value="Furniture / Plywood / Laminates">Furniture / Plywood / Laminates</option>
                                            <option value="Manufacturing Plant Machines">Manufacturing Plant Machines</option>
                                            <option value="Old Servers / Computers / Laptops">Old Servers / Computers / Laptops</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Enter Approx Weight (1 TON = 1000 KG) In KG" name="weight">      
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide" name="vehicle">
                                            <option data-display="Vehicle type">Vehicle Type</option>
                                            <option value="Tata Ace">Tata Ace(Max Load : ~ 750 KG)</option>
                                            <option value="Mahindra Bolero Pickup">Mahindra Bolero Pickup (Max Load : ~ 1,500 KG)</option>
                                            <option value="Ashok Leyland Dost">Ashok Leyland Dost (Max Load : ~ 1,250 KG)</option>
                                            <option value="Tata 407">Tata 407 (Max Load : ~ 2,250 KG)</option>
                                            <option value="Eicher Pro 1110">Eicher Pro 1110 (Max Load : ~ 7,200 KG)</option>
                                            <option value="Ashok Leyland Ecomet 1215">Ashok Leyland Ecomet 1215  (Max Load : ~ 7,500 KG)</option>
                                            <option value="Tata LPT 3118">Tata LPT 3118 (Max Load : ~ 25,000 KG)</option>
                                            <option value="Ashok Leyland U 3718">Ashok Leyland U 3718 (Max Load : ~ 25,000 KG)</option>
                                            <option value="Eicher Pro 6040">Eicher Pro 6040 (Max Load : ~ 40,000 KG)</option>
                                            <option value="Mahindra Blazo X 49">Mahindra Blazo X 49 (Max Load : ~ 49,000 KG)</option>
                                            <option value="Ashok Leyland 3718 IL">BharatBenz 5528TT (Max Load : ~ 55,000 KG)</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="tel" placeholder="Enter Mobile Number" name="mobile">      
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <textarea placeholder="Message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <button class="boxed-btn3-line" type="submit" name="submit" onclick="return confirm('Do you Want to Book ?');">BOOK VEHICLE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Estimate_area end  -->