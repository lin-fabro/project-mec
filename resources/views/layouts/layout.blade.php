<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Meiko Tools</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/css/homepage.css">

  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">

  <!-- Font style -->
  <link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">

</head>
<body>

  <!-- Container -->
  <div class="container-fluid">

    <!-- ******************** -->
    <!-- ***** Sidebar *****  -->
    <!-- ******************** -->
    <nav id="sidebar">

      <!-- Dismiss Button -->
      <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
      </div>

      <!-- Sidebar Header -->
      <div class="sidebar-header">
        <img src="/images/logo/meiko_word.png">
      </div>

      <!-- Search Bar -->
      <ul class="list-unstyled components">
        <li>
          <form class="form-inline mx-1 mb-2" method="GET" action="{{$search_action}}">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" id="keyword" name="keyword">
            <button class="btn searchIcon" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </li>

        <!-- Categories -->
        <!-- Home -->
        <li>
          <a href="/"><i class="fas fa-home icons"></i> Home</a>
        </li>

        <!-- All Products -->
        <li>
          <a href="/categories"><i class="fas fa-tools icons"></i> All Products</a>
        </li>

        <!-- Hand Tools (1) -->
        <li>
          <!-- Split Button Container -->
          <div class="btn-group splitButtonOne">
            <!-- Text -->
            <a href="/categories/01.00.00" class="categoryTextOne">Hand Tools</a>
            <!-- Dropdown Icon -->
            <a class="dropdownIconOne dropdown-toggle" id="ddHandTools"></a>
          </div>

          <ul class="list-unstyled" id="handTools">

            <!-- Pliers & Cutters (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/01.01.00" class="categoryTextTwo">Pliers & Cutters</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddPliersCutters"></a>
              </div>

              <ul class="list-unstyled" id="pliersCutters">

                <!-- (3) -->
                <li><a href="/products/01.01.01" class="categoryTextThree">Combination Pliers</a></li>
                <li><a href="/products/01.01.02" class="categoryTextThree">Diagonal Pliers</a></li>
                <li><a href="/products/01.01.03" class="categoryTextThree">Long Nose Pliers</a></li>
                <li><a href="/products/01.01.04" class="categoryTextThree">Slip Joint Pliers</a></li>
                <li><a href="/products/01.01.05" class="categoryTextThree">Plier Sets</a></li>
                <li><a href="/products/01.01.06" class="categoryTextThree">Nipper Pliers</a></li>
                <li><a href="/products/01.01.07" class="categoryTextThree">Water Pump Pliers</a></li>
                <li><a href="/products/01.01.08" class="categoryTextThree">Locking Pliers</a></li>
                <li><a href="/products/01.01.09" class="categoryTextThree">Snap Ring Pliers</a></li>
                <li><a href="/products/01.01.10" class="categoryTextThree">Electric & Electronic Pliers</a></li>
                <li><a href="/products/01.01.11" class="categoryTextThree">Electric & Electronic Strippers & Cutters</a></li>
                <li><a href="/products/01.01.12" class="categoryTextThree">Electric & Electronic Crimping</a></li>
                <li><a href="/products/01.01.13" class="categoryTextThree">Tin Snips</a></li>
                <li><a href="/products/01.01.14" class="categoryTextThree">Bolt Cutters</a></li>
                <li><a href="/products/01.01.15" class="categoryTextThree">Tweezers</a></li>

              </ul>
            </li>

            <!-- Wrenches: Accessories & Sets (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/01.02.00" class="categoryTextTwo">Wrenches, Accessories & Sets</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddWrench"></a>
              </div>

              <ul class="list-unstyled" id="wrench">

                <!-- (3) -->
                <li><a href="/products/01.02.01" class="categoryTextThree">Adjustable Wrenches</a></li>
                <li><a href="/products/01.02.02" class="categoryTextThree">Speed Wrenches</a></li>
                <li><a href="/products/01.02.03" class="categoryTextThree">Pipe Wrenches</a></li>
                <li><a href="/products/01.02.04" class="categoryTextThree">Combination Wrenches</a></li>
                <li><a href="/products/01.02.05" class="categoryTextThree">Open-End Wrenches</a></li>
                <li><a href="/products/01.02.06" class="categoryTextThree">Box-End Wrenches</a></li>
                <li><a href="/products/01.02.07" class="categoryTextThree">Wrench Sets</a></li>
                <li><a href="/products/01.02.08" class="categoryTextThree">Gear Ratchet Box Wrenches</a></li>
                <li><a href="/products/01.02.09" class="categoryTextThree">Flare Nut & Torx Wrenches</a></li>
                <li><a href="/products/01.02.10" class="categoryTextThree">Hex & Torx Wrenches</a></li>
                <li><a href="/products/01.02.11" class="categoryTextThree">T-Type Socket Wrenches</a></li>
                <li><a href="/products/01.02.12" class="categoryTextThree">Y-Type Socket Wrenches</a></li>
                <li><a href="/products/01.02.13" class="categoryTextThree">L-Bend Socket Wrenches</a></li>
                <li><a href="/products/01.02.14" class="categoryTextThree">Ratchet Handles</a></li>
                <li><a href="/products/01.02.15" class="categoryTextThree">Torque Wrenches</a></li>
                <li><a href="/products/01.02.16" class="categoryTextThree">Pneumatic Impact Wrenches</a></li>
                <li><a href="/products/01.02.17" class="categoryTextThree">Tire Lever Wrenches</a></li>
                <li><a href="/products/01.02.18" class="categoryTextThree">Oil Filter Wrenches</a></li>
                <li><a href="/products/01.02.19" class="categoryTextThree">Go-Through Boxed Wrenches</a></li>
                <li><a href="/products/01.02.20" class="categoryTextThree">Multi-Function Wrenches</a></li>
              </ul>
            </li>

            <!-- Sockets: Accessories & Sets (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/01.03.00" class="categoryTextTwo">Sockets, Accessories & Sets</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddSockets"></a>
              </div>

              <ul class="list-unstyled" id="sockets">

                <!-- (3) -->
                <li><a href="/products/01.03.01" class="categoryTextThree">Hand Sockets </a></li>
                <li><a href="/products/01.03.02" class="categoryTextThree">Hand Sockets, Deep & Torx Type</a></li>
                <li><a href="/products/01.03.03" class="categoryTextThree">Impact Sockets</a></li>
                <li><a href="/products/01.03.04" class="categoryTextThree">Impact Sockets, Deep, Torx & Wheel type</a></li>
                <li><a href="/products/01.03.05" class="categoryTextThree">Bit Sockets</a></li>
                <li><a href="/products/01.03.06" class="categoryTextThree">Spark Plug Sockets</a></li>
                <li><a href="/products/01.03.07" class="categoryTextThree">Drive Adapter Sockets</a></li>
                <li><a href="/products/01.03.08" class="categoryTextThree">Universal Joint Sockets</a></li>
                <li><a href="/products/01.03.09" class="categoryTextThree">Socket Sets</a></li>
                <li><a href="/products/01.03.10" class="categoryTextThree">Sliding T-Handles</a></li>
                <li><a href="/products/01.03.11" class="categoryTextThree">Extension Bars</a></li>
                <li><a href="/products/01.03.12" class="categoryTextThree">Speed Handles</a></li>
                <li><a href="/products/01.03.13" class="categoryTextThree">Flexible Handles</a></li>
                <li><a href="/products/01.03.14" class="categoryTextThree">L-Type Drive Handles</a></li>


              </ul>
            </li>

            <!-- Screwdrivers (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/01.04.00" class="categoryTextTwo">Screwdrivers</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddScrewdrivers"></a>
              </div>

              <ul class="list-unstyled" id="screwdrivers">

                <!-- (3) -->
                <li><a href="/products/01.04.01" class="categoryTextThree">Precision Screwdrivers</a></li>
                <li><a href="/products/01.04.02" class="categoryTextThree">Line Color Screwdrivers</a></li>
                <li><a href="/products/01.04.03" class="categoryTextThree">Go-Through Screwdrivers</a></li>
                <li><a href="/products/01.04.04" class="categoryTextThree">VDE Screwdrivers</a></li>
                <li><a href="/products/01.04.05" class="categoryTextThree">Screwdriver Bits</a></li>
                <li><a href="/products/01.04.06" class="categoryTextThree">Screwdriver Holder Adapters</a></li>
                <li><a href="/products/01.04.07" class="categoryTextThree">Impact Screwdrivers</a></li>
                <li><a href="/products/01.04.08" class="categoryTextThree">Electric Tester Screwdrivers</a></li>
                <li><a href="/products/01.04.09" class="categoryTextThree">Screwdriver Sets</a></li>
                <li><a href="/products/01.04.10" class="categoryTextThree">Torque Screwdrivers</a></li>
                <li><a href="/products/01.04.11" class="categoryTextThree">Nut Screwdrivers</a></li>
                <li><a href="/products/01.04.12" class="categoryTextThree">Ratchet Screwdrivers</a></li>


              </ul>
            </li>

            <!-- Hammers (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/01.05.00" class="categoryTextTwo">Hammers</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddHammers"></a>
              </div>

              <ul class="list-unstyled" id="hammers">

                <!-- (3) -->
                <li><a href="/products/01.05.01" class="categoryTextThree">Claw Hammers</a></li>
                <li><a href="/products/01.05.02" class="categoryTextThree">Ball-Peen Hammers</a></li>
                <li><a href="/products/01.05.03" class="categoryTextThree">Bricklayer's Hammers</a></li>
                <li><a href="/products/01.05.04" class="categoryTextThree">Carpenter's Hammers</a></li>
                <li><a href="/products/01.05.05" class="categoryTextThree">Machinist's Hammers</a></li>
                <li><a href="/products/01.05.06" class="categoryTextThree">Rubber, Wood & Copper Hammers</a></li>
                <li><a href="/products/01.05.07" class="categoryTextThree">Dead Blow Hammers</a></li>
                <li><a href="/products/01.05.08" class="categoryTextThree">Sledge Hammers</a></li>
                <li><a href="/products/01.05.09" class="categoryTextThree">Hatchets</a></li>

              </ul>
            </li>

            <!-- Saws & Blades (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/01.06.00" class="categoryTextTwo">Saws & Blades</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddSawsBlades"></a>
              </div>

              <ul class="list-unstyled" id="sawsBlades">

                <!-- (3) -->
                <<li><a href="/products/01.06.01" class="categoryTextThree">Hand Saws</a></li>
                <li><a href="/products/01.06.02" class="categoryTextThree">Back & Bow Saws</a></li>
                <li><a href="/products/01.06.03" class="categoryTextThree">Coping Saws </a></li>
                <li><a href="/products/01.06.04" class="categoryTextThree">Folding Saws</a></li>
                <li><a href="/products/01.06.05" class="categoryTextThree">Hack Saw Frames</a></li>
                <li><a href="/products/01.06.06" class="categoryTextThree">Diamond-Tipped Saw Blades</a></li>
                <li><a href="/products/01.06.07" class="categoryTextThree">Tungsten Carbide-Tipped Saw Blades & Cutters</a></li>
                <li><a href="/products/01.06.08" class="categoryTextThree">Cutting & Grinding Wheel Discs</a></li>
                <li><a href="/products/01.06.09" class="categoryTextThree">Cup & Wheel Brushes</a></li>
                <li><a href="/products/01.06.10" class="categoryTextThree">Hole Saw Cutters & Sets</a></li>
                <li><a href="/products/01.06.11" class="categoryTextThree">Jig Saws with Blades</a></li>

              </ul>
            </li>


            <!-- Measuring Tools (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/01.07.00" class="categoryTextTwo">Measuring Tools</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddMeasuringTools"></a>
              </div>

              <ul class="list-unstyled" id="measuringTools">

                <!-- (3) -->
                <li><a href="/products/01.07.01" class="categoryTextThree">Measuring Tapes</a></li>
                <li><a href="/products/01.07.02" class="categoryTextThree">Measuring Wheels</a></li>
                <li><a href="/products/01.07.03" class="categoryTextThree">Levels</a></li>
                <li><a href="/products/01.07.04" class="categoryTextThree">Steel Rulers</a></li>
                <li><a href="/products/01.07.05" class="categoryTextThree">Calipers</a></li>

              </ul>
            </li>

          </ul>
        </li>

        <!-- Working & Building Tools (1) -->
        <li>
          <!-- Split Button Container -->
          <div class="btn-group splitButtonOne">
            <!-- Text -->
            <a href="/categories/02.00.00" class="categoryTextOne">Working & Building Tools</a>
            <!-- Dropdown Icon -->
            <a class="dropdownIconOne dropdown-toggle" id="ddWBTools"></a>
          </div>

          <ul class="list-unstyled" id="WBTools">

            <!-- Working Tools (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/02.01.00" class="categoryTextTwo">Working Tools</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddWorkingTools"></a>
              </div>

              <ul class="list-unstyled" id="workingTools">

                <!-- (3) -->
                <li><a href="/products/02.01.01" class="categoryTextThree">PVC Pipe Cutters</a></li>
                <li><a href="/products/02.01.02" class="categoryTextThree">Tubing Cutters</a></li>
                <li><a href="/products/02.01.03" class="categoryTextThree">Flaring Tools & Benders</a></li>
                <li><a href="/products/02.01.04" class="categoryTextThree">Soldering & Glue Gun Tools</a></li>
                <li><a href="/products/02.01.05" class="categoryTextThree">Hand Riveters & Rivets</a></li>
                <li><a href="/products/02.01.06" class="categoryTextThree">Woodworking Tools</a></li>
                <li><a href="/products/02.01.07" class="categoryTextThree">Welding & Torch Tools</a></li>
                <li><a href="/products/02.01.08" class="categoryTextThree">Electric & Electronic Testers</a></li>
                <li><a href="/products/02.01.09" class="categoryTextThree">Hand Suction Pumps</a></li>
                <li><a href="/products/02.01.10" class="categoryTextThree">Tap, Die Threaded & Sets</a></li>
                <li><a href="/products/02.01.11" class="categoryTextThree">Clamps</a></li>
                <li><a href="/products/02.01.12" class="categoryTextThree">Steel Stamps</a></li>
                <li><a href="/products/02.01.13" class="categoryTextThree">Tool Bags & Boxes</a></li>


              </ul>
            </li>

            <!-- Building Tools (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/02.02.00" class="categoryTextTwo">Building Tools</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddBuildingTools"></a>
              </div>

              <ul class="list-unstyled" id="buildingTools">

                <!-- (3) -->
                <li><a href="/products/02.02.01" class="categoryTextThree">Masonry Tools</a></li>
                <li><a href="/products/02.02.02" class="categoryTextThree">Painting Tools</a></li>
                <li><a href="/products/02.02.03" class="categoryTextThree">Tiling Tools</a></li>
                <li><a href="/products/02.02.04" class="categoryTextThree">Staple Guns & Punches</a></li>
                <li><a href="/products/02.02.05" class="categoryTextThree">Caulking Guns</a></li>
                <li><a href="/products/02.02.06" class="categoryTextThree">HSS Twist & Step Drill Bits</a></li>
                <li><a href="/products/02.02.07" class="categoryTextThree">Masonry Drill Bits</a></li>
                <li><a href="/products/02.02.08" class="categoryTextThree">Wood Drill Bits</a></li>
                <li><a href="/products/02.02.09" class="categoryTextThree">Augers Bits</a></li>
                <li><a href="/products/02.02.10" class="categoryTextThree">Chisels</a></li>
                <li><a href="/products/02.02.11" class="categoryTextThree">Files</a></li>
                <li><a href="/products/02.02.12" class="categoryTextThree">Glass Cutters</a></li>
                <li><a href="/products/02.02.13" class="categoryTextThree">Pry Bars</a></li>
                <li><a href="/products/02.02.14" class="categoryTextThree">General Cutters & Scissors</a></li>
                <li><a href="/products/02.02.15" class="categoryTextThree">PVC Valves & Unions</a></li>
                <li><a href="/products/02.02.16" class="categoryTextThree">Scrapers</a></li>


              </ul>
            </li>

          </ul>
        </li>


        <!-- Automotive (1) -->
        <li>
          <!-- Split Button Container -->
          <div class="btn-group splitButtonOne">
            <!-- Text -->
            <a href="/categories/03.00.00" class="categoryTextOne">Automotive</a>
            <!-- Dropdown Icon -->
            <a class="dropdownIconOne dropdown-toggle" id="ddAutomotive"></a>
          </div>

          <ul class="list-unstyled" id="automotive">

            <!-- Auto Clamps & Terminals (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/03.01.00" class="categoryTextTwo">Auto Clamps & Terminals</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddACT"></a>
              </div>

              <ul class="list-unstyled" id="ACT">

                <!-- (3) -->
                <li><a href="/products/03.01.01" class="categoryTextThree">Hose Clamps</a></li>
                <li><a href="/products/03.01.02" class="categoryTextThree">Cable Tie & Nail Clips</a></li>
                <li><a href="/products/03.01.03" class="categoryTextThree">Cable Terminals Connectors</a></li>
                <li><a href="/products/03.01.04" class="categoryTextThree">Automotive Fuses</a></li>
                <li><a href="/products/03.01.05" class="categoryTextThree">Booster Cables & Battery Terminals</a></li>

              </ul>
            </li>

            <!-- Auto Repair & Test Kits (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/03.02.00" class="categoryTextTwo">Auto Repair & Test Kits</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddARTK"></a>
              </div>

              <ul class="list-unstyled" id="ARTK">
                <!-- (3) -->
                <li><a href="/products/03.02.01" class="categoryTextThree">Gear & Bearing Pullers</a></li>
                <li><a href="/products/03.02.02" class="categoryTextThree">Engine Testers</a></li>
                <li><a href="/products/03.02.03" class="categoryTextThree">Grease Guns</a></li>

              </ul>
            </li>


            <!-- Air Tools & Accessories (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/03.03.00" class="categoryTextTwo">Air Tools & Accessories</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddATA"></a>
              </div>

              <ul class="list-unstyled" id="ATA">

                <!-- (3) -->
                <li><a href="/products/03.03.01" class="categoryTextThree">Air Paint Spray Guns</a></li>
                <li><a href="/products/03.03.02" class="categoryTextThree">Air Dusters</a></li>
                <li><a href="/products/03.03.03" class="categoryTextThree">Air Chucks</a></li>
                <li><a href="/products/03.03.04" class="categoryTextThree">Air Regulators & Filters</a></li>
                <li><a href="/products/03.03.05" class="categoryTextThree">Air Quick Couplers</a></li>
                <li><a href="/products/03.03.06" class="categoryTextThree">Brass Air Valves</a></li>
                <li><a href="/products/03.03.07" class="categoryTextThree">Brass Air Connectors for Brass Tubes</a></li>
                <li><a href="/products/03.03.08" class="categoryTextThree">Brass Air Connectors, Flare Type for Brass Tubes</a></li>
                <li><a href="/products/03.03.09" class="categoryTextThree">Brass Air Connectors for PU/PF Nylon Tubes</a></li>


              </ul>
            </li>

          </ul>
        </li>


        <!-- Safety Equipment (1) -->
        <li>
          <!-- Split Button Container -->
          <div class="btn-group splitButtonOne">
            <!-- Text -->
            <a href="/categories/04.00.00" class="categoryTextOne">Safety Equipment</a>
            <!-- Dropdown Icon -->
            <a class="dropdownIconOne dropdown-toggle" id="ddSafetyEquipment"></a>
          </div>

          <ul class="list-unstyled" id="safetyEquipment">

            <!-- Safety Accessories (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/04.01.00" class="categoryTextTwo">Safety Accessories</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddSafetyAcc"></a>
              </div>

              <ul class="list-unstyled" id="safetyAcc">

                <!-- (3) -->
                <li><a href="/products/04.01.01" class="categoryTextThree">Welding Goggles & Masks</a></li>
                <li><a href="/products/04.01.02" class="categoryTextThree">Safety Goggles & Masks</a></li>
                <li><a href="/products/04.01.03" class="categoryTextThree">Respirators & Ear Muffs</a></li>
                <li><a href="/products/04.01.04" class="categoryTextThree">Working Gloves</a></li>
                <li><a href="/products/04.01.05" class="categoryTextThree">Safety Body Belts</a></li>
                <li><a href="/products/04.01.06" class="categoryTextThree">Safety Helmets</a></li>
                <li><a href="/products/04.01.07" class="categoryTextThree">Safety Jackets</a></li>

              </ul>
            </li>

            <!-- Safety Devices (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/04.02.00" class="categoryTextTwo">Safety Devices</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddSafetyDevices"></a>
              </div>

              <ul class="list-unstyled" id="safetyDevices">

                <!-- (3) -->
                <li><a href="/products/04.02.01" class="categoryTextThree">Ratchet Tie Downs & Towing Ropes</a></li>
                <li><a href="/products/04.02.02" class="categoryTextThree">Hand Puller & Accessories</a></li>
                <li><a href="/products/04.02.03" class="categoryTextThree">Safety Traffic Devices</a></li>

              </ul>
            </li>


          </ul>
        </li>


        <!-- Garden Tools & Accessories (1) -->
        <li>
          <!-- Split Button Container -->
          <div class="btn-group splitButtonOne">
            <!-- Text -->
            <a href="/categories/05.00.00" class="categoryTextOne">Garden Tools & Accessories</a>
            <!-- Dropdown Icon -->
            <a class="dropdownIconOne dropdown-toggle" id="ddGTA"></a>
          </div>

          <ul class="list-unstyled" id="GTA">

            <!-- Watering Equipment (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/05.01.00" class="categoryTextTwo">Watering Equipment</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddWateringEquipment"></a>
              </div>

              <ul class="list-unstyled" id="wateringEquipment">

                <!-- (3) -->
                <li><a href="/products/05.01.01" class="categoryTextThree">Hose Connectors</a></li>
                <li><a href="/products/05.01.02" class="categoryTextThree">Trigger Nozzles & Sprinklers</a></li>

              </ul>
            </li>

            <!-- Garden Shears & Pruners (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/05.02.00" class="categoryTextTwo">Garden Shears & Pruners</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddGSP"></a>
              </div>

              <ul class="list-unstyled" id="GSP">

                <!-- (3) -->
                <li><a href="/products/05.02.01" class="categoryTextThree">Garden Shears</a></li>
                <li><a href="/products/05.02.02" class="categoryTextThree">Hedge Shears</a></li>
                <li><a href="/products/05.02.03" class="categoryTextThree">Pruners</a></li>
                <li><a href="/products/05.02.04" class="categoryTextThree">Trimmers</a></li>

              </ul>
            </li>


          </ul>
        </li>


        <!-- Others (1) -->
        <li>
          <!-- Split Button Container -->
          <div class="btn-group splitButtonOne">
            <!-- Text -->
            <a href="/categories/06.00.00" class="categoryTextOne">Others</a>
            <!-- Dropdown Icon -->
            <a class="dropdownIconOne dropdown-toggle" id="ddOthers"></a>
          </div>

          <ul class="list-unstyled" id="others">

            <!-- Water Purifier & Filter (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/06.01.00" class="categoryTextTwo">Water Purifier & Filter</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddWPF"></a>
              </div>

              <ul class="list-unstyled" id="WPF">

                <!-- (3) -->
                <li><a href="/products/06.01.01" class="categoryTextThree">Water Purifiers & Filters</a></li>
              </ul>
            </li>

            <!-- Folding Tools & Gifts (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/06.02.00" class="categoryTextTwo">Folding Tools & Gifts</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddFTG"></a>
              </div>

              <ul class="list-unstyled" id="FTG">

                <!-- (3) -->
                <li><a href="/products/06.02.01" class="categoryTextThree">Multi-Purpose Folding Tools</a></li>
                <li><a href="/products/06.02.02" class="categoryTextThree">Key Chains</a></li>

              </ul>
            </li>

            <!-- Packing Material (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/06.03.00" class="categoryTextTwo">Packing Material</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddPackingMaterial"></a>
              </div>

              <ul class="list-unstyled" id="packingMaterial">

                <!-- (3) -->
                <li><a href="/products/06.03.01" class="categoryTextThree">Tapes</a></li>
                <li><a href="/products/06.03.02" class="categoryTextThree">PP Bands</a></li>


              </ul>
            </li>


            <!-- Locks (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/06.04.00" class="categoryTextTwo">Locks</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddLocks"></a>
              </div>

              <ul class="list-unstyled" id="locks">

                <!-- (3) -->
                <li><a href="/products/06.04.01" class="categoryTextThree">Vehicle's Locks</a></li>
                <li><a href="/products/06.04.02" class="categoryTextThree">Pad Locks</a></li>


              </ul>
            </li>


            <!-- Miscellaneous (2) -->
            <li>
              <div class="btn-group splitButtonTwo">
                <!-- Text -->
                <a href="/categories/06.05.00" class="categoryTextTwo">Miscellaneous</a>
                <!-- Dropdown Icon -->
                <a class="dropdownIconTwo dropdown-toggle" id="ddMisc"></a>
              </div>

              <ul class="list-unstyled" id="misc">

                <!-- (3) -->
                <li><a href="/products/06.05.01" class="categoryTextThree">Others</a></li>
              </ul>
            </li>


          </ul>
        </li>


        <hr>
        <li>
          @if($homepage ?? '' == true)
            <a href="/#aboutMeikoSec"><i class="fas fa-info-circle icons"></i> About Meiko</a>
          @else
            <a href="{{route('index')}}/aboutMeikoSec"><i class="fas fa-info-circle icons"></i> About Meiko</a>
          @endif
        </li>
        <li>
          @if($homepage ?? '' == true)
            <a href="/#contactUsSec"><i class="fas fa-phone-volume icons"></i> Contact Us</a>
          @else
            <a href="{{route('index')}}/contactUsSec"><i class="fas fa-info-circle icons"></i> Contact Us</a>
          @endif
        </li>

        <li>
          <a href="/#contact_email"><i class="fas fa-arrow-alt-circle-up icons"></i> Back to Top</i></a>
        </li>

      </ul>

    </nav>


    <!-- ******************** -->
    <!-- ***** Page Contents *****  -->
    <!-- ******************** -->

    <!-- Content Container -->
    <div id="content">


      <!-- ******************** -->
      <!-- ***** Contact Email Information *****  -->
      <!-- ******************** -->
      <div id="contact_email">
        <span class="mr-3"><i class="far fa-envelope emailIcon"></i> inshara@info.com / meikotools@gmail.com</span>
        <span class="mr-3" style="white-space:pre;"><a href="http://www.facebook.com/meikotools"><i class="fab fa-facebook-square" style="color:#385898;"></i>  www.facebook.com/meikotools</a></span>


      </div>


      <!-- ******************** -->
      <!-- ***** Navbar *****  -->
      <!-- ******************** -->

      <nav class="navbar navbar-expand-lg navbar-light justify-content-between sticky-top mb-0 py-0" id="navbar">

        <div id="buttonLogo" style="display:inline;">
          <!-- Toggle Sidebar Button -->

          <button type="button" id="sidebarCollapse" class="btn">
            <i class="fas fa-bars icons"></i>
            <span>Toggle Sidebar</span>
          </button>


          <!-- Meiko Logo -->

          <a class="navbar-brand" href="/" id="meikoLogo">
            <img src="/images/logo/meiko_icon.jpg" alt="Meiko Tools">
          </a>

        </div>

        <!-- Navbar Items -->
        <div class="d-none d-lg-block" id="navbarItems">
          <ul class="navbar-nav">

            <!-- Products Button-->
            <li class="nav-item">
              <a class="nav-link" href="/categories" id="products"><i class="fas fa-tools icons"></i> PRODUCTS</a>
            </li>

            <!-- About Meiko Button-->
            <div class="d-none d-xl-block">
              <li class="nav-item">
              @if($homepage ?? '' == true)
                <a class="nav-link" href="{{route('index')}}/#aboutMeikoSec" id="about_meiko"><i class="fas fa-info-circle icons"></i> ABOUT MEIKO</a>
              @else
              <a class="nav-link" href="{{route('index')}}/aboutMeikoSec" id="about_meiko"><i class="fas fa-info-circle icons"></i> ABOUT MEIKO</a>
              @endif
              </li>
            </div>

            <!-- Contact Us Button-->
            <div class="d-none d-xl-block">
              <li class="nav-item">
              @if($homepage ?? '' == true)
                <a class="nav-link" href="{{route('index')}}/#contactUsSec" id="contact_us"><i class="fas fa-phone-volume icons"></i> CONTACT US</a>
              @else
                <a class="nav-link" href="{{route('index')}}/contactUsSec" id="contact_us"><i class="fas fa-phone-volume icons"></i> CONTACT US</a>
              @endif
              </li>
            </div>
          </ul>
        </div>


        <!-- Search Bar -->
        <div id="searchBar" style="width: fit-content;">
          <form class="form-inline my-lg-0 my-sm-2" method="GET" action="{{$search_action}}">
            <!-- Search Bar Input -->
            <input class="form-control" id="searchBarInput" type="search" placeholder="Search" aria-label="Search" name="keyword">
            <!-- Search Bar Icon -->
            <button class="btn my-2 my-sm-2 searchIcon" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
      </nav>

      <!-- Search Bar (Small View) -->
      <div id="searchBarSmall">
        <form class="form-inline my-lg-0 my-sm-2 justify-content-center" method="GET" action="{{$search_action}}">
          <!-- Search Bar Input (Small View) -->
          <input id="searchBarSmallInput" type="search" placeholder="Search" aria-label="Search" name="keyword">
          <!-- Search Bar Icon (Small View) -->
          <button class="btn my-2 my-sm-2 searchIcon" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>

    @yield('main_content')
    @yield('content')

      <!-- ******************** -->
      <!-- ***** Footer *****  -->
      <!-- ******************** -->
      <section id="footer">

        <!-- Copyright -->
        <div class="row justify-content-between mx-4">
          <div class="">
            <p><i class="far fa-copyright"></i> 2020 Inshara General Merchandise Corporation. All rights reserved.</p>
          </div>

          <!-- Back to Top Button -->
          <div>
            <a href="/#contact_email"><i class="fas fa-arrow-alt-circle-up icons"></i> <u>Back to Top</u></a>
          </div>
        </div>
      </section>


      <!-- Toggle Sidebar Button (small) -->
      <button type="button" id="sidebarCollapseSmall" class="btn">
        <i class="fas fa-bars icons"></i>
      </button>

      <!-- Back to Top Button (small) -->
      <div id="goToTop">
        <a href="/#contact_email"><i class="fas fa-arrow-up icons"></i></a>
      </div>


      <!-- Content End -->
    </div>


    <!-- Container Fluid End -->
  </div>


  <!-- ******************** -->
  <!-- ***** Overlay *****  -->
  <!-- ******************** -->
  <div class="overlay"></div>


  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

  <!-- jQuery CDN - Minified version -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- Typeahead JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>


  <!-- Custom JS -->
  <script type="text/javascript" src="/js/homepage.js"></script>

  <script type="text/javascript">
    var route = "{{ url('autocomplete') }}";
    $('#searchBarInput').typeahead({
        minLength: 3,
        source:  function (term, process) {
        return $.get(route, { term: term }, function (data) {
                return process(data);
            });
        }
    });

    $('#searchBarSmallInput').typeahead({
        minLength: 3,
        source:  function (term, process) {
        return $.get(route, { term: term }, function (data) {
                return process(data);
            });
        }
    });
</script>
<style>
.dropdown-menu{
  left: auto !important;
  right:25px;
}
</style>

</body>
</html>