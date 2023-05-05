function removeSemester(semester_id){
    
    // declare local variables
    var xmlhttp;

    // create the request object depending on
    //      the browser type
    if ( window.XMLHttpRequest )
    {
        // code for IE7+, Firefox, Chrome, Safari, Opera
        xmlhttp = new XMLHttpRequest;
    }
    else
    {
        // code for IE6 and earlier - need to use an
        //      ActiveX object (yuck!)
        xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
    }
    

    // set the callback function. this function inserts the html that
    //      is received into the "info" section of the page. It is
    //      a callback function because the XMLHttpRequest object
    //      calls this function when the ready state changes and it
    //      is provided by the user of the object.
    xmlhttp.onreadystatechange = function ()
    {
        // check for a good return
        if (( xmlhttp.readyState == 4 ) &&
            ( xmlhttp.status == 200 ))
        {
            // add the received html to the results element
            document.getElementById( 'semestersAndCourses' ).innerHTML = xmlhttp.responseText;
        }
    }
    
    // create the request. this creates a HTTP POST request
    //      POST requests are better then GET requests. when you start
    //      to pass parameters as part of the request, POST puts them
    //      in the content of the HTTP packet. this makes it harder to
    //      snoop stuff and when using https, the contents are encrypted.
    xmlhttp.open( "POST", "../../resources/utilities/includes/control-panel-delete-semester.inc.php", true );


    // this set the content of the http pack mime type so that PHP can
    //      process it correctly
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    // build a string of anything you want to pass
    //      the syntax is <name>=<value> for example:
    //
    //              course=COMP205
    //
    //      to pass more than one, separate them with a ?. for example:

    var Argument =  "semester_id=" + semester_id;

    // send the request to the server
    xmlhttp.send(  Argument );
}
