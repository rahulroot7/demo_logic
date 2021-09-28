<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>



<script type="text/javascript">
   // JS for demo
$( document ).ready(function() {
$( "#dialog1" ).dialog({
            autoOpen: false,
            show: {
                effect: "fade",
                duration: 150
            },
            hide: {
                effect: "fade",
                duration: 150
            },
            position: {
            my: "center",
            at: "center"
            },
            // Add the 2 options below to use click outside feature
            clickOutside: true, // clicking outside the dialog will close it
            clickOutsideTrigger: "#opener1"  // Element (id or class) that triggers the dialog opening 
        });
        
    $( "#dialog2" ).dialog({
            autoOpen: false,
            show: {
                effect: "fade",
                duration: 150
            },
            hide: {
                effect: "fade",
                duration: 150
            },
            position: {
            my: "center",
            at: "center"
            },
            // Add the 2 options below to use click outside feature
            clickOutside: true, // clicking outside the dialog will close it
            clickOutsideTrigger: "#opener2"  // Element (id or class) that triggers the dialog opening
        });     

    $( "#dialog3" ).dialog({
            autoOpen: false,
            show: {
                effect: "fade",
                duration: 150
            },
            hide: {
                effect: "fade",
                duration: 150
            },
            position: {
            my: "center",
            at: "center"
            },
            clickOutside: false // For demo purpose. Not necessary because this is the default value
        }); 

        $( "#opener1" ).click(function() {
            $( "#dialog1" ).dialog( "open" );
        });
        
        $( "#opener2" ).click(function() {
            $( "#dialog2" ).dialog( "open" );
        });
        
        $( "#opener3" ).click(function() {
            $( "#dialog3" ).dialog( "open" );
        });
});


$.widget( "ui.dialog", $.ui.dialog, {
  options: {
    clickOutside: false, // Determine if clicking outside the dialog shall close it
    clickOutsideTrigger: "" // Element (id or class) that triggers the dialog opening 
  },

  open: function() {
    var clickOutsideTriggerEl = $( this.options.clickOutsideTrigger );
    var that = this;
    
    if (this.options.clickOutside){
      // Add document wide click handler for the current dialog namespace
      $(document).on( "click.ui.dialogClickOutside" + that.eventNamespace, function(event){
        if ( $(event.target).closest($(clickOutsideTriggerEl)).length == 0 && $(event.target).closest($(that.uiDialog)).length == 0){
          that.close();
        }
      });
    }
    
    this._super(); // Invoke parent open method
  },
  
  close: function() {
    var that = this;
    
    // Remove document wide click handler for the current dialog
    $(document).off( "click.ui.dialogClickOutside" + that.eventNamespace );
    
    this._super(); // Invoke parent close method 
  },  

});
 
</script>

    <meta charset="utf-8">
    <title>jQuery UI Dialog - ClickOutside demo</title>
</head>
<body>
  <div class="demo-description">
  <p>Jquery UI dialogs can't be closed when you click elsewhere on the page that makes it a problem when you have several dialogs on a single page (you'd expect that opening a dialog widget will automatically close the other opened dialogs) or links or elements that keep you on the same page (e.g. form, ajax refresh, ...).</p>
    <p>Agence Web Coheractio has developed a small plugin (1 ko) enabling that important feature.</p>
  </div>

<div id="dialog1" title="Basic dialog #1">
    <strong>Dialog #1</strong>
    <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>

<div id="dialog2" title="Basic dialog #2">
    <strong>Dialog #2</strong>
    <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'close' link.</p>
</div>

<div id="dialog3" title="Basic dialog #3">
    <strong>Dialog #3 : default jQuery UI dialog without click outside</strong>
    <p>This is a animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'close' link.</p>
</div>

<div class="button-holder">
  <button id="opener1">Open Dialog #1 <br/>With click outside active</button>
</div>
<div class="button-holder">
  <button id="opener2"><span>Open Dialog #2 <br/>With click outside active &amp; inner span button</span></button>
</div>
<div class="button-holder">
  <button id="opener3">Open Dialog #3<br/>Without click outside</button>
</div>


<div class="demo-description">
  <p>Dialogs may be animated by specifying an effect for the show and/or hide properties.  You must include the individual effects file for any effects you would like to use.</p>
  <p>The plugin can be downloaded on Github from our Github repository : https://github.com/coheractio/jQuery-UI-Dialog-ClickOutside
</div>
</body>


</html>
