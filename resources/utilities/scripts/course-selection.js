var checkboxes = document.querySelectorAll('input[type="checkbox"]');
console.log(checkboxes);

function displayCourses(){
var checkboxMajor = document.querySelector("#checkbox-major");
var checkboxMathematicalComputationalThinking = document.querySelector("#checkbox-mathematical-computational-thinking");
var checkboxWrittenCommunication = document.querySelector("#checkbox-written-communication");
var checkboxOralCommunication = document.querySelector("#checkbox-oral-communication");
var checkboxPhilosphyLiteratureAesthetic = document.querySelector("#checkbox-philosphy-literature-aesthetic");
var checkboxNaturalScienceInquiry = document.querySelector("#checkbox-natural-science-inquiry");
var checkboxHistoricalBehavioralSocialScience = document.querySelector("#checkbox-historical-behavioral-social-science");
var checkboxGlobalAwarenessCitizenship = document.querySelector("#checkbox-global-awareness-citizenship");
var checkboxWellness = document.querySelector("#checkbox-wellness");

var major = -1;
var mathematicalComputationalThinking = -1;
var writtenCommunication = -1;
var oralCommunication = -1;
var philosphyLiteratureAesthetic = -1;
var naturalScienceInquiry = -1;
var historicalBehavioralSocialScience = -1;
var globalAwarenessCitizenship = -1;
var wellness = -1;


if(checkboxMajor.checked){
    console.log("checkbox-major checked");
    major = -1;
}
if(checkboxMathematicalComputationalThinking.checked){
    console.log("checkboxMathematicalComputationalThinking checked");
    mathematicalComputationalThinking = 2;
}
if(checkboxWrittenCommunication.checked){
    console.log("checkboxWrittenCommunication checked");
    writtenCommunication = 3;
}
if(checkboxOralCommunication.checked){
    console.log("checkboxOralCommunication checked");
    oralCommunication = 4;
}
if(checkboxPhilosphyLiteratureAesthetic.checked){
    console.log("checkboxPhilosphyLiteratureAesthetic checked");
    philosphyLiteratureAesthetic = 5;
}
if(checkboxNaturalScienceInquiry.checked){
    console.log("checkboxNaturalScienceInquiry checked");
    naturalScienceInquiry = 6;
}
if(checkboxHistoricalBehavioralSocialScience.checked){
    console.log("checkboxHistoricalBehavioralSocialScience checked");
    historicalBehavioralSocialScience =7;
}
if(checkboxGlobalAwarenessCitizenship.checked){
    console.log("checkboxGlobalAwarenessCitizenship checked");
    globalAwarenessCitizenship = 8;
}
if(checkboxWellness.checked){
    console.log("checkboxWellness checked");
    wellness = 9;

}


GetClasses( 'courses', mathematicalComputationalThinking, writtenCommunication, oralCommunication, philosphyLiteratureAesthetic,
 naturalScienceInquiry, historicalBehavioralSocialScience, globalAwarenessCitizenship, wellness);

}


//if select all checkbox... check all checkboxes 
function checkAll(myCheckbox){
    if(myCheckbox.checked == true){
        checkboxes.forEach(function(checkbox){
            checkbox.checked = true;
        });
    }
    else{
        checkboxes.forEach(function(checkbox){
            checkbox.checked = false;
        });
    }

    displayCourses();
}

// javascript for lab P6
// get countries for a given class
function GetClasses( ResultsID, mathematicalComputationalThinking, writtenCommunication, oralCommunication, philosphyLiteratureAesthetic,
    naturalScienceInquiry, historicalBehavioralSocialScience, globalAwarenessCitizenship, wellness )
{
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
            document.getElementById( ResultsID ).innerHTML = xmlhttp.responseText;
        }
    }
    
    // create the request. this creates a HTTP POST request
    //      POST requests are better then GET requests. when you start
    //      to pass parameters as part of the request, POST puts them
    //      in the content of the HTTP packet. this makes it harder to
    //      snoop stuff and when using https, the contents are encrypted.
    xmlhttp.open( "POST", "../../resources/utilities/includes/course-selection.inc.php", true );


    // this set the content of the http pack mime type so that PHP can
    //      process it correctly
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    // build a string of anything you want to pass
    //      the syntax is <name>=<value> for example:
    //
    //              course=COMP205
    //
    //      to pass more than one, separate them with a ?. for example:

    var Argument = "mathematicalComputationalThinking="     + mathematicalComputationalThinking
                +   "&writtenCommunication="                + writtenCommunication
                +   "&oralCommunication="                   + oralCommunication
                +   "&philosphyLiteratureAesthetic="        + philosphyLiteratureAesthetic
                +   "&naturalScienceInquiry="               + naturalScienceInquiry
                +   "&historicalBehavioralSocialScience="   + historicalBehavioralSocialScience
                +   "&globalAwarenessCitizenship="          + globalAwarenessCitizenship
                +   "&wellness="                            + wellness;
    

    // send the request to the server
    xmlhttp.send(  Argument );

}
