<!DOCTYPE html>
<html>
<head>
  <title>Shopregate</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- 1. Include the client library -->
  <script src="https://cdn.import.io/js/2.0.0/importio.js"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="icon.png">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!-- 2. Configure the library -->
  <script type="text/javascript">
    importio.init({
      "auth": {
        "userGuid": "3b83db3c-6dc3-4c39-96d9-5a593e208234",
        "apiKey": "FROtyR1U+G0YF0msvSH2wb/eYnq+uFQcU1mDYpaJgSg6yQ4R1bsa/NjOWVlODVb5D6GvLhHNKgWiyVpTLLjeAQ=="
      },
      "host": "import.io"
    });

    // Data and done callbacks
    var GAPdataCallback = function(data) {
      console.log("Data received", data);
      for (var i = 0; i < 10; i++) {
      var d = data[i];
      var itemName;
      var price;
      var link;
      var image;
      for (var k in d.data) {
        if(k == "PRODUCTITEMNAME_LINK/_text")
          itemName = d.data[k];
          //document.write("<i>" + "Product" + "</i>: " + d.data[k] + "<br />");
        else if(k == "PRODUCTITEMNAME_LINK")
          link = d.data[k];
          //document.write("<a href='" + d.data[k] + "'>" + itemName + "</a>" + "<br />");
        else if(k == "GRIDPRODIMG_IMAGE")
          image = d.data[k];
           //document.write("<img src='" + d.data[k] + "'>" + "<br />");
         else if(k == "price")
          price = d.data[k];
          //document.write("Price: " + d.data[k]  + "<br />");
      }
      document.getElementById("gapID").innerHTML += "<div class='col-md-12'>";
      document.getElementById("gapID").innerHTML += "<a target='_blank' href='" + link + "'>" + "<img style='max-height:20em' src='" + image + "'>" + "</a>" + "<br />";
      document.getElementById("gapID").innerHTML += "<a target='_blank' href='" + link + "'>" + itemName + "</a>" + "<br />";
      document.getElementById("gapID").innerHTML += "Price: " + price  + "<br />";
      document.getElementById("gapID").innerHTML += "</div>";
      document.getElementById("gapID").innerHTML += "<hr>";
      }
    }

    var ONdataCallback = function(data) {
      console.log("Data received", data);
      for (var i = 0; i < 10; i++) {
      var d = data[i];
      var itemName;
      var price;
      var link;
      var image;
      for (var k in d.data) {
        if(k == "PRODUCTITEMNAME_LINK/_text")
          itemName = d.data[k];
          //document.write("<i>" + "Product" + "</i>: " + d.data[k] + "<br />");
        else if(k == "PRODUCTITEMNAME_LINK")
          link = d.data[k];
          //document.write("<a href='" + d.data[k] + "'>" + itemName + "</a>" + "<br />");
        else if(k == "GRIDPRODIMG_IMAGE")
          image = d.data[k];
           //document.write("<img src='" + d.data[k] + "'>" + "<br />");
         else if(k == "TEXT_1")
          price = d.data[k];
          //document.write("Price: " + d.data[k]  + "<br />");
      }
      document.getElementById("onID").innerHTML += "<div class='col-md-12'>";
      document.getElementById("onID").innerHTML += "<a target='_blank' href='" + link + "'>" + "<img style='max-height:20em' src='" + image + "'>" + "</a>" + "<br />";
      document.getElementById("onID").innerHTML += "<a target='_blank' href='" + link + "'>" + itemName + "</a>" + "<br />";
      document.getElementById("onID").innerHTML += "Price: " + price  + "<br />";
      document.getElementById("onID").innerHTML += "</div>";
      document.getElementById("onID").innerHTML += "<hr>";
      }
    }

    var searchAT = "<?php echo $_GET['searchVariable'] ?>+<?php echo $_GET['color'] ?>+<?php echo $_GET['size'] ?>+<?php echo $_GET['sex'] ?>";
    var ATdataCallback = function(data) {
      console.log("Data received", data);
      for (var i = 0; i < 10; i++) {
      var d = data[i];
      var itemName;
      var price;
      var link;
      var image;
      for (var k in d.data) {
        if(k == "THUMB_IMAGE/_alt")
          itemName = d.data[k];
        else if(k == "THUMB_IMAGE")
          image = d.data[k];
           //document.write("<img src='" + d.data[k] + "'>" + "<br />");
        price = "$89";
        link = "http://www.anntaylor.com/search/searchResults.jsp?question=" + searchAT + "&gridSize=md&_requestid=842974";
          //document.write("Price: " + d.data[k]  + "<br />");
      }
      document.getElementById("atID").innerHTML += "<div class='col-md-12'>";
      document.getElementById("atID").innerHTML += "<a target='_blank' href='" + link + "'>" + "<img style='max-height:20em' src='" + image + "'>" + "</a>" + "<br />";
      document.getElementById("atID").innerHTML += "<a target='_blank' href='" + link + "'>" + itemName + "</a>" + "<br />";
      document.getElementById("atID").innerHTML += "Price: " + price  + "<br />";
      document.getElementById("atID").innerHTML += "</div>";
      document.getElementById("atID").innerHTML += "<hr>";
      }
    }
    var BRdataCallback = function(data) {
      console.log("Data received", data);
      for (var i = 0; i < 10; i++) {
      var d = data[i];
      var itemName;
      var price;
      var link;
      var image;
      for (var k in d.data) {
        if(k == "PRODUCTITEMNAME_LINK/_text")
          itemName = d.data[k];
          //document.write("<i>" + "Product" + "</i>: " + d.data[k] + "<br />");
        else if(k == "PRODUCTITEMNAME_LINK")
          link = d.data[k];
          //document.write("<a href='" + d.data[k] + "'>" + itemName + "</a>" + "<br />");
        else if(k == "GRIDPRODIMG_IMAGE")
          image = d.data[k];
           //document.write("<img src='" + d.data[k] + "'>" + "<br />");
         else if(k == "TEXT_1")
          price = d.data[k];
          //document.write("Price: " + d.data[k]  + "<br />");
      }
      document.getElementById("brID").innerHTML += "<div class='col-md-12'>";
      document.getElementById("brID").innerHTML += "<a target='_blank' href='" + link + "'>" + "<img style='max-height:20em' src='" + image + "'>" + "</a>" + "<br />";
      document.getElementById("brID").innerHTML += "<a target='_blank' href='" + link + "'>" + itemName + "</a>" + "<br />";
      document.getElementById("brID").innerHTML += "Price: " + price  + "<br />";
      document.getElementById("brID").innerHTML += "</div>";
      document.getElementById("brID").innerHTML += "<hr>";
      }
    }

    var dataCallback = function(data) {
      console.log("Data received", data);
      for (var i = 0; i < 10; i++) {
      var d = data[i];
    for (var k in d.data) {
      document.write("<i>" + k + "</i>: " + d.data[k] + "<br />");
    }
    document.write("<hr>");
    }
    }

    var doneCallback = function(data) {
      console.log("Done, all data:", data);
      //document.write("<b>Done</b><hr>");
    }

