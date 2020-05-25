$(document).ready(function () {

    // Dismiss & Overlay
    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar, #content').removeClass('active');
        $('.overlay').removeClass('active');
    });

    // Toggling the sidebar
    $('#sidebarCollapse, #sidebarCollapseSmall').on('click', function () {
        $('#sidebar, #content').toggleClass('active');
        $('.overlay').toggleClass('active');
    });



    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 400, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });


    // --- Collapse: Sidebar Elements ---
    // Hand Tools
    $("#ddHandTools").on("click", function(){
        $("#handTools").slideToggle("fast","linear");
    });

    // Pliers & Cutters
    $("#ddPliersCutters").on("click", function(){
        $("#pliersCutters").slideToggle("fast","linear");
    });

    // Wrenches
    $("#ddWrench").on("click", function(){
        $("#wrench").slideToggle("fast","linear");
    });

    // Sockets
    $("#ddSockets").on("click", function(){
        $("#sockets").slideToggle("fast","linear");
    });

    // Screwdrivers
    $("#ddScrewdrivers").on("click", function(){
        $("#screwdrivers").slideToggle("fast","linear");
    });

    // Hammers
    $("#ddHammers").on("click", function(){
        $("#hammers").slideToggle("fast","linear");
    });

    // Saws & Blades
    $("#ddSawsBlades").on("click", function(){
        $("#sawsBlades").slideToggle("fast","linear");
    });

    // Measuring Tools
    $("#ddMeasuringTools").on("click", function(){
        $("#measuringTools").slideToggle("fast","linear");
    });

    // Working & Building Tools
    $("#ddWBTools").on("click", function(){
        $("#WBTools").slideToggle("fast","linear");
    });

    // Working Tools
    $("#ddWorkingTools").on("click", function(){
        $("#workingTools").slideToggle("fast","linear");
    });

    // Building Tools
    $("#ddBuildingTools").on("click", function(){
        $("#buildingTools").slideToggle("fast","linear");
    });

    // Automotive
    $("#ddAutomotive").on("click", function(){
        $("#automotive").slideToggle("fast","linear");
    });

    // Auto Clamps & Terminals
    $("#ddACT").on("click", function(){
        $("#ACT").slideToggle("fast","linear");
    });

    // Auto Repair & Test Kits
    $("#ddARTK").on("click", function(){
        $("#ARTK").slideToggle("fast","linear");
    });

    // Air Tools & Accessories
    $("#ddATA").on("click", function(){
        $("#ATA").slideToggle("fast","linear");
    });

    // Safety Equipment
    $("#ddSafetyEquipment").on("click", function(){
        $("#safetyEquipment").slideToggle("fast","linear");
    });

    // Safety Accessories
    $("#ddSafetyAcc").on("click", function(){
        $("#safetyAcc").slideToggle("fast","linear");
    });

    // Safety Devices
    $("#ddSafetyDevices").on("click", function(){
        $("#safetyDevices").slideToggle("fast","linear");
    });

    // Garden Tools & Accessories
    $("#ddGTA").on("click", function(){
        $("#GTA").slideToggle("fast","linear");
    });

    // Watering Equipment
    $("#ddWateringEquipment").on("click", function(){
        $("#wateringEquipment").slideToggle("fast","linear");
    });

    // Garden Shears & Pruners
    $("#ddGSP").on("click", function(){
        $("#GSP").slideToggle("fast","linear");
    });

    // Others
    $("#ddOthers").on("click", function(){
        $("#others").slideToggle("fast","linear");
    });

    // Water Purifier & Filter
    $("#ddWPF").on("click", function(){
        $("#WPF").slideToggle("fast","linear");
    });

    // Folding Tools & Gifts
    $("#ddFTG").on("click", function(){
        $("#FTG").slideToggle("fast","linear");
    });

    // Packing Materials
    $("#ddPackingMaterial").on("click", function(){
        $("#packingMaterial").slideToggle("fast","linear");
    });

    // Locks
    $("#ddLocks").on("click", function(){
        $("#locks").slideToggle("fast","linear");
    });

    // Miscellaneous
    $("#ddMisc").on("click", function(){
        $("#misc").slideToggle("fast","linear");
    });



});


// Displaying small picture in Big picture container
var expandImg = document.getElementById("bigPic");

var smallPicOne = document.querySelector(".smallPic");
expandImg.src = smallPicOne.src;

var smallPics = document.getElementsByClassName("smallPic");

for (var i=0; i<smallPics.length; i++){
    smallPics[i].classList.remove("imgBorder");
    smallPics[i].addEventListener("click", function(){
        expandImg.src = this.src;
    });
}



