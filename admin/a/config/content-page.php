<?php if ($page=="dashboard"){?>

   
      
        <div class="project">

            <div class="project-div">
                <div class="text-div">
                    <p>Administrator</p>
                    <span>1,523</span>
                </div>
                <div class="icon-div">
                    <i class="bi-receipt"></i>
                </div>

            
            </div>

            <div class="project-div yellow-div">
                <div class="text-div">
                    <p>Cameras</p>
                    <span>836</span>
                </div>
                <div class="icon-div yellow">
                    <i class="bi-pencil-square"></i>
                </div>

                
            </div>

            <div class="project-div red-div">
                <div class="text-div">
                    <p>Blog</p>
                    <span>475</span>
                </div>
                <div class="icon-div red">
                    <i class="bi-check-circle-fill"></i>
                </div>
                
            </div>

            <div class="project-div white-div">
                <div class="text-div">
                    <p>FAQ</p>
                    <span>189</span>
                </div>
                <div class="icon-div white">
                    <i class="bi-check-circle-fill"></i>
                </div>

                
            </div>

        </div>

        <div class="stats-div">
            <div class="text-div">
                <h3>Project statistics</h3>
                <select name="week" id="">
                    <option value="This week">This week</option>
                </select>
            </div>
                
            <div id="chartContainer" style="height: 300px; width: 100%;" >
                <script>
                    $(document).ready(function() {

                    var chart = new CanvasJS.Chart("chartContainer", {
                        animationEnabled: true,
                        theme: "dark2",
                        title:{
                            text: ""
                        },
                        axisX:{
                            valueFormatString: "DD MMM",
                            crosshair: {
                                enabled: true,
                                snapToDataPoint: true
                            }
                        },
                        axisY: {
                            title: "",
                            includeZero: true,
                            crosshair: {
                                enabled: true
                            }
                        },
                        toolTip:{
                            shared:true
                        },  
                        legend:{
                            cursor:"pointer",
                            verticalAlign: "bottom",
                            horizontalAlign: "left",
                            dockInsidePlotArea: true,
                            itemclick: toogleDataSeries
                        },
                        data: [{
                            type: "line",
                            showInLegend: true,
                            name: "Sales",
                            markerType: "square",
                            xValueFormatString: "DD MMM, YYYY",
                            color: "#29BA00",
                            dataPoints: [
                                
                                { x: new Date(2024, 1, 10), y: 1000 },
                                { x: new Date(2024, 1, 8), y: 650 },
                                { x: new Date(2024, 1, 7), y: 970 },
                                { x: new Date(2024, 1, 6), y: 420 },
                                { x: new Date(2024, 1, 4), y: 720 },
                                { x: new Date(2024, 1, 2), y: 200 },
                                { x: new Date(2024, 1, 1), y: 820 },
                                { x: new Date(2024, 0, 29), y: 960 },
                                { x: new Date(2024, 0, 27), y: 150 },
                                { x: new Date(2024, 0, 25), y: 700 },
                                { x: new Date(2024, 0, 23), y: 555 },
                                { x: new Date(2024, 0, 19), y: 362 },
                                { x: new Date(2024, 0, 17), y: 446 },
                                { x: new Date(2024, 0, 16), y: 825 },
                                { x: new Date(2024, 0, 15), y: 270 },
                                
                            ]
                        },
                        {
                            type: "line",
                            showInLegend: true,
                            name: "Wallet",
                            lineDashType: "dash",
                            dataPoints: [
                                
                                { x: new Date(2024, 1, 10), y: 1000 },
                                { x: new Date(2024, 1, 8), y: 900 },
                                { x: new Date(2024, 1, 7), y: 800 },
                                { x: new Date(2024, 1, 6), y: 700 },
                                { x: new Date(2024, 1, 4), y: 600 },
                                { x: new Date(2024, 1, 2), y: 500 },
                                { x: new Date(2024, 1, 1), y: 900 },
                                { x: new Date(2024, 0, 29), y: 1000 },
                                { x: new Date(2024, 0, 27), y: 800 },
                                { x: new Date(2024, 0, 25), y: 500 },
                                { x: new Date(2024, 0, 23), y: 875 },
                                { x: new Date(2024, 0, 19), y: 675 },
                                { x: new Date(2024, 0, 17), y: 995 },
                                { x: new Date(2024, 0, 16), y: 400 },
                                { x: new Date(2024, 0, 15), y: 600 },
                            ]
                        }]
                    });
                    chart.render();

                    function toogleDataSeries(e){
                        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else{
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                    })

                    _arps_matrix('<?php echo $db_day30;?>','<?php echo $db_today;?>');
                    _payment_matrix('<?php echo $db_day30;?>','<?php echo $db_today;?>');
                    _get_all_count();
                
               </script>
            
            </div>
        </div>
 

<?php }?>

<?php if ($page=="staff"){?>
    

        <div class="staff-div "> 
            <select name="Select Status" id="status_id"  onchange="_all_active_staff(this.value)">     
                <option value="">Select Status</option>
                <option value="1">Active</option>
                <option value="2">Suspended</option>
               
            </select>
            <input type="text" placeholder="Type Here to Search...." id="search_txt" onkeyup="_all_active_staff('')"/>

            <script>
                superplaceholder({
                el: search_txt,
                sentences: [ 'Type Here to Search....', 'e.g francis@gmail.com', 'bamirin francis', 'stf0015664484332446', 'francis@yahoo.com' ],
                options: {
                letterDelay: 80,
                loop: true,
                startOnFocus: false
                }
                });
        </script>
        </div>
        <div class="admin-list">
            <div class="text-div">
                <i class="bi-people"></i><span>Administrator's List</span>
            </div>
            <button onclick="_get_form('add-staff')">
                <span><i class="bi-file-plus"></i> Create a new admin</span>
            </button>
        </div>
        <div class="staff-div-in" id="fetch_all_staff">


            <div class="">
                <script>_all_active_staff('');</script>    
            </div>
            
        <div>

<?php }?>

<?php if ($page=="product"){?>
    
    <div class="admin-list">
            <div class="text-div">
                <i class="bi-people"></i><span>Product's List</span>
            </div>
            <button>
                <span><i class="bi-file-plus"></i> Add a new product</span>
            </button>
    </div>
     
    <!-- <div class="product-div">
        <div class="network-camera-div aos-init aos-animate" data-aos="fade-in" data-aos-duration="2200">
            <div class="camera-img">
                <img src="../../all-images/Images/camera-6.jpg" alt="camera-1">
            </div>
            <div class="camera-text">
                <p>10MP Starlight Camera</p>
                
                <div class="price">
                    <span>$75.00</span><span class="price-div">$55.00</span>
                </div>
            </div>                
        </div>
    </div> -->

    <div class="product-div">
       <div class="product-div-in">
            <div class="img-div"><img src="../../all-images/Images/camera-6.jpg" alt="camera-1"></div>
            <div class="active-div">Active</div>
            <h3>10MP Starlight Camera</h3>
         
            <div class="price">
				<span>$60.00</span><span class="price-div">$39.00</span>
			</div>
       </div>

    </div>

<?php }?>