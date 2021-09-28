 <div class="form-group">
                    <div class="content">
                  
                      <div class="fieldWrap addr_search">
                        <input type="text" name="search" class="searchInput" id="searchBoxs" value="" placeholder="Enter Postcode" onchange="showClear()" onkeypress="return enterSearch(event)">
                        <input type="button" id="search_button" value="search" onclick="findAddress()">
                        <div class="clear" id="clearButton" onclick="clearSearch()">X</div>
                      </div>
                      
                      <div class="fieldWrap">
                        <div class="error" id="errorMessage"></div>
                      </div>
                      
                      <div class="fieldWrap result">
                        <div  id="result"></div>
                      </div>  
                      
                      <div class="seperator" id="seperator"></div> 
                      
                      <div class="fieldWrap">
                   <!--  <div class="outputArea" id="output"></div> -->
                  </div>
                  
                </div>
                  </div>
<script type="text/javascript">
      function showClear() {
                document.getElementById("clearButton").style.display = "block";
            }

            function clearSearch() {
                var input = document.getElementById("searchBoxs");
                input.value = "";
                document.getElementById("clearButton").style.display = "none";  
            }

            function showError(message) {
                var error = document.getElementById("errorMessage");
                error.innerText = message;
                error.style.display = "block";
                
                setTimeout(function(){
                    error.style.display = "none";
                }, 10000)
            }

            function enterSearch(e) {
                if (e.keyCode == 13){
                    findAddress();  
                }
            }

            function findAddress(SecondFind) {
              var Text = document.getElementById("searchBoxs").value;
                
                if (Text === "") {
                    showError("Please enter an address");
                    return;
                }
                
                var Container = "";         
                        
                if (SecondFind !== undefined){
                     Container = SecondFind;
                } 
                
            var Key = "TX99-MG17-TF52-ZF78",
                IsMiddleware = false,
                Origin = "",
                Countries = "GBR",
                Limit = "10",
                Language = "en-gb",  
                    url = 'https://services.postcodeanywhere.co.uk/Capture/Interactive/Find/v1.10/json3.ws';
            var params = '';
                params += "&Key=" + encodeURIComponent(Key);
                params += "&Text=" + encodeURIComponent(Text);
                params += "&IsMiddleware=" + encodeURIComponent(IsMiddleware);
                params += "&Container=" + encodeURIComponent(Container);
                params += "&Origin=" + encodeURIComponent(Origin);
                params += "&Countries=" + encodeURIComponent(Countries);
                params += "&Limit=" + encodeURIComponent(Limit);
                params += "&Language=" + encodeURIComponent(Language);
            var http = new XMLHttpRequest();
            http.open('POST', url, true);
            http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            http.onreadystatechange = function() {
              if (http.readyState == 4 && http.status == 200) {
                  var response = JSON.parse(http.responseText);
                  if (response.Items.length == 1 && typeof(response.Items[0].Error) != "undefined") {
                     showError(response.Items[0].Description);
                  }
                  else {
                    if (response.Items.length == 0){
                        //showError("Sorry, there were no results");

                   } else {
                        var list=jQuery('#input_2_19');
                      for (var i = 0; i < response.Items.length; i++){ 
                      jQuery('#input_2_19').append('<option value="'+response.Items[i].Text + " " + response.Items[i].Description+'">'+response.Items[i].Text + " " + response.Items[i].Description+'</option>');     
                      }
                      jQuery('#input_2_19').css('display','block');
                                                     
                    }
                }
              }
            }
                http.send(params);
            };  

            function selectAddress(Key){
                    var resultList = document.getElementById("result");
                
                    if (resultList.childNodes.length > 0) {     
                            var elem = document.getElementById("mySelect");
                                
                            //IE fix
                                        elem.onchange = function (e) {
                                            
                                            var target = e.target[e.target.selectedIndex];
                                            
                                            if (target.text === "Select Address") {
                                                return;
                                            }       

                                            if (target.className === "Address"){
                                               //retrieveAddress (Key, target.value);
                                            }
                                            
                                            else {
                                              //findAddress(target.value)
                                            }                           
                                    };              
                                }
            };

            function retrieveAddress(Key, Id){
                var Field1Format = "";
                var url = 'https://services.postcodeanywhere.co.uk/Capture/Interactive/Retrieve/v1.00/json3.ws';
                var params = '';
                        params += "&Key=" + encodeURIComponent(Key);
                        params += "&Id=" + encodeURIComponent(Id);
                        params += "&Field1Format=" + encodeURIComponent(Field1Format);
               
            var http = new XMLHttpRequest();
            http.open('POST', url, true);
            http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            http.onreadystatechange = function() {
              if (http.readyState == 4 && http.status == 200) {
                  var response = JSON.parse(http.responseText);

                  if (response.Items.length == 1 && typeof(response.Items[0].Error) != "undefined") {
                    showError(response.Items[0].Description);
                  }
                  else {
                    if (response.Items.length == 0)
                        showError("Sorry, there were no results");
                    else {           
                                var res = response.Items[0];
                                var resBox = document.getElementById("output");
                                resBox.innerText = res.Label;           
                              document.getElementById("output").style.display = "block";
                                document.getElementById("seperator").style.display = "block";
                   }
                }
              }
            }
                http.send(params); 
            }
</script>

    
    