// 3. Do the query (when the function is called)
    var doQuery = function(searchVar) {
      // Query for tile gap

      var searchURL = "http://www.gapcanada.ca/browse/search.do?searchText=" + searchVar ;
       //document.write("<b>GAP</b><hr>");
      importio.query({
        "connectorGuids": [
          "2cea5611-aa7e-498f-bf96-60b005b5985e"
        ],
        "input": {
          "webpage/url": searchURL
        }
      }, { "data": GAPdataCallback, "done": doneCallback });
    }
    var doQuery2 = function(searchVar) {
      // Query for tile gap

      var BRsearchURL = "http://bananarepublic.gap.com/browse/search.do?searchText=" + searchVar + "&x=0&y=0";
      importio.query({
        "connectorGuids": [
          "ea94ba7d-e15b-4ba5-916d-f3614c1da920"
        ],
        "input": {
          "webpage/url": BRsearchURL
        }
      }, { "data": BRdataCallback, "done": doneCallback });
    }

    var doQuery3 = function(searchVar) {
      var ATsearchURL = "http://www.anntaylor.com/search/searchResults.jsp?question=" + searchVar + "&gridSize=md&_requestid=842974";
      importio.query({
        "connectorGuids": [
          "b5d43d7f-a266-4f5c-ac26-4537d3593a28"
        ],
        "input": {
          "webpage/url": ATsearchURL
        }
      }, { "data": ATdataCallback, "done": doneCallback });
    }
    var doQuery4 = function(searchVar) {
      var ONsearchURL = "http://oldnavy.gap.com/browse/search.do?searchText=" + searchVar ;
      importio.query({
        "connectorGuids": [
          "80cc0cfd-c3ec-4547-ba4a-62424bbf2c4b"
        ],
        "input": {
          "webpage/url": ONsearchURL
        }
      }, { "data": ONdataCallback, "done": doneCallback });
    }

  </script>
  <body>
    <script type="text/javascript">var searchVar = "<?php echo $_GET['searchVariable'] ?>+<?php echo $_GET['color'] ?>+<?php echo $_GET['size'] ?>+<?php echo $_GET['sex'] ?>";</script>
    <!--<button onclick="doQuery3(searchVar)">Query</button>-->
    <div class="container-fluid">
      <div class="row" style="padding-bottom:.5em; background-color: #d45500;">
        <img src="ShopregateBanner.png"  alt="Generic placeholder thumbnail" style="max-width:40%">
      </div>
      <div class="row">
        <div class="col-sm-12 main">
          <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
            <form method="get">
            <div style="border:0px solid black;padding:2px;width:20em;">
              <table border="0" cellpadding="0">
                <tr><td>
                  <input type="text"   name="searchVariable" size="25" maxlength="255" value=""<textarea placeholder="Search"></textarea>
                  <input type="submit" value="Search" /></td></tr>
              </table>
            </div>
           </form>
         </div>
          </div>
          <div class="row placeholders">
            <div class="col-sm-3 placeholder">
              <img src="at.jpg"  alt="Generic placeholder thumbnail" style="max-width:50%">
               <script type="text/javascript">doQuery(searchVar)</script>
            </div>
            <div class="col-sm-3 placeholder">
              <img src="br.jpg" alt="Generic placeholder thumbnail" style="max-width:50%">
               <script type="text/javascript">doQuery2(searchVar)</script>
            </div>
            <div class="col-sm-3 placeholder">
              <img src="gap.jpg" class="img-responsive" alt="Generic placeholder thumbnail" style="max-width:50%">
               <script type="text/javascript">doQuery3(searchVar)</script>
            </div>
            <div class="col-sm-3 placeholder">
              <img src="on.jpg" class="img-responsive" alt="Generic placeholder thumbnail" style="">
               <script type="text/javascript">doQuery4(searchVar)</script>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3" id="gapID" style="padding-left:3em">
              <script type="text/javascript">//doQuery(searchVar)</script>
            </div>
            <div class="col-md-3" id="brID" style="padding-left:3em">
              <script type="text/javascript">//doQuery2(searchVar)</script>
            </div>
            <div class="col-md-3" id="atID" style="padding-left:3em">
              <script type="text/javascript">//doQuery3(searchVar)</script>
            </div>
            <div class="col-md-3" id="onID" style="padding-left:3em">
              <script type="text/javascript">//doQuery3(searchVar)</script>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>